<?php

namespace Knightar\StampsSoapClient\Type;

use \Knightar\StampsSoapClient\Type\CapabilitiesV33;

class CapabilitiesV34 extends CapabilitiesV33
{
    /**
     * @var bool
     */
    private bool $CanPurchaseUSPSInsurance;

    /**
     * @return bool
     */
    public function getCanPurchaseUSPSInsurance() : bool
    {
        return $this->CanPurchaseUSPSInsurance;
    }

    /**
     * @param bool $CanPurchaseUSPSInsurance
     * @return static
     */
    public function withCanPurchaseUSPSInsurance(bool $CanPurchaseUSPSInsurance) : static
    {
        $new = clone $this;
        $new->CanPurchaseUSPSInsurance = $CanPurchaseUSPSInsurance;

        return $new;
    }
}

