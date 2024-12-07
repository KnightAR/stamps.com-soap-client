<?php

namespace Knightar\StampsSoapClient\Type;

use \Knightar\StampsSoapClient\Type\CapabilitiesV4;

class CapabilitiesV5 extends CapabilitiesV4
{
    /**
     * @var bool
     */
    private bool $CanCreateCriticalMail;

    /**
     * @return bool
     */
    public function getCanCreateCriticalMail() : bool
    {
        return $this->CanCreateCriticalMail;
    }

    /**
     * @param bool $CanCreateCriticalMail
     * @return static
     */
    public function withCanCreateCriticalMail(bool $CanCreateCriticalMail) : static
    {
        $new = clone $this;
        $new->CanCreateCriticalMail = $CanCreateCriticalMail;

        return $new;
    }
}

