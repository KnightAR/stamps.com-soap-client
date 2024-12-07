<?php

namespace Knightar\StampsSoapClient\Type;

use \Knightar\StampsSoapClient\Type\CapabilitiesV20;

class CapabilitiesV21 extends CapabilitiesV20
{
    /**
     * @var bool
     */
    private bool $CanPrintDeliveredDutyPaid;

    /**
     * @return bool
     */
    public function getCanPrintDeliveredDutyPaid() : bool
    {
        return $this->CanPrintDeliveredDutyPaid;
    }

    /**
     * @param bool $CanPrintDeliveredDutyPaid
     * @return static
     */
    public function withCanPrintDeliveredDutyPaid(bool $CanPrintDeliveredDutyPaid) : static
    {
        $new = clone $this;
        $new->CanPrintDeliveredDutyPaid = $CanPrintDeliveredDutyPaid;

        return $new;
    }
}

