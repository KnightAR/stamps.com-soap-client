<?php

namespace Knightar\StampsSoapClient\Type;

class Option
{
    /**
     * @var string
     */
    private string $Label;

    /**
     * @var string
     */
    private string $Value;

    /**
     * @return string
     */
    public function getLabel() : string
    {
        return $this->Label;
    }

    /**
     * @param string $Label
     * @return static
     */
    public function withLabel(string $Label) : static
    {
        $new = clone $this;
        $new->Label = $Label;

        return $new;
    }

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

