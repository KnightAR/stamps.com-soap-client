## PHP Soap Client for Stamps.com

### Example code

### Passing the credentials to any function will automatically create

```PHP
$client = \Knightar\StampsSoapClient\StampsSoapClientClientFactory::factory('https://swsim.testing.stamps.com/swsim/swsimv135.asmx?wsdl');
$response = $client->getAccountInfo(new \Knightar\StampsSoapClient\Type\GetAccountInfo(
    Credentials: (new \Knightar\StampsSoapClient\Type\Credentials)
        ->withIntegrationID($id)
        ->withUsername($username)
        ->withPassword($password)
));
var_dump($response->getAccountInfo());
```