<?php

namespace Knightar\StampsSoapClient\Type;

use \Knightar\StampsSoapClient\Type\CapabilitiesV30;

class CapabilitiesV31 extends CapabilitiesV30
{
    /**
     * @var null | bool
     */
    private ?bool $CanRateShop = null;

    /**
     * @var null | bool
     */
    private ?bool $DisplayUPSByDefault = null;

    /**
     * @var null | bool
     */
    private ?bool $CanPrintUPSDirect = null;

    /**
     * @var null | bool
     */
    private ?bool $CanPrintUPSIntl = null;

    /**
     * @return null | bool
     */
    public function getCanRateShop() : ?bool
    {
        return $this->CanRateShop;
    }

    /**
     * @param null | bool $CanRateShop
     * @return static
     */
    public function withCanRateShop(?bool $CanRateShop) : static
    {
        $new = clone $this;
        $new->CanRateShop = $CanRateShop;

        return $new;
    }

    /**
     * @return null | bool
     */
    public function getDisplayUPSByDefault() : ?bool
    {
        return $this->DisplayUPSByDefault;
    }

    /**
     * @param null | bool $DisplayUPSByDefault
     * @return static
     */
    public function withDisplayUPSByDefault(?bool $DisplayUPSByDefault) : static
    {
        $new = clone $this;
        $new->DisplayUPSByDefault = $DisplayUPSByDefault;

        return $new;
    }

    /**
     * @return null | bool
     */
    public function getCanPrintUPSDirect() : ?bool
    {
        return $this->CanPrintUPSDirect;
    }

    /**
     * @param null | bool $CanPrintUPSDirect
     * @return static
     */
    public function withCanPrintUPSDirect(?bool $CanPrintUPSDirect) : static
    {
        $new = clone $this;
        $new->CanPrintUPSDirect = $CanPrintUPSDirect;

        return $new;
    }

    /**
     * @return null | bool
     */
    public function getCanPrintUPSIntl() : ?bool
    {
        return $this->CanPrintUPSIntl;
    }

    /**
     * @param null | bool $CanPrintUPSIntl
     * @return static
     */
    public function withCanPrintUPSIntl(?bool $CanPrintUPSIntl) : static
    {
        $new = clone $this;
        $new->CanPrintUPSIntl = $CanPrintUPSIntl;

        return $new;
    }
}

