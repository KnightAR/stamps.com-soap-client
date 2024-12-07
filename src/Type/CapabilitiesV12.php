<?php

namespace Knightar\StampsSoapClient\Type;

use \Knightar\StampsSoapClient\Type\CapabilitiesV11;

class CapabilitiesV12 extends CapabilitiesV11
{
    /**
     * @var bool
     */
    private bool $CanPrintGPPayOnUse;

    /**
     * @var bool
     */
    private bool $CanPrintGPSmartSaverPayOnUse;

    /**
     * @return bool
     */
    public function getCanPrintGPPayOnUse() : bool
    {
        return $this->CanPrintGPPayOnUse;
    }

    /**
     * @param bool $CanPrintGPPayOnUse
     * @return static
     */
    public function withCanPrintGPPayOnUse(bool $CanPrintGPPayOnUse) : static
    {
        $new = clone $this;
        $new->CanPrintGPPayOnUse = $CanPrintGPPayOnUse;

        return $new;
    }

    /**
     * @return bool
     */
    public function getCanPrintGPSmartSaverPayOnUse() : bool
    {
        return $this->CanPrintGPSmartSaverPayOnUse;
    }

    /**
     * @param bool $CanPrintGPSmartSaverPayOnUse
     * @return static
     */
    public function withCanPrintGPSmartSaverPayOnUse(bool $CanPrintGPSmartSaverPayOnUse) : static
    {
        $new = clone $this;
        $new->CanPrintGPSmartSaverPayOnUse = $CanPrintGPSmartSaverPayOnUse;

        return $new;
    }
}

