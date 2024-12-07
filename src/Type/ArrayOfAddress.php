<?php

namespace Knightar\StampsSoapClient\Type;

class ArrayOfAddress
{
    /**
     * @var null | array<int<0,max>, \Knightar\StampsSoapClient\Type\Address>
     */
    private ?array $Address = null;

    /**
     * @return null | array<int<0,max>, \Knightar\StampsSoapClient\Type\Address>
     */
    public function getAddress() : ?array
    {
        return $this->Address;
    }

    /**
     * @param null | array<int<0,max>, \Knightar\StampsSoapClient\Type\Address> $Address
     * @return static
     */
    public function withAddress(?array $Address) : static
    {
        $new = clone $this;
        $new->Address = $Address;

        return $new;
    }
}

