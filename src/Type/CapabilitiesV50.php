<?php

namespace Knightar\StampsSoapClient\Type;

use \Knightar\StampsSoapClient\Type\CapabilitiesV49;

class CapabilitiesV50 extends CapabilitiesV49
{
    /**
     * @var bool
     */
    private bool $CanPrintUPSPayOnUse;

    /**
     * @return bool
     */
    public function getCanPrintUPSPayOnUse() : bool
    {
        return $this->CanPrintUPSPayOnUse;
    }

    /**
     * @param bool $CanPrintUPSPayOnUse
     * @return static
     */
    public function withCanPrintUPSPayOnUse(bool $CanPrintUPSPayOnUse) : static
    {
        $new = clone $this;
        $new->CanPrintUPSPayOnUse = $CanPrintUPSPayOnUse;

        return $new;
    }
}

