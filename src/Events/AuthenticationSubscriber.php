<?php

namespace Knightar\StampsSoapClient\Events;

use Knightar\StampsSoapClient\Type\CreateEnvelopeIndicium;
use Knightar\StampsSoapClient\Type\CreateEnvelopeIndiciumResponse;
use Phpro\SoapClient\Event\RequestEvent;
use Phpro\SoapClient\Event\ResponseEvent;
use Phpro\SoapClient\Type\RequestInterface;
use Phpro\SoapClient\Type\ResultInterface;
use Psr\Cache\InvalidArgumentException;
use Symfony\Component\Cache\Adapter\AdapterInterface;
use Symfony\Component\Cache\Adapter\ArrayAdapter;
use Symfony\Component\Cache\Exception\CacheException;
use Symfony\Component\Cache\Psr16Cache;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class AuthenticationSubscriber implements EventSubscriberInterface
{
    public ?\Knightar\StampsSoapClient\Type\Credentials $Credentials = null;
    public string $wsdl;
    public Psr16Cache $cache;

    public function __construct(
        string $wsdl,
        ?\Knightar\StampsSoapClient\Type\Credentials $Credentials = null,
        null|Psr16Cache|AdapterInterface $cache = null
    ) {
        $this->wsdl = $wsdl;
        $this->Credentials = $Credentials;
        $this->cache = $cache instanceof Psr16Cache ? $cache : new Psr16Cache($cache ?? new ArrayAdapter());
    }

    /**
     * @param RequestEvent $event
     * @throws InvalidArgumentException
     */
    public function onClientRequest(RequestEvent $event)
    {
        /** @var CreateEnvelopeIndicium $request */
        $request = $event->getRequest();
        if ($event->getMethod() !== 'AuthenticateUser' && method_exists($request, 'withAuthenticator')) {
            if ($this->cache->has('authenticator') && $this->cache->get('authenticator')) {
                $event->registerRequest($request->withAuthenticator($this->cache->get('authenticator'))->withCredentials(null));
            } elseif (method_exists($request, 'getCredentials') && ($request->getCredentials() ?? $this->Credentials)) {
                $authenticator = $this->getAuthenticator($request);
                parse_str($authenticator, $auth);
                if (!$this->cache->set('authenticator', $authenticator, ($auth['exp'] ?? 60 * 60 * 24) - 3600)) {
                    throw new CacheException('Failed to set authenticator in cache');
                }
                $event->registerRequest($request->withAuthenticator($this->cache->get('authenticator'))->withCredentials(null));
            }
        }
    }

    /**
     * @param CreateEnvelopeIndicium|RequestInterface|ResultInterface $request
     * @return string
     */
    private function getAuthenticator(RequestInterface|ResultInterface $request) : string
    {
        $client = \Knightar\StampsSoapClient\StampsSoapClientClientFactory::factory(
            wsdl: $this->wsdl,
            cache: $this->cache
        );
        $authUser = $client->authenticateUser(new \Knightar\StampsSoapClient\Type\AuthenticateUser($request->getCredentials() ?? $this->Credentials));
        return $authUser->getAuthenticator();
    }

    /**
     * @param ResponseEvent $event
     * @throws \Psr\SimpleCache\InvalidArgumentException
     */
    public function onClientResponse(ResponseEvent $event)
    {
        /** @var CreateEnvelopeIndiciumResponse $response */
        $response = $event->getResponse();
        if (method_exists($response, 'getAuthenticator')) {
            $authenticator = $response->getAuthenticator();
            parse_str($authenticator, $auth);
            $this->cache->set('authenticator', $authenticator, ($auth['exp'] ?? 60 * 60 * 24) - 3600);
            if ($event->getRequestEvent()->getMethod() !== 'AuthenticateUser' && method_exists($response, 'withAuthenticator')) {
                //We want to exclude this from the output, we should also make this a configuration in case the response is needed to the requester?
                $event->registerResponse($response->withAuthenticator(''));
            }
        }
    }

    /**
     * {@inheritdoc}
     */
    public static function getSubscribedEvents(): array
    {
        return array(
            RequestEvent::class  => 'onClientRequest',
            ResponseEvent::class  => 'onClientResponse'
        );
    }
}