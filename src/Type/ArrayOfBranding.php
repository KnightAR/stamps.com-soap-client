<?php

namespace Knightar\StampsSoapClient\Type;

class ArrayOfBranding
{
    /**
     * @var null | array<int<0,max>, \Knightar\StampsSoapClient\Type\Branding>
     */
    private ?array $Branding = null;

    /**
     * @return null | array<int<0,max>, \Knightar\StampsSoapClient\Type\Branding>
     */
    public function getBranding() : ?array
    {
        return $this->Branding;
    }

    /**
     * @param null | array<int<0,max>, \Knightar\StampsSoapClient\Type\Branding> $Branding
     * @return static
     */
    public function withBranding(?array $Branding) : static
    {
        $new = clone $this;
        $new->Branding = $Branding;

        return $new;
    }
}

