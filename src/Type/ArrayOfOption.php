<?php

namespace Knightar\StampsSoapClient\Type;

class ArrayOfOption
{
    /**
     * @var null | array<int<0,max>, \Knightar\StampsSoapClient\Type\Option>
     */
    private ?array $Option = null;

    /**
     * @return null | array<int<0,max>, \Knightar\StampsSoapClient\Type\Option>
     */
    public function getOption() : ?array
    {
        return $this->Option;
    }

    /**
     * @param null | array<int<0,max>, \Knightar\StampsSoapClient\Type\Option> $Option
     * @return static
     */
    public function withOption(?array $Option) : static
    {
        $new = clone $this;
        $new->Option = $Option;

        return $new;
    }
}

