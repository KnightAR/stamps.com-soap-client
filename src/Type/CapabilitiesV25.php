<?php

namespace Knightar\StampsSoapClient\Type;

use \Knightar\StampsSoapClient\Type\CapabilitiesV24;

class CapabilitiesV25 extends CapabilitiesV24
{
    /**
     * @var bool
     */
    private bool $PostalOverride;

    /**
     * @var bool
     */
    private bool $GlobalPostPostal;

    /**
     * @var bool
     */
    private bool $CanPurchaseParcelGuardInsurance;

    /**
     * @return bool
     */
    public function getPostalOverride() : bool
    {
        return $this->PostalOverride;
    }

    /**
     * @param bool $PostalOverride
     * @return static
     */
    public function withPostalOverride(bool $PostalOverride) : static
    {
        $new = clone $this;
        $new->PostalOverride = $PostalOverride;

        return $new;
    }

    /**
     * @return bool
     */
    public function getGlobalPostPostal() : bool
    {
        return $this->GlobalPostPostal;
    }

    /**
     * @param bool $GlobalPostPostal
     * @return static
     */
    public function withGlobalPostPostal(bool $GlobalPostPostal) : static
    {
        $new = clone $this;
        $new->GlobalPostPostal = $GlobalPostPostal;

        return $new;
    }

    /**
     * @return bool
     */
    public function getCanPurchaseParcelGuardInsurance() : bool
    {
        return $this->CanPurchaseParcelGuardInsurance;
    }

    /**
     * @param bool $CanPurchaseParcelGuardInsurance
     * @return static
     */
    public function withCanPurchaseParcelGuardInsurance(bool $CanPurchaseParcelGuardInsurance) : static
    {
        $new = clone $this;
        $new->CanPurchaseParcelGuardInsurance = $CanPurchaseParcelGuardInsurance;

        return $new;
    }
}

