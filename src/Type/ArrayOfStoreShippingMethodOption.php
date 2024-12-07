<?php

namespace Knightar\StampsSoapClient\Type;

class ArrayOfStoreShippingMethodOption
{
    /**
     * @var null | array<int<0,max>, \Knightar\StampsSoapClient\Type\StoreShippingMethodOption>
     */
    private ?array $StoreShippingMethodOption = null;

    /**
     * @return null | array<int<0,max>, \Knightar\StampsSoapClient\Type\StoreShippingMethodOption>
     */
    public function getStoreShippingMethodOption() : ?array
    {
        return $this->StoreShippingMethodOption;
    }

    /**
     * @param null | array<int<0,max>, \Knightar\StampsSoapClient\Type\StoreShippingMethodOption> $StoreShippingMethodOption
     * @return static
     */
    public function withStoreShippingMethodOption(?array $StoreShippingMethodOption) : static
    {
        $new = clone $this;
        $new->StoreShippingMethodOption = $StoreShippingMethodOption;

        return $new;
    }
}

