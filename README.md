# PHP Soap Client for Stamps.com
This library uses the most recent (at the time of writing) 135 SOAP API.

Obtaining credentials from Stamps.com now requires approval from the sales team and a monthly fee API subscription as of Jan 1st 2024.

### Basic usage

Passing the credentials to any function will automatically create an authentication token for consecutive requests in-memory using the PSR Cache Standard ArrayAdapter.

```PHP
$client = \Knightar\StampsSoapClient\StampsSoapClientClientFactory::factory(
    wsdl:  \Knightar\StampsSoapClient\StampsSoapClientClientFactory::TESTING_WSDL,
    Credentials: new \Knightar\StampsSoapClient\Type\Credentials(IntegrationID: $id, Username: $username, Password: $password),
);
$response = $client->getAccountInfo(new \Knightar\StampsSoapClient\Type\GetAccountInfo());
var_dump($response->getAccountInfo());
```

It is suggested that you use a PSR-6 compatible cache adapter for persistent storage of the token such as recommended Redis or Memcached. A new updated token is generated on every follow-up call and will be stored as requests are made.
 
Here is an example of the FilesystemAdapter:

```PHP
$client = \Knightar\StampsSoapClient\StampsSoapClientClientFactory::factory(
    wsdl:  \Knightar\StampsSoapClient\StampsSoapClientClientFactory::TESTING_WSDL,
    Credentials: new \Knightar\StampsSoapClient\Type\Credentials(IntegrationID: $id, Username: $username, Password: $password),
    cache: (new \Symfony\Component\Cache\Adapter\FilesystemAdapter('', 60 * 60 * 24 * 30, __DIR__ . '/cache'))
);
$response = $client->getAccountInfo(new \Knightar\StampsSoapClient\Type\GetAccountInfo());
var_dump($response->getAccountInfo());
```

Memcached

```PHP
$client = \Knightar\StampsSoapClient\StampsSoapClientClientFactory::factory(
    wsdl:  \Knightar\StampsSoapClient\StampsSoapClientClientFactory::TESTING_WSDL,
    Credentials: new \Knightar\StampsSoapClient\Type\Credentials(IntegrationID: $id, Username: $username, Password: $password),
    cache: (new \Symfony\Component\Cache\Adapter\MemcachedAdapter(\Symfony\Component\Cache\Adapter\MemcachedAdapter::createConnection('memcached://localhost')))
);
$response = $client->getAccountInfo(new \Knightar\StampsSoapClient\Type\GetAccountInfo());
var_dump($response->getAccountInfo());
```

 or Redis.

```PHP
$client = \Knightar\StampsSoapClient\StampsSoapClientClientFactory::factory(
    wsdl:  \Knightar\StampsSoapClient\StampsSoapClientClientFactory::TESTING_WSDL,
    Credentials: new \Knightar\StampsSoapClient\Type\Credentials(IntegrationID: $id, Username: $username, Password: $password),
    cache: (new \Symfony\Component\Cache\Adapter\RedisAdapter(\Symfony\Component\Cache\Adapter\RedisAdapter::createConnection('redis://localhost')))
);
$response = $client->getAccountInfo(new \Knightar\StampsSoapClient\Type\GetAccountInfo());
var_dump($response->getAccountInfo());
```

See the other available cache adapters here: https://symfony.com/doc/7.2/components/cache.html

### Checking for rates

```PHP
$rateV46Request = new \Knightar\StampsSoapClient\Type\RateV46(
    From: new \Knightar\StampsSoapClient\Type\Address(
        FullName: 'Brandon Lis',
        Address1: '7609 Vanity Ct',
        City: 'Las Vegas',
        State: 'NV',
        PostalCode: '89149',
        Country: 'US',
        PhoneNumber: '760-331-7093'
    ),
    To: new \Knightar\StampsSoapClient\Type\Address(
        FullName: 'Sichenzia Ross Ference Carmel LLP',
        Address1: '1185 6th Avenue',
        Address2: '31st Floor',
        City: 'New York',
        State: 'NY',
        PostalCode: '10036',
        Country: 'US'
    ),
    ServiceType: 'UC-FC',
    PrintLayout: 'Normal',
    WeightOz: 3,
    PackageType: 'Letter',
    ShipDate: (new \DateTimeImmutable)->add(new \DateInterval('P1D')),
    AddOns: \Knightar\StampsSoapClient\Type\ArrayOfAddOnV20::create([
        new \Knightar\StampsSoapClient\Type\AddOnV20(AddOnType: 'SC-A-HP')
    ])
);

$response = $client->getRates(new \Knightar\StampsSoapClient\Type\GetRates(
    Rate: $rateV46Request,
    Carrier: 'USPS' //ALL, or a specific one
));
var_dump($response->getRates()->getRate()); #@returns [\Knightar\StampsSoapClient\Type\RateV46, ...]

$rate = $response->getRates()->getRate()[0];
```

### Generating a label

```PHP
$response = $client->createIndicium(new \Knightar\StampsSoapClient\Type\CreateIndicium(
    IntegratorTxID: 'randomStr' . time(), //Such as UUID or \Str::random()
    Rate: $rate, //This is from the GetRate response
    SampleOnly: true,
    PostageMode: \Knightar\StampsSoapClient\Type\CreateIndicium::POSTAGE_MODE_NORMAL,
    ImageType: \Knightar\StampsSoapClient\Type\CreateIndicium::IMAGE_TYPE_PDF,
));
var_dump($response); //@returns \Knightar\StampsSoapClient\Type\CreateIndiciumResponse
```