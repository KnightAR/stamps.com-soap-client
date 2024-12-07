<?php

namespace Knightar\StampsSoapClient\Type;

class ArrayOfArrayOfAddOnTypeV20
{
    /**
     * @var null | array<int<0,max>, \Knightar\StampsSoapClient\Type\ArrayOfAddOnTypeV20>
     */
    private ?array $RequiresOneOf = null;

    /**
     * @return null | array<int<0,max>, \Knightar\StampsSoapClient\Type\ArrayOfAddOnTypeV20>
     */
    public function getRequiresOneOf() : ?array
    {
        return $this->RequiresOneOf;
    }

    /**
     * @param null | array<int<0,max>, \Knightar\StampsSoapClient\Type\ArrayOfAddOnTypeV20> $RequiresOneOf
     * @return static
     */
    public function withRequiresOneOf(?array $RequiresOneOf) : static
    {
        $new = clone $this;
        $new->RequiresOneOf = $RequiresOneOf;

        return $new;
    }
}

