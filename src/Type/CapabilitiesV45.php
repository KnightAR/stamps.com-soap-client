<?php

namespace Knightar\StampsSoapClient\Type;

use \Knightar\StampsSoapClient\Type\CapabilitiesV44;

class CapabilitiesV45 extends CapabilitiesV44
{
    /**
     * @var bool
     */
    private bool $CanPrintUSPSReturnServicePrepaid;

    /**
     * @return bool
     */
    public function getCanPrintUSPSReturnServicePrepaid() : bool
    {
        return $this->CanPrintUSPSReturnServicePrepaid;
    }

    /**
     * @param bool $CanPrintUSPSReturnServicePrepaid
     * @return static
     */
    public function withCanPrintUSPSReturnServicePrepaid(bool $CanPrintUSPSReturnServicePrepaid) : static
    {
        $new = clone $this;
        $new->CanPrintUSPSReturnServicePrepaid = $CanPrintUSPSReturnServicePrepaid;

        return $new;
    }
}

