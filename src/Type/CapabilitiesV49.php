<?php

namespace Knightar\StampsSoapClient\Type;

use \Knightar\StampsSoapClient\Type\CapabilitiesV48;

class CapabilitiesV49 extends CapabilitiesV48
{
    /**
     * @var bool
     */
    private bool $CanPrintUPSGroundSaver;

    /**
     * @return bool
     */
    public function getCanPrintUPSGroundSaver() : bool
    {
        return $this->CanPrintUPSGroundSaver;
    }

    /**
     * @param bool $CanPrintUPSGroundSaver
     * @return static
     */
    public function withCanPrintUPSGroundSaver(bool $CanPrintUPSGroundSaver) : static
    {
        $new = clone $this;
        $new->CanPrintUPSGroundSaver = $CanPrintUPSGroundSaver;

        return $new;
    }
}

