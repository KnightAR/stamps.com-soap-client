<?php

namespace Knightar\StampsSoapClient\Type;

class CountryInfo
{
    /**
     * @var string
     */
    private string $Name;

    /**
     * @var string
     */
    private string $IsoCode;

    /**
     * @return string
     */
    public function getName() : string
    {
        return $this->Name;
    }

    /**
     * @param string $Name
     * @return static
     */
    public function withName(string $Name) : static
    {
        $new = clone $this;
        $new->Name = $Name;

        return $new;
    }

    /**
     * @return string
     */
    public function getIsoCode() : string
    {
        return $this->IsoCode;
    }

    /**
     * @param string $IsoCode
     * @return static
     */
    public function withIsoCode(string $IsoCode) : static
    {
        $new = clone $this;
        $new->IsoCode = $IsoCode;

        return $new;
    }
}

