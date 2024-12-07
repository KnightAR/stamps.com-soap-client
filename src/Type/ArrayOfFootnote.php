<?php

namespace Knightar\StampsSoapClient\Type;

class ArrayOfFootnote
{
    /**
     * @var null | array<int<0,max>, \Knightar\StampsSoapClient\Type\Footnote>
     */
    private ?array $Footnote = null;

    /**
     * @return null | array<int<0,max>, \Knightar\StampsSoapClient\Type\Footnote>
     */
    public function getFootnote() : ?array
    {
        return $this->Footnote;
    }

    /**
     * @param null | array<int<0,max>, \Knightar\StampsSoapClient\Type\Footnote> $Footnote
     * @return static
     */
    public function withFootnote(?array $Footnote) : static
    {
        $new = clone $this;
        $new->Footnote = $Footnote;

        return $new;
    }
}

