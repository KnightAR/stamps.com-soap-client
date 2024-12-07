<?php

namespace Knightar\StampsSoapClient\Type;

use \Knightar\StampsSoapClient\Type\CapabilitiesV26;

class CapabilitiesV27 extends CapabilitiesV26
{
    /**
     * @var bool
     */
    private bool $AlwaysIncludeDefaultImageOnShippingLabels;

    /**
     * @return bool
     */
    public function getAlwaysIncludeDefaultImageOnShippingLabels() : bool
    {
        return $this->AlwaysIncludeDefaultImageOnShippingLabels;
    }

    /**
     * @param bool $AlwaysIncludeDefaultImageOnShippingLabels
     * @return static
     */
    public function withAlwaysIncludeDefaultImageOnShippingLabels(bool $AlwaysIncludeDefaultImageOnShippingLabels) : static
    {
        $new = clone $this;
        $new->AlwaysIncludeDefaultImageOnShippingLabels = $AlwaysIncludeDefaultImageOnShippingLabels;

        return $new;
    }
}

