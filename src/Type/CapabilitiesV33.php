<?php

namespace Knightar\StampsSoapClient\Type;

use \Knightar\StampsSoapClient\Type\CapabilitiesV32;

class CapabilitiesV33 extends CapabilitiesV32
{
    /**
     * @var bool
     */
    private bool $CanPrintGPDomestic;

    /**
     * @return bool
     */
    public function getCanPrintGPDomestic() : bool
    {
        return $this->CanPrintGPDomestic;
    }

    /**
     * @param bool $CanPrintGPDomestic
     * @return static
     */
    public function withCanPrintGPDomestic(bool $CanPrintGPDomestic) : static
    {
        $new = clone $this;
        $new->CanPrintGPDomestic = $CanPrintGPDomestic;

        return $new;
    }
}

