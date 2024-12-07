<?php

namespace Knightar\StampsSoapClient\Type;

use \Knightar\StampsSoapClient\Type\CapabilitiesV18;

class CapabilitiesV19 extends CapabilitiesV18
{
    /**
     * @var bool
     */
    private bool $CanPrintFX;

    /**
     * @var bool
     */
    private bool $CanPrintFXPayOnUse;

    /**
     * @return bool
     */
    public function getCanPrintFX() : bool
    {
        return $this->CanPrintFX;
    }

    /**
     * @param bool $CanPrintFX
     * @return static
     */
    public function withCanPrintFX(bool $CanPrintFX) : static
    {
        $new = clone $this;
        $new->CanPrintFX = $CanPrintFX;

        return $new;
    }

    /**
     * @return bool
     */
    public function getCanPrintFXPayOnUse() : bool
    {
        return $this->CanPrintFXPayOnUse;
    }

    /**
     * @param bool $CanPrintFXPayOnUse
     * @return static
     */
    public function withCanPrintFXPayOnUse(bool $CanPrintFXPayOnUse) : static
    {
        $new = clone $this;
        $new->CanPrintFXPayOnUse = $CanPrintFXPayOnUse;

        return $new;
    }
}

