<?php

namespace Knightar\StampsSoapClient\Type;

use \Knightar\StampsSoapClient\Type\CapabilitiesV47;

class CapabilitiesV48 extends CapabilitiesV47
{
    /**
     * @var bool
     */
    private bool $BlockUSPSPrint;

    /**
     * @return bool
     */
    public function getBlockUSPSPrint() : bool
    {
        return $this->BlockUSPSPrint;
    }

    /**
     * @param bool $BlockUSPSPrint
     * @return static
     */
    public function withBlockUSPSPrint(bool $BlockUSPSPrint) : static
    {
        $new = clone $this;
        $new->BlockUSPSPrint = $BlockUSPSPrint;

        return $new;
    }
}

