<?php

namespace Knightar\StampsSoapClient\Type;

use \Knightar\StampsSoapClient\Type\CapabilitiesV5;

class CapabilitiesV6 extends CapabilitiesV5
{
    /**
     * @var bool
     */
    private bool $CanUseInvoicing;

    /**
     * @return bool
     */
    public function getCanUseInvoicing() : bool
    {
        return $this->CanUseInvoicing;
    }

    /**
     * @param bool $CanUseInvoicing
     * @return static
     */
    public function withCanUseInvoicing(bool $CanUseInvoicing) : static
    {
        $new = clone $this;
        $new->CanUseInvoicing = $CanUseInvoicing;

        return $new;
    }
}

