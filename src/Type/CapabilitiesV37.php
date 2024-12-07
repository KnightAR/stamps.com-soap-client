<?php

namespace Knightar\StampsSoapClient\Type;

use \Knightar\StampsSoapClient\Type\CapabilitiesV36;

class CapabilitiesV37 extends CapabilitiesV36
{
    /**
     * @var bool
     */
    private bool $CanUseAutoPickupUSPS;

    /**
     * @return bool
     */
    public function getCanUseAutoPickupUSPS() : bool
    {
        return $this->CanUseAutoPickupUSPS;
    }

    /**
     * @param bool $CanUseAutoPickupUSPS
     * @return static
     */
    public function withCanUseAutoPickupUSPS(bool $CanUseAutoPickupUSPS) : static
    {
        $new = clone $this;
        $new->CanUseAutoPickupUSPS = $CanUseAutoPickupUSPS;

        return $new;
    }
}

