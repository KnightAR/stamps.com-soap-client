<?php

namespace Knightar\StampsSoapClient\Type;

use \Knightar\StampsSoapClient\Type\CapabilitiesV15;

class CapabilitiesV16 extends CapabilitiesV15
{
    /**
     * @var bool
     */
    private bool $CanPrintFCIPresort;

    /**
     * @var bool
     */
    private bool $CanPrintPMIPresort;

    /**
     * @var bool
     */
    private bool $CanPrintPMEIPresort;

    /**
     * @var bool
     */
    private bool $CanPrintPresortPayOnUse;

    /**
     * @var bool
     */
    private bool $CanChangePaymentType;

    /**
     * @return bool
     */
    public function getCanPrintFCIPresort() : bool
    {
        return $this->CanPrintFCIPresort;
    }

    /**
     * @param bool $CanPrintFCIPresort
     * @return static
     */
    public function withCanPrintFCIPresort(bool $CanPrintFCIPresort) : static
    {
        $new = clone $this;
        $new->CanPrintFCIPresort = $CanPrintFCIPresort;

        return $new;
    }

    /**
     * @return bool
     */
    public function getCanPrintPMIPresort() : bool
    {
        return $this->CanPrintPMIPresort;
    }

    /**
     * @param bool $CanPrintPMIPresort
     * @return static
     */
    public function withCanPrintPMIPresort(bool $CanPrintPMIPresort) : static
    {
        $new = clone $this;
        $new->CanPrintPMIPresort = $CanPrintPMIPresort;

        return $new;
    }

    /**
     * @return bool
     */
    public function getCanPrintPMEIPresort() : bool
    {
        return $this->CanPrintPMEIPresort;
    }

    /**
     * @param bool $CanPrintPMEIPresort
     * @return static
     */
    public function withCanPrintPMEIPresort(bool $CanPrintPMEIPresort) : static
    {
        $new = clone $this;
        $new->CanPrintPMEIPresort = $CanPrintPMEIPresort;

        return $new;
    }

    /**
     * @return bool
     */
    public function getCanPrintPresortPayOnUse() : bool
    {
        return $this->CanPrintPresortPayOnUse;
    }

    /**
     * @param bool $CanPrintPresortPayOnUse
     * @return static
     */
    public function withCanPrintPresortPayOnUse(bool $CanPrintPresortPayOnUse) : static
    {
        $new = clone $this;
        $new->CanPrintPresortPayOnUse = $CanPrintPresortPayOnUse;

        return $new;
    }

    /**
     * @return bool
     */
    public function getCanChangePaymentType() : bool
    {
        return $this->CanChangePaymentType;
    }

    /**
     * @param bool $CanChangePaymentType
     * @return static
     */
    public function withCanChangePaymentType(bool $CanChangePaymentType) : static
    {
        $new = clone $this;
        $new->CanChangePaymentType = $CanChangePaymentType;

        return $new;
    }
}

