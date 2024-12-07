# PHP Soap Client for Stamps.com
This library uses the most recent (at the time of writing) 135 SOAP API.

Obtaining credentials from Stamps.com now requires approval from the sales team and a monthly fee API subscription as of Jan 1st 2024.

### Basic usage

Passing the credentials to any function will automatically create an authentication token for consecutive requests in-memory using the PSR Cache Standard ArrayAdapter.

```PHP
$client = \Knightar\StampsSoapClient\StampsSoapClientClientFactory::factory(
    wsdl:  \Knightar\StampsSoapClient\StampsSoapClientClientFactory::TESTING_WSDL,
    Credentials: (new \Knightar\StampsSoapClient\Type\Credentials)->withIntegrationID($id)->withUsername($username)->withPassword($password),
);
$response = $client->getAccountInfo(new \Knightar\StampsSoapClient\Type\GetAccountInfo());
var_dump($response->getAccountInfo());
```

It is suggested that you use a PSR-6 compatible cache adapter for persistent storage of the token such as recommended Redis or Memcached. A new updated token is generated on every follow-up call and will be stored as requests are made.
 
Here is an example of the FilesystemAdapter:

```PHP
$client = \Knightar\StampsSoapClient\StampsSoapClientClientFactory::factory(
    wsdl:  \Knightar\StampsSoapClient\StampsSoapClientClientFactory::TESTING_WSDL,
    Credentials: (new \Knightar\StampsSoapClient\Type\Credentials)->withIntegrationID($id)->withUsername($username)->withPassword($password),
    cache: (new \Symfony\Component\Cache\Adapter\FilesystemAdapter('', 60 * 60 * 24 * 30, __DIR__ . '/cache'))
);
$response = $client->getAccountInfo(new \Knightar\StampsSoapClient\Type\GetAccountInfo());
var_dump($response->getAccountInfo());
```

Memcached

```PHP
$client = \Knightar\StampsSoapClient\StampsSoapClientClientFactory::factory(
    wsdl:  \Knightar\StampsSoapClient\StampsSoapClientClientFactory::TESTING_WSDL,
    Credentials: (new \Knightar\StampsSoapClient\Type\Credentials)->withIntegrationID($id)->withUsername($username)->withPassword($password),
    cache: (new \Symfony\Component\Cache\Adapter\MemcachedAdapter(\Symfony\Component\Cache\Adapter\MemcachedAdapter::createConnection('memcached://localhost')))
);
$response = $client->getAccountInfo(new \Knightar\StampsSoapClient\Type\GetAccountInfo());
var_dump($response->getAccountInfo());
```

 or Redis.

```PHP
$client = \Knightar\StampsSoapClient\StampsSoapClientClientFactory::factory(
    wsdl:  \Knightar\StampsSoapClient\StampsSoapClientClientFactory::TESTING_WSDL,
    Credentials: (new \Knightar\StampsSoapClient\Type\Credentials)->withIntegrationID($id)->withUsername($username)->withPassword($password),
    cache: (new \Symfony\Component\Cache\Adapter\RedisAdapter(\Symfony\Component\Cache\Adapter\RedisAdapter::createConnection('redis://localhost')
    ))
);
$response = $client->getAccountInfo(new \Knightar\StampsSoapClient\Type\GetAccountInfo());
var_dump($response->getAccountInfo());
```

See the other available cache adapters here: https://symfony.com/doc/7.2/components/cache.html

### Checking for rates

```PHP
$response = $client->getRates(new \Knightar\StampsSoapClient\Type\GetRates(
    (new \Knightar\StampsSoapClient\Type\RateV46)
        ->withFrom(
            (new \Knightar\StampsSoapClient\Type\Address())
                ->withFullName('<FROM NAME>')
                ->withAddress1('<address1>')
                ->withCity('<city>')
                ->withState('<state>')
                ->withPostalCode('<zip>')
                ->withCountry('<country>')
                ->withPhoneNumber('<phone>')
        )
        ->withTo(
            (new \Knightar\StampsSoapClient\Type\Address())
                ->withFullName('<TO NAME>')
                ->withAddress1('<address1>')
                ->withAddress2('<address2>')
                ->withCity('<city>')
                ->withState('<state>')
                ->withPostalCode('<zip>')
                ->withCountry('<country>')
        )
        ->withWeightOz(3)
        ->withPackageType('Letter')
        ->withPrintLayout('Normal')
        ->withServiceType('US-FC')
        ->withShipDate((new \DateTimeImmutable())->add(new \DateInterval('P1D')))
        ->withAddOns((new \Knightar\StampsSoapClient\Type\ArrayOfAddOnV20())->withAddOnV20([
            (new \Knightar\StampsSoapClient\Type\AddOnV20())->withAddOnType('SC-A-HP') //Hide price on shipping label
        ]))
    ,
    'USPS' //ALL, or a specific one
));
var_dump($response->getRates()->getRate()); #@returns [\Knightar\StampsSoapClient\Type\RateV46, ...]

$rate = $response->getRates()->getRate()[0];
```

### Generating a label

```PHP
$response = $client->createIndicium(
    (new \Knightar\StampsSoapClient\Type\CreateIndicium('randomStr' . time(), $rate))
        ->withSampleOnly(true)
        ->withImageType('PDF')
        ->withPostageMode('Normal')
);
var_dump($response->getRates()->getRate()); #@returns [\Knightar\StampsSoapClient\Type\RateV46, ...]
```