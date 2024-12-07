<?php

namespace Knightar\StampsSoapClient\Type;

use \Knightar\StampsSoapClient\Type\CapabilitiesV12;

class CapabilitiesV13 extends CapabilitiesV12
{
    /**
     * @var bool
     */
    private bool $CanCleanseIntlAddress;

    /**
     * @var bool
     */
    private bool $CanBypassCleanseAddress;

    /**
     * @return bool
     */
    public function getCanCleanseIntlAddress() : bool
    {
        return $this->CanCleanseIntlAddress;
    }

    /**
     * @param bool $CanCleanseIntlAddress
     * @return static
     */
    public function withCanCleanseIntlAddress(bool $CanCleanseIntlAddress) : static
    {
        $new = clone $this;
        $new->CanCleanseIntlAddress = $CanCleanseIntlAddress;

        return $new;
    }

    /**
     * @return bool
     */
    public function getCanBypassCleanseAddress() : bool
    {
        return $this->CanBypassCleanseAddress;
    }

    /**
     * @param bool $CanBypassCleanseAddress
     * @return static
     */
    public function withCanBypassCleanseAddress(bool $CanBypassCleanseAddress) : static
    {
        $new = clone $this;
        $new->CanBypassCleanseAddress = $CanBypassCleanseAddress;

        return $new;
    }
}

