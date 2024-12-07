<?php

namespace Knightar\StampsSoapClient\Type;

use \Knightar\StampsSoapClient\Type\CapabilitiesV45;

class CapabilitiesV46 extends CapabilitiesV45
{
    /**
     * @var bool
     */
    private bool $CanPrintUPSPayOnUseReturns;

    /**
     * @var bool
     */
    private bool $CanPrintUPSReturns;

    /**
     * @var bool
     */
    private bool $CanPrintUPSStandalonePayOnUseReturns;

    /**
     * @return bool
     */
    public function getCanPrintUPSPayOnUseReturns() : bool
    {
        return $this->CanPrintUPSPayOnUseReturns;
    }

    /**
     * @param bool $CanPrintUPSPayOnUseReturns
     * @return static
     */
    public function withCanPrintUPSPayOnUseReturns(bool $CanPrintUPSPayOnUseReturns) : static
    {
        $new = clone $this;
        $new->CanPrintUPSPayOnUseReturns = $CanPrintUPSPayOnUseReturns;

        return $new;
    }

    /**
     * @return bool
     */
    public function getCanPrintUPSReturns() : bool
    {
        return $this->CanPrintUPSReturns;
    }

    /**
     * @param bool $CanPrintUPSReturns
     * @return static
     */
    public function withCanPrintUPSReturns(bool $CanPrintUPSReturns) : static
    {
        $new = clone $this;
        $new->CanPrintUPSReturns = $CanPrintUPSReturns;

        return $new;
    }

    /**
     * @return bool
     */
    public function getCanPrintUPSStandalonePayOnUseReturns() : bool
    {
        return $this->CanPrintUPSStandalonePayOnUseReturns;
    }

    /**
     * @param bool $CanPrintUPSStandalonePayOnUseReturns
     * @return static
     */
    public function withCanPrintUPSStandalonePayOnUseReturns(bool $CanPrintUPSStandalonePayOnUseReturns) : static
    {
        $new = clone $this;
        $new->CanPrintUPSStandalonePayOnUseReturns = $CanPrintUPSStandalonePayOnUseReturns;

        return $new;
    }
}

