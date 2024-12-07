<?php

namespace Knightar\StampsSoapClient;

use Knightar\StampsSoapClient\Events\AuthenticationSubscriber;
use Knightar\StampsSoapClient\StampsSoapClientClient;
use Knightar\StampsSoapClient\StampsSoapClientClassmap;
use Psr\Cache\CacheItemInterface;
use Psr\Cache\CacheItemPoolInterface;
use Symfony\Component\Cache\Adapter\AdapterInterface;
use Symfony\Component\Cache\Psr16Cache;
use Symfony\Component\EventDispatcher\EventDispatcher;
use Phpro\SoapClient\Soap\DefaultEngineFactory;
use Soap\ExtSoapEngine\ExtSoapOptions;
use Phpro\SoapClient\Caller\EventDispatchingCaller;
use Phpro\SoapClient\Caller\EngineCaller;

class StampsSoapClientClientFactory
{
    const PRODUCTION_WSDL = 'https://swsim.stamps.com/swsim/swsimv135.asmx?WSDL';
    const TESTING_WSDL = 'https://swsim.testing.stamps.com/swsim/swsimv135.asmx?wsdl';

    public static function factory(
        string $wsdl = self::PRODUCTION_WSDL,
        ?\Knightar\StampsSoapClient\Type\Credentials $Credentials = null,
        null|Psr16Cache|AdapterInterface $cache = null
    ) : \Knightar\StampsSoapClient\StampsSoapClientClient
    {
        $engine = DefaultEngineFactory::create(
            ExtSoapOptions::defaults($wsdl, [])
                ->withClassMap(StampsSoapClientClassmap::getCollection())
        );

        $eventDispatcher = new EventDispatcher();
        $authSubscriber = new AuthenticationSubscriber(
            wsdl: $wsdl,
            Credentials: $Credentials,
            cache: $cache
        );
        $eventDispatcher->addSubscriber($authSubscriber);
        $caller = new EventDispatchingCaller(new EngineCaller($engine), $eventDispatcher);

        return new StampsSoapClientClient($caller);
    }
}

