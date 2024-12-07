<?php

namespace Knightar\StampsSoapClient\Type;

use \Knightar\StampsSoapClient\Type\CapabilitiesV8;

class CapabilitiesV9 extends CapabilitiesV8
{
    /**
     * @var bool
     */
    private bool $CanPrintGP;

    /**
     * @var bool
     */
    private bool $GPShipToConsolidator;

    /**
     * @return bool
     */
    public function getCanPrintGP() : bool
    {
        return $this->CanPrintGP;
    }

    /**
     * @param bool $CanPrintGP
     * @return static
     */
    public function withCanPrintGP(bool $CanPrintGP) : static
    {
        $new = clone $this;
        $new->CanPrintGP = $CanPrintGP;

        return $new;
    }

    /**
     * @return bool
     */
    public function getGPShipToConsolidator() : bool
    {
        return $this->GPShipToConsolidator;
    }

    /**
     * @param bool $GPShipToConsolidator
     * @return static
     */
    public function withGPShipToConsolidator(bool $GPShipToConsolidator) : static
    {
        $new = clone $this;
        $new->GPShipToConsolidator = $GPShipToConsolidator;

        return $new;
    }
}

