<?php

namespace Knightar\StampsSoapClient\Type;

class ArrayOfSurchargeV5
{
    /**
     * @var null | array<int<0,max>, \Knightar\StampsSoapClient\Type\SurchargeV5>
     */
    private ?array $SurchargeV5 = null;

    /**
     * @return null | array<int<0,max>, \Knightar\StampsSoapClient\Type\SurchargeV5>
     */
    public function getSurchargeV5() : ?array
    {
        return $this->SurchargeV5;
    }

    /**
     * @param null | array<int<0,max>, \Knightar\StampsSoapClient\Type\SurchargeV5> $SurchargeV5
     * @return static
     */
    public function withSurchargeV5(?array $SurchargeV5) : static
    {
        $new = clone $this;
        $new->SurchargeV5 = $SurchargeV5;

        return $new;
    }
}

