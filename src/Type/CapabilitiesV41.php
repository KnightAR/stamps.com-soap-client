<?php

namespace Knightar\StampsSoapClient\Type;

use \Knightar\StampsSoapClient\Type\CapabilitiesV40;

class CapabilitiesV41 extends CapabilitiesV40
{
    /**
     * @var bool
     */
    private bool $CanPrintUSPSReturnService;

    /**
     * @return bool
     */
    public function getCanPrintUSPSReturnService() : bool
    {
        return $this->CanPrintUSPSReturnService;
    }

    /**
     * @param bool $CanPrintUSPSReturnService
     * @return static
     */
    public function withCanPrintUSPSReturnService(bool $CanPrintUSPSReturnService) : static
    {
        $new = clone $this;
        $new->CanPrintUSPSReturnService = $CanPrintUSPSReturnService;

        return $new;
    }
}

