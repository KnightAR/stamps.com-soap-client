<?php

namespace Knightar\StampsSoapClient\Type;

use \Knightar\StampsSoapClient\Type\CapabilitiesV41;

class CapabilitiesV42 extends CapabilitiesV41
{
    /**
     * @var bool
     */
    private bool $CanPrintDHLEcommerce;

    /**
     * @return bool
     */
    public function getCanPrintDHLEcommerce() : bool
    {
        return $this->CanPrintDHLEcommerce;
    }

    /**
     * @param bool $CanPrintDHLEcommerce
     * @return static
     */
    public function withCanPrintDHLEcommerce(bool $CanPrintDHLEcommerce) : static
    {
        $new = clone $this;
        $new->CanPrintDHLEcommerce = $CanPrintDHLEcommerce;

        return $new;
    }
}

