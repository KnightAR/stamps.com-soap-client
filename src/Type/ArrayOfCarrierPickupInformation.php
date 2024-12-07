<?php

namespace Knightar\StampsSoapClient\Type;

class ArrayOfCarrierPickupInformation
{
    /**
     * @var null | array<int<0,max>, \Knightar\StampsSoapClient\Type\CarrierPickupInformation>
     */
    private ?array $CarrierPickupInformation = null;

    /**
     * @return null | array<int<0,max>, \Knightar\StampsSoapClient\Type\CarrierPickupInformation>
     */
    public function getCarrierPickupInformation() : ?array
    {
        return $this->CarrierPickupInformation;
    }

    /**
     * @param null | array<int<0,max>, \Knightar\StampsSoapClient\Type\CarrierPickupInformation> $CarrierPickupInformation
     * @return static
     */
    public function withCarrierPickupInformation(?array $CarrierPickupInformation) : static
    {
        $new = clone $this;
        $new->CarrierPickupInformation = $CarrierPickupInformation;

        return $new;
    }
}

