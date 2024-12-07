<?php

namespace Knightar\StampsSoapClient\Type;

use \Knightar\StampsSoapClient\Type\CapabilitiesV21;

class CapabilitiesV22 extends CapabilitiesV21
{
    /**
     * @var bool
     */
    private bool $CanPrintUSPSReturn;

    /**
     * @var bool
     */
    private bool $CanPrintStandaloneUSPSReturn;

    /**
     * @return bool
     */
    public function getCanPrintUSPSReturn() : bool
    {
        return $this->CanPrintUSPSReturn;
    }

    /**
     * @param bool $CanPrintUSPSReturn
     * @return static
     */
    public function withCanPrintUSPSReturn(bool $CanPrintUSPSReturn) : static
    {
        $new = clone $this;
        $new->CanPrintUSPSReturn = $CanPrintUSPSReturn;

        return $new;
    }

    /**
     * @return bool
     */
    public function getCanPrintStandaloneUSPSReturn() : bool
    {
        return $this->CanPrintStandaloneUSPSReturn;
    }

    /**
     * @param bool $CanPrintStandaloneUSPSReturn
     * @return static
     */
    public function withCanPrintStandaloneUSPSReturn(bool $CanPrintStandaloneUSPSReturn) : static
    {
        $new = clone $this;
        $new->CanPrintStandaloneUSPSReturn = $CanPrintStandaloneUSPSReturn;

        return $new;
    }
}

