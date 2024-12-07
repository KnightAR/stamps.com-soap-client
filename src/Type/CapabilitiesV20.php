<?php

namespace Knightar\StampsSoapClient\Type;

use \Knightar\StampsSoapClient\Type\CapabilitiesV19;

class CapabilitiesV20 extends CapabilitiesV19
{
    /**
     * @var bool
     */
    private bool $CanUseMCW;

    /**
     * @return bool
     */
    public function getCanUseMCW() : bool
    {
        return $this->CanUseMCW;
    }

    /**
     * @param bool $CanUseMCW
     * @return static
     */
    public function withCanUseMCW(bool $CanUseMCW) : static
    {
        $new = clone $this;
        $new->CanUseMCW = $CanUseMCW;

        return $new;
    }
}

