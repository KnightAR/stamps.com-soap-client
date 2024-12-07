<?php

namespace Knightar\StampsSoapClient\Type;

use \Knightar\StampsSoapClient\Type\CapabilitiesV16;

class CapabilitiesV17 extends CapabilitiesV16
{
    /**
     * @var bool
     */
    private bool $EnableExProShipperODBC;

    /**
     * @return bool
     */
    public function getEnableExProShipperODBC() : bool
    {
        return $this->EnableExProShipperODBC;
    }

    /**
     * @param bool $EnableExProShipperODBC
     * @return static
     */
    public function withEnableExProShipperODBC(bool $EnableExProShipperODBC) : static
    {
        $new = clone $this;
        $new->EnableExProShipperODBC = $EnableExProShipperODBC;

        return $new;
    }
}

