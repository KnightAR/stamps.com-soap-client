<?php

namespace Knightar\StampsSoapClient\Type;

use \Knightar\StampsSoapClient\Type\CapabilitiesV29;

class CapabilitiesV30 extends CapabilitiesV29
{
    /**
     * @var bool
     */
    private bool $CanPrintUPS;

    /**
     * @return bool
     */
    public function getCanPrintUPS() : bool
    {
        return $this->CanPrintUPS;
    }

    /**
     * @param bool $CanPrintUPS
     * @return static
     */
    public function withCanPrintUPS(bool $CanPrintUPS) : static
    {
        $new = clone $this;
        $new->CanPrintUPS = $CanPrintUPS;

        return $new;
    }
}

