<?php

namespace Knightar\StampsSoapClient\Type;

use \Knightar\StampsSoapClient\Type\CapabilitiesV31;

class CapabilitiesV32 extends CapabilitiesV31
{
    /**
     * @var null | bool
     */
    private ?bool $DisplayFXByDefault = null;

    /**
     * @var null | bool
     */
    private ?bool $CanPrintFXDirect = null;

    /**
     * @var null | bool
     */
    private ?bool $CanPrintFXIntl = null;

    /**
     * @var null | bool
     */
    private ?bool $DisplayDXByDefault = null;

    /**
     * @return null | bool
     */
    public function getDisplayFXByDefault() : ?bool
    {
        return $this->DisplayFXByDefault;
    }

    /**
     * @param null | bool $DisplayFXByDefault
     * @return static
     */
    public function withDisplayFXByDefault(?bool $DisplayFXByDefault) : static
    {
        $new = clone $this;
        $new->DisplayFXByDefault = $DisplayFXByDefault;

        return $new;
    }

    /**
     * @return null | bool
     */
    public function getCanPrintFXDirect() : ?bool
    {
        return $this->CanPrintFXDirect;
    }

    /**
     * @param null | bool $CanPrintFXDirect
     * @return static
     */
    public function withCanPrintFXDirect(?bool $CanPrintFXDirect) : static
    {
        $new = clone $this;
        $new->CanPrintFXDirect = $CanPrintFXDirect;

        return $new;
    }

    /**
     * @return null | bool
     */
    public function getCanPrintFXIntl() : ?bool
    {
        return $this->CanPrintFXIntl;
    }

    /**
     * @param null | bool $CanPrintFXIntl
     * @return static
     */
    public function withCanPrintFXIntl(?bool $CanPrintFXIntl) : static
    {
        $new = clone $this;
        $new->CanPrintFXIntl = $CanPrintFXIntl;

        return $new;
    }

    /**
     * @return null | bool
     */
    public function getDisplayDXByDefault() : ?bool
    {
        return $this->DisplayDXByDefault;
    }

    /**
     * @param null | bool $DisplayDXByDefault
     * @return static
     */
    public function withDisplayDXByDefault(?bool $DisplayDXByDefault) : static
    {
        $new = clone $this;
        $new->DisplayDXByDefault = $DisplayDXByDefault;

        return $new;
    }
}

