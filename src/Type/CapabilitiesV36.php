<?php

namespace Knightar\StampsSoapClient\Type;

use \Knightar\StampsSoapClient\Type\CapabilitiesV35;

class CapabilitiesV36 extends CapabilitiesV35
{
    /**
     * @var bool
     */
    private bool $CanPrintInstaLabel;

    /**
     * @return bool
     */
    public function getCanPrintInstaLabel() : bool
    {
        return $this->CanPrintInstaLabel;
    }

    /**
     * @param bool $CanPrintInstaLabel
     * @return static
     */
    public function withCanPrintInstaLabel(bool $CanPrintInstaLabel) : static
    {
        $new = clone $this;
        $new->CanPrintInstaLabel = $CanPrintInstaLabel;

        return $new;
    }
}

