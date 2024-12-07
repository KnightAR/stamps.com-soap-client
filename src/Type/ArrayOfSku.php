<?php

namespace Knightar\StampsSoapClient\Type;

class ArrayOfSku
{
    /**
     * @var null | array<int<0,max>, \Knightar\StampsSoapClient\Type\Sku>
     */
    private ?array $Sku = null;

    /**
     * @return null | array<int<0,max>, \Knightar\StampsSoapClient\Type\Sku>
     */
    public function getSku() : ?array
    {
        return $this->Sku;
    }

    /**
     * @param null | array<int<0,max>, \Knightar\StampsSoapClient\Type\Sku> $Sku
     * @return static
     */
    public function withSku(?array $Sku) : static
    {
        $new = clone $this;
        $new->Sku = $Sku;

        return $new;
    }
}

