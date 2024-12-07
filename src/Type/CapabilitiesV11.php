<?php

namespace Knightar\StampsSoapClient\Type;

use \Knightar\StampsSoapClient\Type\CapabilitiesV10;

class CapabilitiesV11 extends CapabilitiesV10
{
    /**
     * @var bool
     */
    private bool $CanPrintGPSmartSaver;

    /**
     * @return bool
     */
    public function getCanPrintGPSmartSaver() : bool
    {
        return $this->CanPrintGPSmartSaver;
    }

    /**
     * @param bool $CanPrintGPSmartSaver
     * @return static
     */
    public function withCanPrintGPSmartSaver(bool $CanPrintGPSmartSaver) : static
    {
        $new = clone $this;
        $new->CanPrintGPSmartSaver = $CanPrintGPSmartSaver;

        return $new;
    }
}

