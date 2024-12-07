<?php

namespace Knightar\StampsSoapClient\Type;

class ArrayOfOrderItem
{
    /**
     * @var null | array<int<0,max>, \Knightar\StampsSoapClient\Type\OrderItem>
     */
    private ?array $OrderItem = null;

    /**
     * @return null | array<int<0,max>, \Knightar\StampsSoapClient\Type\OrderItem>
     */
    public function getOrderItem() : ?array
    {
        return $this->OrderItem;
    }

    /**
     * @param null | array<int<0,max>, \Knightar\StampsSoapClient\Type\OrderItem> $OrderItem
     * @return static
     */
    public function withOrderItem(?array $OrderItem) : static
    {
        $new = clone $this;
        $new->OrderItem = $OrderItem;

        return $new;
    }
}

