<?php

namespace Knightar\StampsSoapClient\Type;

use \Knightar\StampsSoapClient\Type\CapabilitiesV23;

class CapabilitiesV24 extends CapabilitiesV23
{
    /**
     * @var bool
     */
    private bool $CanPrintGlobalPostPlus;

    /**
     * @return bool
     */
    public function getCanPrintGlobalPostPlus() : bool
    {
        return $this->CanPrintGlobalPostPlus;
    }

    /**
     * @param bool $CanPrintGlobalPostPlus
     * @return static
     */
    public function withCanPrintGlobalPostPlus(bool $CanPrintGlobalPostPlus) : static
    {
        $new = clone $this;
        $new->CanPrintGlobalPostPlus = $CanPrintGlobalPostPlus;

        return $new;
    }
}

