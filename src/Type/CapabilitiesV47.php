<?php

namespace Knightar\StampsSoapClient\Type;

use \Knightar\StampsSoapClient\Type\CapabilitiesV46;

class CapabilitiesV47 extends CapabilitiesV46
{
    /**
     * @var bool
     */
    private bool $BrandedExternalPrints;

    /**
     * @return bool
     */
    public function getBrandedExternalPrints() : bool
    {
        return $this->BrandedExternalPrints;
    }

    /**
     * @param bool $BrandedExternalPrints
     * @return static
     */
    public function withBrandedExternalPrints(bool $BrandedExternalPrints) : static
    {
        $new = clone $this;
        $new->BrandedExternalPrints = $BrandedExternalPrints;

        return $new;
    }
}

