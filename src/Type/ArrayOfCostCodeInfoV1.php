<?php

namespace Knightar\StampsSoapClient\Type;

class ArrayOfCostCodeInfoV1
{
    /**
     * @var null | array<int<0,max>, \Knightar\StampsSoapClient\Type\CostCodeInfoV1>
     */
    private ?array $CostCodes = null;

    /**
     * @return null | array<int<0,max>, \Knightar\StampsSoapClient\Type\CostCodeInfoV1>
     */
    public function getCostCodes() : ?array
    {
        return $this->CostCodes;
    }

    /**
     * @param null | array<int<0,max>, \Knightar\StampsSoapClient\Type\CostCodeInfoV1> $CostCodes
     * @return static
     */
    public function withCostCodes(?array $CostCodes) : static
    {
        $new = clone $this;
        $new->CostCodes = $CostCodes;

        return $new;
    }
}

