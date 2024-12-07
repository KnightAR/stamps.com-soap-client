<?php

namespace Knightar\StampsSoapClient\Type;

class ArrayOfIndiciumInfoV39
{
    /**
     * @var null | array<int<0,max>, \Knightar\StampsSoapClient\Type\IndiciumInfoV39>
     */
    private ?array $IndiciumInfoV39 = null;

    /**
     * @return null | array<int<0,max>, \Knightar\StampsSoapClient\Type\IndiciumInfoV39>
     */
    public function getIndiciumInfoV39() : ?array
    {
        return $this->IndiciumInfoV39;
    }

    /**
     * @param null | array<int<0,max>, \Knightar\StampsSoapClient\Type\IndiciumInfoV39> $IndiciumInfoV39
     * @return static
     */
    public function withIndiciumInfoV39(?array $IndiciumInfoV39) : static
    {
        $new = clone $this;
        $new->IndiciumInfoV39 = $IndiciumInfoV39;

        return $new;
    }
}

