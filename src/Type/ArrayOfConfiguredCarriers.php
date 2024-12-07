<?php

namespace Knightar\StampsSoapClient\Type;

class ArrayOfConfiguredCarriers
{
    /**
     * @var null | array<int<0,max>, \Knightar\StampsSoapClient\Type\ConfiguredCarriers>
     */
    private ?array $ConfiguredCarrier = null;

    /**
     * @return null | array<int<0,max>, \Knightar\StampsSoapClient\Type\ConfiguredCarriers>
     */
    public function getConfiguredCarrier() : ?array
    {
        return $this->ConfiguredCarrier;
    }

    /**
     * @param null | array<int<0,max>, \Knightar\StampsSoapClient\Type\ConfiguredCarriers> $ConfiguredCarrier
     * @return static
     */
    public function withConfiguredCarrier(?array $ConfiguredCarrier) : static
    {
        $new = clone $this;
        $new->ConfiguredCarrier = $ConfiguredCarrier;

        return $new;
    }
}

