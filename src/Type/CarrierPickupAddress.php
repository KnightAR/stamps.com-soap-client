<?php

namespace Knightar\StampsSoapClient\Type;

class CarrierPickupAddress
{
    /**
     * @var null | string
     */
    private ?string $Company = null;

    /**
     * @var string
     */
    private string $Address;

    /**
     * @var null | string
     */
    private ?string $SuiteOrApt = null;

    /**
     * @var string
     */
    private string $City;

    /**
     * @var string
     */
    private string $State;

    /**
     * @var string
     */
    private string $ZIP;

    /**
     * @var null | string
     */
    private ?string $ZIP4 = null;

    /**
     * @return null | string
     */
    public function getCompany() : ?string
    {
        return $this->Company;
    }

    /**
     * @param null | string $Company
     * @return static
     */
    public function withCompany(?string $Company) : static
    {
        $new = clone $this;
        $new->Company = $Company;

        return $new;
    }

    /**
     * @return string
     */
    public function getAddress() : string
    {
        return $this->Address;
    }

    /**
     * @param string $Address
     * @return static
     */
    public function withAddress(string $Address) : static
    {
        $new = clone $this;
        $new->Address = $Address;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getSuiteOrApt() : ?string
    {
        return $this->SuiteOrApt;
    }

    /**
     * @param null | string $SuiteOrApt
     * @return static
     */
    public function withSuiteOrApt(?string $SuiteOrApt) : static
    {
        $new = clone $this;
        $new->SuiteOrApt = $SuiteOrApt;

        return $new;
    }

    /**
     * @return string
     */
    public function getCity() : string
    {
        return $this->City;
    }

    /**
     * @param string $City
     * @return static
     */
    public function withCity(string $City) : static
    {
        $new = clone $this;
        $new->City = $City;

        return $new;
    }

    /**
     * @return string
     */
    public function getState() : string
    {
        return $this->State;
    }

    /**
     * @param string $State
     * @return static
     */
    public function withState(string $State) : static
    {
        $new = clone $this;
        $new->State = $State;

        return $new;
    }

    /**
     * @return string
     */
    public function getZIP() : string
    {
        return $this->ZIP;
    }

    /**
     * @param string $ZIP
     * @return static
     */
    public function withZIP(string $ZIP) : static
    {
        $new = clone $this;
        $new->ZIP = $ZIP;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getZIP4() : ?string
    {
        return $this->ZIP4;
    }

    /**
     * @param null | string $ZIP4
     * @return static
     */
    public function withZIP4(?string $ZIP4) : static
    {
        $new = clone $this;
        $new->ZIP4 = $ZIP4;

        return $new;
    }
}

