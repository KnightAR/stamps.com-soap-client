<?php

namespace Knightar\StampsSoapClient\Type;

class ArrayOfEndOfDayManifest
{
    /**
     * @var null | array<int<0,max>, \Knightar\StampsSoapClient\Type\EndOfDayManifest>
     */
    private ?array $EndOfDayManifest = null;

    /**
     * @return null | array<int<0,max>, \Knightar\StampsSoapClient\Type\EndOfDayManifest>
     */
    public function getEndOfDayManifest() : ?array
    {
        return $this->EndOfDayManifest;
    }

    /**
     * @param null | array<int<0,max>, \Knightar\StampsSoapClient\Type\EndOfDayManifest> $EndOfDayManifest
     * @return static
     */
    public function withEndOfDayManifest(?array $EndOfDayManifest) : static
    {
        $new = clone $this;
        $new->EndOfDayManifest = $EndOfDayManifest;

        return $new;
    }
}

