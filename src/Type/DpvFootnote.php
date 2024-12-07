<?php

namespace Knightar\StampsSoapClient\Type;

class DpvFootnote
{
    /**
     * @var string
     */
    private string $Value;

    /**
     * @return string
     */
    public function getValue() : string
    {
        return $this->Value;
    }

    /**
     * @param string $Value
     * @return static
     */
    public function withValue(string $Value) : static
    {
        $new = clone $this;
        $new->Value = $Value;

        return $new;
    }
}

