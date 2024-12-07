<?php

namespace Knightar\StampsSoapClient\Type;

use \Knightar\StampsSoapClient\Type\Capabilities;

class CapabilitiesV2 extends Capabilities
{
    /**
     * @var bool
     */
    private bool $AllowAllMailClasses;

    /**
     * @return bool
     */
    public function getAllowAllMailClasses() : bool
    {
        return $this->AllowAllMailClasses;
    }

    /**
     * @param bool $AllowAllMailClasses
     * @return static
     */
    public function withAllowAllMailClasses(bool $AllowAllMailClasses) : static
    {
        $new = clone $this;
        $new->AllowAllMailClasses = $AllowAllMailClasses;

        return $new;
    }
}

