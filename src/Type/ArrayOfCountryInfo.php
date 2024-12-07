<?php

namespace Knightar\StampsSoapClient\Type;

class ArrayOfCountryInfo
{
    /**
     * @var null | array<int<0,max>, \Knightar\StampsSoapClient\Type\CountryInfo>
     */
    private ?array $CountryInfo = null;

    /**
     * @return null | array<int<0,max>, \Knightar\StampsSoapClient\Type\CountryInfo>
     */
    public function getCountryInfo() : ?array
    {
        return $this->CountryInfo;
    }

    /**
     * @param null | array<int<0,max>, \Knightar\StampsSoapClient\Type\CountryInfo> $CountryInfo
     * @return static
     */
    public function withCountryInfo(?array $CountryInfo) : static
    {
        $new = clone $this;
        $new->CountryInfo = $CountryInfo;

        return $new;
    }
}

