<?php

namespace Knightar\StampsSoapClient\Type;

class ArrayOfPlan
{
    /**
     * @var null | array<int<0,max>, \Knightar\StampsSoapClient\Type\Plan>
     */
    private ?array $Plan = null;

    /**
     * @return null | array<int<0,max>, \Knightar\StampsSoapClient\Type\Plan>
     */
    public function getPlan() : ?array
    {
        return $this->Plan;
    }

    /**
     * @param null | array<int<0,max>, \Knightar\StampsSoapClient\Type\Plan> $Plan
     * @return static
     */
    public function withPlan(?array $Plan) : static
    {
        $new = clone $this;
        $new->Plan = $Plan;

        return $new;
    }
}

