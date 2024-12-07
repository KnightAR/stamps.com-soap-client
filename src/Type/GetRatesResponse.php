<?php

namespace Knightar\StampsSoapClient\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetRatesResponse implements ResultInterface
{
    /**
     * @var string
     */
    private string $Authenticator;

    /**
     * @var \Knightar\StampsSoapClient\Type\ArrayOfRateV46
     */
    private \Knightar\StampsSoapClient\Type\ArrayOfRateV46 $Rates;

    /**
     * @return string
     */
    public function getAuthenticator() : string
    {
        return $this->Authenticator;
    }

    /**
     * @param string $Authenticator
     * @return static
     */
    public function withAuthenticator(string $Authenticator) : static
    {
        $new = clone $this;
        $new->Authenticator = $Authenticator;

        return $new;
    }

    /**
     * @return \Knightar\StampsSoapClient\Type\ArrayOfRateV46
     */
    public function getRates() : \Knightar\StampsSoapClient\Type\ArrayOfRateV46
    {
        return $this->Rates;
    }

    /**
     * @param \Knightar\StampsSoapClient\Type\ArrayOfRateV46 $Rates
     * @return static
     */
    public function withRates(\Knightar\StampsSoapClient\Type\ArrayOfRateV46 $Rates) : static
    {
        $new = clone $this;
        $new->Rates = $Rates;

        return $new;
    }
}

