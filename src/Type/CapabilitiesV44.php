<?php

namespace Knightar\StampsSoapClient\Type;

use \Knightar\StampsSoapClient\Type\CapabilitiesV43;

class CapabilitiesV44 extends CapabilitiesV43
{
    /**
     * @var bool
     */
    private bool $BrandedTrackingSMSSupport;

    /**
     * @return bool
     */
    public function getBrandedTrackingSMSSupport() : bool
    {
        return $this->BrandedTrackingSMSSupport;
    }

    /**
     * @param bool $BrandedTrackingSMSSupport
     * @return static
     */
    public function withBrandedTrackingSMSSupport(bool $BrandedTrackingSMSSupport) : static
    {
        $new = clone $this;
        $new->BrandedTrackingSMSSupport = $BrandedTrackingSMSSupport;

        return $new;
    }
}

