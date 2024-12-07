<?php

namespace Knightar\StampsSoapClient\Type;

class ArrayOfDpvFootnote
{
    /**
     * @var null | array<int<0,max>, \Knightar\StampsSoapClient\Type\DpvFootnote>
     */
    private ?array $DpvFootnote = null;

    /**
     * @return null | array<int<0,max>, \Knightar\StampsSoapClient\Type\DpvFootnote>
     */
    public function getDpvFootnote() : ?array
    {
        return $this->DpvFootnote;
    }

    /**
     * @param null | array<int<0,max>, \Knightar\StampsSoapClient\Type\DpvFootnote> $DpvFootnote
     * @return static
     */
    public function withDpvFootnote(?array $DpvFootnote) : static
    {
        $new = clone $this;
        $new->DpvFootnote = $DpvFootnote;

        return $new;
    }
}

