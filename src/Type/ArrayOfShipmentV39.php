<?php

namespace Knightar\StampsSoapClient\Type;

class ArrayOfShipmentV39
{
    /**
     * @var null | array<int<0,max>, \Knightar\StampsSoapClient\Type\ShipmentV39>
     */
    private ?array $ShipmentV39 = null;

    /**
     * @return null | array<int<0,max>, \Knightar\StampsSoapClient\Type\ShipmentV39>
     */
    public function getShipmentV39() : ?array
    {
        return $this->ShipmentV39;
    }

    /**
     * @param null | array<int<0,max>, \Knightar\StampsSoapClient\Type\ShipmentV39> $ShipmentV39
     * @return static
     */
    public function withShipmentV39(?array $ShipmentV39) : static
    {
        $new = clone $this;
        $new->ShipmentV39 = $ShipmentV39;

        return $new;
    }
}

