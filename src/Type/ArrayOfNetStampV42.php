<?php

namespace Knightar\StampsSoapClient\Type;

class ArrayOfNetStampV42
{
    /**
     * @var null | array<int<0,max>, \Knightar\StampsSoapClient\Type\NetStampV42>
     */
    private ?array $NetStampV42 = null;

    /**
     * @return null | array<int<0,max>, \Knightar\StampsSoapClient\Type\NetStampV42>
     */
    public function getNetStampV42() : ?array
    {
        return $this->NetStampV42;
    }

    /**
     * @param null | array<int<0,max>, \Knightar\StampsSoapClient\Type\NetStampV42> $NetStampV42
     * @return static
     */
    public function withNetStampV42(?array $NetStampV42) : static
    {
        $new = clone $this;
        $new->NetStampV42 = $NetStampV42;

        return $new;
    }
}

