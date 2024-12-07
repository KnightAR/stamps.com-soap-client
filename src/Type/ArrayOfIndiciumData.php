<?php

namespace Knightar\StampsSoapClient\Type;

class ArrayOfIndiciumData
{
    /**
     * @var null | array<int<0,max>, \Knightar\StampsSoapClient\Type\IndiciumData>
     */
    private ?array $IndiciumData = null;

    /**
     * @return null | array<int<0,max>, \Knightar\StampsSoapClient\Type\IndiciumData>
     */
    public function getIndiciumData() : ?array
    {
        return $this->IndiciumData;
    }

    /**
     * @param null | array<int<0,max>, \Knightar\StampsSoapClient\Type\IndiciumData> $IndiciumData
     * @return static
     */
    public function withIndiciumData(?array $IndiciumData) : static
    {
        $new = clone $this;
        $new->IndiciumData = $IndiciumData;

        return $new;
    }
}

