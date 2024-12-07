<?php

namespace Knightar\StampsSoapClient\Type;

class ArrayOfAddOnV20
{
    /**
     * @var null | array<int<0,max>, \Knightar\StampsSoapClient\Type\AddOnV20>
     */
    private ?array $AddOnV20 = null;

    /**
     * @return null | array<int<0,max>, \Knightar\StampsSoapClient\Type\AddOnV20>
     */
    public function getAddOnV20() : ?array
    {
        return $this->AddOnV20;
    }

    /**
     * @param null | array<int<0,max>, \Knightar\StampsSoapClient\Type\AddOnV20> $AddOnV20
     * @return static
     */
    public function withAddOnV20(?array $AddOnV20) : static
    {
        $new = clone $this;
        $new->AddOnV20 = $AddOnV20;

        return $new;
    }
}

