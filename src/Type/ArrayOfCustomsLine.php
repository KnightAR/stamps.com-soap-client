<?php

namespace Knightar\StampsSoapClient\Type;

class ArrayOfCustomsLine
{
    /**
     * @var null | array<int<0,max>, \Knightar\StampsSoapClient\Type\CustomsLine>
     */
    private ?array $CustomsLine = null;

    /**
     * @return null | array<int<0,max>, \Knightar\StampsSoapClient\Type\CustomsLine>
     */
    public function getCustomsLine() : ?array
    {
        return $this->CustomsLine;
    }

    /**
     * @param null | array<int<0,max>, \Knightar\StampsSoapClient\Type\CustomsLine> $CustomsLine
     * @return static
     */
    public function withCustomsLine(?array $CustomsLine) : static
    {
        $new = clone $this;
        $new->CustomsLine = $CustomsLine;

        return $new;
    }
}

