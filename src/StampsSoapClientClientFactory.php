<?php

namespace Knightar\StampsSoapClient;

use Knightar\StampsSoapClient\Events\AuthenticationSubscriber;
use Knightar\StampsSoapClient\StampsSoapClientClient;
use Knightar\StampsSoapClient\StampsSoapClientClassmap;
use Symfony\Component\EventDispatcher\EventDispatcher;
use Phpro\SoapClient\Soap\DefaultEngineFactory;
use Soap\ExtSoapEngine\ExtSoapOptions;
use Phpro\SoapClient\Caller\EventDispatchingCaller;
use Phpro\SoapClient\Caller\EngineCaller;

class StampsSoapClientClientFactory
{
    public static function factory(string $wsdl = 'https://swsim.stamps.com/swsim/swsimv135.asmx?WSDL') : \Knightar\StampsSoapClient\StampsSoapClientClient
    {
        $engine = DefaultEngineFactory::create(
            ExtSoapOptions::defaults($wsdl, [])
                ->withClassMap(StampsSoapClientClassmap::getCollection())
        );

        $eventDispatcher = new EventDispatcher();
        $authSubscriber = new AuthenticationSubscriber($wsdl);
        $eventDispatcher->addSubscriber($authSubscriber);
        $caller = new EventDispatchingCaller(new EngineCaller($engine), $eventDispatcher);

        return new StampsSoapClientClient($caller);
    }
}

