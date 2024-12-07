<?php

namespace Knightar\StampsSoapClient\Type;

use Phpro\SoapClient\Type\ResultInterface;

class CleanseAddressResponse implements ResultInterface
{
    /**
     * @var string
     */
    private string $Authenticator;

    /**
     * @var \Knightar\StampsSoapClient\Type\Address
     */
    private \Knightar\StampsSoapClient\Type\Address $Address;

    /**
     * @var bool
     */
    private bool $AddressMatch;

    /**
     * @var bool
     */
    private bool $CityStateZipOK;

    /**
     * @var 'Yes' | 'No' | 'Unknown' | 'Unsupported'
     */
    private string $ResidentialDeliveryIndicator;

    /**
     * @var null | bool
     */
    private ?bool $IsPOBox = null;

    /**
     * @var \Knightar\StampsSoapClient\Type\ArrayOfAddress
     */
    private \Knightar\StampsSoapClient\Type\ArrayOfAddress $CandidateAddresses;

    /**
     * @var \Knightar\StampsSoapClient\Type\StatusCodes
     */
    private \Knightar\StampsSoapClient\Type\StatusCodes $StatusCodes;

    /**
     * @var null | \Knightar\StampsSoapClient\Type\ArrayOfRateV46
     */
    private ?\Knightar\StampsSoapClient\Type\ArrayOfRateV46 $Rates = null;

    /**
     * @var null | string
     */
    private ?string $AddressCleansingResult = null;

    /**
     * @var 'Partial' | 'Maximum' | 'None'
     */
    private string $VerificationLevel;

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
     * @return \Knightar\StampsSoapClient\Type\Address
     */
    public function getAddress() : \Knightar\StampsSoapClient\Type\Address
    {
        return $this->Address;
    }

    /**
     * @param \Knightar\StampsSoapClient\Type\Address $Address
     * @return static
     */
    public function withAddress(\Knightar\StampsSoapClient\Type\Address $Address) : static
    {
        $new = clone $this;
        $new->Address = $Address;

        return $new;
    }

    /**
     * @return bool
     */
    public function getAddressMatch() : bool
    {
        return $this->AddressMatch;
    }

    /**
     * @param bool $AddressMatch
     * @return static
     */
    public function withAddressMatch(bool $AddressMatch) : static
    {
        $new = clone $this;
        $new->AddressMatch = $AddressMatch;

        return $new;
    }

    /**
     * @return bool
     */
    public function getCityStateZipOK() : bool
    {
        return $this->CityStateZipOK;
    }

    /**
     * @param bool $CityStateZipOK
     * @return static
     */
    public function withCityStateZipOK(bool $CityStateZipOK) : static
    {
        $new = clone $this;
        $new->CityStateZipOK = $CityStateZipOK;

        return $new;
    }

    /**
     * @return 'Yes' | 'No' | 'Unknown' | 'Unsupported'
     */
    public function getResidentialDeliveryIndicator() : string
    {
        return $this->ResidentialDeliveryIndicator;
    }

    /**
     * @param 'Yes' | 'No' | 'Unknown' | 'Unsupported' $ResidentialDeliveryIndicator
     * @return static
     */
    public function withResidentialDeliveryIndicator(string $ResidentialDeliveryIndicator) : static
    {
        $new = clone $this;
        $new->ResidentialDeliveryIndicator = $ResidentialDeliveryIndicator;

        return $new;
    }

    /**
     * @return null | bool
     */
    public function getIsPOBox() : ?bool
    {
        return $this->IsPOBox;
    }

    /**
     * @param null | bool $IsPOBox
     * @return static
     */
    public function withIsPOBox(?bool $IsPOBox) : static
    {
        $new = clone $this;
        $new->IsPOBox = $IsPOBox;

        return $new;
    }

    /**
     * @return \Knightar\StampsSoapClient\Type\ArrayOfAddress
     */
    public function getCandidateAddresses() : \Knightar\StampsSoapClient\Type\ArrayOfAddress
    {
        return $this->CandidateAddresses;
    }

    /**
     * @param \Knightar\StampsSoapClient\Type\ArrayOfAddress $CandidateAddresses
     * @return static
     */
    public function withCandidateAddresses(\Knightar\StampsSoapClient\Type\ArrayOfAddress $CandidateAddresses) : static
    {
        $new = clone $this;
        $new->CandidateAddresses = $CandidateAddresses;

        return $new;
    }

    /**
     * @return \Knightar\StampsSoapClient\Type\StatusCodes
     */
    public function getStatusCodes() : \Knightar\StampsSoapClient\Type\StatusCodes
    {
        return $this->StatusCodes;
    }

    /**
     * @param \Knightar\StampsSoapClient\Type\StatusCodes $StatusCodes
     * @return static
     */
    public function withStatusCodes(\Knightar\StampsSoapClient\Type\StatusCodes $StatusCodes) : static
    {
        $new = clone $this;
        $new->StatusCodes = $StatusCodes;

        return $new;
    }

    /**
     * @return null | \Knightar\StampsSoapClient\Type\ArrayOfRateV46
     */
    public function getRates() : ?\Knightar\StampsSoapClient\Type\ArrayOfRateV46
    {
        return $this->Rates;
    }

    /**
     * @param null | \Knightar\StampsSoapClient\Type\ArrayOfRateV46 $Rates
     * @return static
     */
    public function withRates(?\Knightar\StampsSoapClient\Type\ArrayOfRateV46 $Rates) : static
    {
        $new = clone $this;
        $new->Rates = $Rates;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getAddressCleansingResult() : ?string
    {
        return $this->AddressCleansingResult;
    }

    /**
     * @param null | string $AddressCleansingResult
     * @return static
     */
    public function withAddressCleansingResult(?string $AddressCleansingResult) : static
    {
        $new = clone $this;
        $new->AddressCleansingResult = $AddressCleansingResult;

        return $new;
    }

    /**
     * @return 'Partial' | 'Maximum' | 'None'
     */
    public function getVerificationLevel() : string
    {
        return $this->VerificationLevel;
    }

    /**
     * @param 'Partial' | 'Maximum' | 'None' $VerificationLevel
     * @return static
     */
    public function withVerificationLevel(string $VerificationLevel) : static
    {
        $new = clone $this;
        $new->VerificationLevel = $VerificationLevel;

        return $new;
    }
}

