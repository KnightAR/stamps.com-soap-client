<?php

namespace Knightar\StampsSoapClient\Type;

class CarrierPickupContactInformation
{
    /**
     * @var string
     */
    private string $FirstName;

    /**
     * @var string
     */
    private string $LastName;

    /**
     * @var string
     */
    private string $PhoneNumber;

    /**
     * @var null | string
     */
    private ?string $PhoneExt = null;

    /**
     * @return string
     */
    public function getFirstName() : string
    {
        return $this->FirstName;
    }

    /**
     * @param string $FirstName
     * @return static
     */
    public function withFirstName(string $FirstName) : static
    {
        $new = clone $this;
        $new->FirstName = $FirstName;

        return $new;
    }

    /**
     * @return string
     */
    public function getLastName() : string
    {
        return $this->LastName;
    }

    /**
     * @param string $LastName
     * @return static
     */
    public function withLastName(string $LastName) : static
    {
        $new = clone $this;
        $new->LastName = $LastName;

        return $new;
    }

    /**
     * @return string
     */
    public function getPhoneNumber() : string
    {
        return $this->PhoneNumber;
    }

    /**
     * @param string $PhoneNumber
     * @return static
     */
    public function withPhoneNumber(string $PhoneNumber) : static
    {
        $new = clone $this;
        $new->PhoneNumber = $PhoneNumber;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getPhoneExt() : ?string
    {
        return $this->PhoneExt;
    }

    /**
     * @param null | string $PhoneExt
     * @return static
     */
    public function withPhoneExt(?string $PhoneExt) : static
    {
        $new = clone $this;
        $new->PhoneExt = $PhoneExt;

        return $new;
    }
}

