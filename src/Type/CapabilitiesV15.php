<?php

namespace Knightar\StampsSoapClient\Type;

use \Knightar\StampsSoapClient\Type\CapabilitiesV14;

class CapabilitiesV15 extends CapabilitiesV14
{
    /**
     * @var bool
     */
    private bool $CanPrintDX;

    /**
     * @var bool
     */
    private bool $CanPrintDXPayOnUse;

    /**
     * @return bool
     */
    public function getCanPrintDX() : bool
    {
        return $this->CanPrintDX;
    }

    /**
     * @param bool $CanPrintDX
     * @return static
     */
    public function withCanPrintDX(bool $CanPrintDX) : static
    {
        $new = clone $this;
        $new->CanPrintDX = $CanPrintDX;

        return $new;
    }

    /**
     * @return bool
     */
    public function getCanPrintDXPayOnUse() : bool
    {
        return $this->CanPrintDXPayOnUse;
    }

    /**
     * @param bool $CanPrintDXPayOnUse
     * @return static
     */
    public function withCanPrintDXPayOnUse(bool $CanPrintDXPayOnUse) : static
    {
        $new = clone $this;
        $new->CanPrintDXPayOnUse = $CanPrintDXPayOnUse;

        return $new;
    }
}

