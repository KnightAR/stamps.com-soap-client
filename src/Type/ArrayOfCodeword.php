<?php

namespace Knightar\StampsSoapClient\Type;

class ArrayOfCodeword
{
    /**
     * @var null | array<int<0,max>, \Knightar\StampsSoapClient\Type\Codeword>
     */
    private ?array $CodewordV2 = null;

    /**
     * @return null | array<int<0,max>, \Knightar\StampsSoapClient\Type\Codeword>
     */
    public function getCodewordV2() : ?array
    {
        return $this->CodewordV2;
    }

    /**
     * @param null | array<int<0,max>, \Knightar\StampsSoapClient\Type\Codeword> $CodewordV2
     * @return static
     */
    public function withCodewordV2(?array $CodewordV2) : static
    {
        $new = clone $this;
        $new->CodewordV2 = $CodewordV2;

        return $new;
    }
}

