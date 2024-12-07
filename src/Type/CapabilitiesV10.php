<?php

namespace Knightar\StampsSoapClient\Type;

use \Knightar\StampsSoapClient\Type\CapabilitiesV9;

class CapabilitiesV10 extends CapabilitiesV9
{
    /**
     * @var bool
     */
    private bool $CanCreateUnlimitedStores;

    /**
     * @return bool
     */
    public function getCanCreateUnlimitedStores() : bool
    {
        return $this->CanCreateUnlimitedStores;
    }

    /**
     * @param bool $CanCreateUnlimitedStores
     * @return static
     */
    public function withCanCreateUnlimitedStores(bool $CanCreateUnlimitedStores) : static
    {
        $new = clone $this;
        $new->CanCreateUnlimitedStores = $CanCreateUnlimitedStores;

        return $new;
    }
}

