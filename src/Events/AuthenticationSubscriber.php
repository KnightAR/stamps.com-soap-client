<?php

namespace Knightar\StampsSoapClient\Events;

use Knightar\StampsSoapClient\Type\CreateEnvelopeIndicium;
use Knightar\StampsSoapClient\Type\CreateEnvelopeIndiciumResponse;
use Phpro\SoapClient\Event\RequestEvent;
use Phpro\SoapClient\Event\ResponseEvent;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class AuthenticationSubscriber implements EventSubscriberInterface
{
    public ?string $lastResponse = null;
    public $wsdl;

    public function __construct(string $wsdl) {
        $this->wsdl = $wsdl;
    }

    /**
     * @param RequestEvent $event
     */
    public function onClientRequest(RequestEvent &$event)
    {
        /** @var CreateEnvelopeIndicium $request */
        $request = $event->getRequest();
        if ($event->getMethod() !== 'AuthenticateUser' && method_exists($request, 'withAuthenticator')) {
            if ($this->lastResponse) {
                $request = $request->withAuthenticator($this->lastResponse)->withCredentials(null);
                $event->registerRequest($request);
            } elseif (method_exists($request, 'getCredentials') && $request->getCredentials()) {
                $client = \Knightar\StampsSoapClient\StampsSoapClientClientFactory::factory($this->wsdl);
                $authUser = $client->authenticateUser(new \Knightar\StampsSoapClient\Type\AuthenticateUser($request->getCredentials()));
                $this->lastResponse = $authUser->getAuthenticator();
                $request = $request->withAuthenticator($this->lastResponse)->withCredentials(null);
                $event->registerRequest($request);
            }
        }
        return $request;
    }

    /**
     * @param ResponseEvent $event
     */
    public function onClientResponse(ResponseEvent $event)
    {
        /** @var CreateEnvelopeIndiciumResponse $response */
        $response = $event->getResponse();
        if (method_exists($response, 'getAuthenticator')) {
            $this->lastResponse = $response->getAuthenticator();
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