<?php

namespace Knightar\StampsSoapClient\Type;

use \Knightar\StampsSoapClient\Type\CapabilitiesV37;

class CapabilitiesV38 extends CapabilitiesV37
{
    /**
     * @var bool
     */
    private bool $CanUseBrandedTracking;

    /**
     * @return bool
     */
    public function getCanUseBrandedTracking() : bool
    {
        return $this->CanUseBrandedTracking;
    }

    /**
     * @param bool $CanUseBrandedTracking
     * @return static
     */
    public function withCanUseBrandedTracking(bool $CanUseBrandedTracking) : static
    {
        $new = clone $this;
        $new->CanUseBrandedTracking = $CanUseBrandedTracking;

        return $new;
    }
}

