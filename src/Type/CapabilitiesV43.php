<?php

namespace Knightar\StampsSoapClient\Type;

use \Knightar\StampsSoapClient\Type\CapabilitiesV42;

class CapabilitiesV43 extends CapabilitiesV42
{
    /**
     * @var bool
     */
    private bool $CanUsePPL;

    /**
     * @return bool
     */
    public function getCanUsePPL() : bool
    {
        return $this->CanUsePPL;
    }

    /**
     * @param bool $CanUsePPL
     * @return static
     */
    public function withCanUsePPL(bool $CanUsePPL) : static
    {
        $new = clone $this;
        $new->CanUsePPL = $CanUsePPL;

        return $new;
    }
}

