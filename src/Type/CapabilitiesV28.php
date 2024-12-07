<?php

namespace Knightar\StampsSoapClient\Type;

use \Knightar\StampsSoapClient\Type\CapabilitiesV27;

class CapabilitiesV28 extends CapabilitiesV27
{
    /**
     * @var bool
     */
    private bool $CanPrintUnfundedIndicium;

    /**
     * @return bool
     */
    public function getCanPrintUnfundedIndicium() : bool
    {
        return $this->CanPrintUnfundedIndicium;
    }

    /**
     * @param bool $CanPrintUnfundedIndicium
     * @return static
     */
    public function withCanPrintUnfundedIndicium(bool $CanPrintUnfundedIndicium) : static
    {
        $new = clone $this;
        $new->CanPrintUnfundedIndicium = $CanPrintUnfundedIndicium;

        return $new;
    }
}

