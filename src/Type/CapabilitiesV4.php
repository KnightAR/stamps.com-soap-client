<?php

namespace Knightar\StampsSoapClient\Type;

use \Knightar\StampsSoapClient\Type\CapabilitiesV3;

class CapabilitiesV4 extends CapabilitiesV3
{
    /**
     * @var bool
     */
    private bool $IsIBIPEnabled;

    /**
     * @return bool
     */
    public function getIsIBIPEnabled() : bool
    {
        return $this->IsIBIPEnabled;
    }

    /**
     * @param bool $IsIBIPEnabled
     * @return static
     */
    public function withIsIBIPEnabled(bool $IsIBIPEnabled) : static
    {
        $new = clone $this;
        $new->IsIBIPEnabled = $IsIBIPEnabled;

        return $new;
    }
}

