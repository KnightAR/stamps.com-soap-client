<?php

namespace Knightar\StampsSoapClient\Type;

class ArrayOfTrigger
{
    /**
     * @var null | array<int<0,max>, \Knightar\StampsSoapClient\Type\Trigger>
     */
    private ?array $Trigger = null;

    /**
     * @return null | array<int<0,max>, \Knightar\StampsSoapClient\Type\Trigger>
     */
    public function getTrigger() : ?array
    {
        return $this->Trigger;
    }

    /**
     * @param null | array<int<0,max>, \Knightar\StampsSoapClient\Type\Trigger> $Trigger
     * @return static
     */
    public function withTrigger(?array $Trigger) : static
    {
        $new = clone $this;
        $new->Trigger = $Trigger;

        return $new;
    }
}

