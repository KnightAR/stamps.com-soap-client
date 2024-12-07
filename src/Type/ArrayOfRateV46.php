<?php

namespace Knightar\StampsSoapClient\Type;

class ArrayOfRateV46
{
    /**
     * @var null | array<int<0,max>, \Knightar\StampsSoapClient\Type\RateV46>
     */
    private ?array $Rate = null;

    /**
     * @return null | array<int<0,max>, \Knightar\StampsSoapClient\Type\RateV46>
     */
    public function getRate() : ?array
    {
        return $this->Rate;
    }

    /**
     * @param null | array<int<0,max>, \Knightar\StampsSoapClient\Type\RateV46> $Rate
     * @return static
     */
    public function withRate(?array $Rate) : static
    {
        $new = clone $this;
        $new->Rate = $Rate;

        return $new;
    }
}

