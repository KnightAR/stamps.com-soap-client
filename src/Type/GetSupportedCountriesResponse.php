<?php

namespace Knightar\StampsSoapClient\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetSupportedCountriesResponse implements ResultInterface
{
    /**
     * @var string
     */
    private string $Authenticator;

    /**
     * @var \Knightar\StampsSoapClient\Type\ArrayOfCountryInfo
     */
    private \Knightar\StampsSoapClient\Type\ArrayOfCountryInfo $CountryInfo;

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
     * @return \Knightar\StampsSoapClient\Type\ArrayOfCountryInfo
     */
    public function getCountryInfo() : \Knightar\StampsSoapClient\Type\ArrayOfCountryInfo
    {
        return $this->CountryInfo;
    }

    /**
     * @param \Knightar\StampsSoapClient\Type\ArrayOfCountryInfo $CountryInfo
     * @return static
     */
    public function withCountryInfo(\Knightar\StampsSoapClient\Type\ArrayOfCountryInfo $CountryInfo) : static
    {
        $new = clone $this;
        $new->CountryInfo = $CountryInfo;

        return $new;
    }
}

