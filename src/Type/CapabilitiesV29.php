<?php

namespace Knightar\StampsSoapClient\Type;

use \Knightar\StampsSoapClient\Type\CapabilitiesV28;

class CapabilitiesV29 extends CapabilitiesV28
{
    /**
     * @var bool
     */
    private bool $CanPrintFCMIFlatDelCon;

    /**
     * @var bool
     */
    private bool $CanBypassDomesticCustoms;

    /**
     * @return bool
     */
    public function getCanPrintFCMIFlatDelCon() : bool
    {
        return $this->CanPrintFCMIFlatDelCon;
    }

    /**
     * @param bool $CanPrintFCMIFlatDelCon
     * @return static
     */
    public function withCanPrintFCMIFlatDelCon(bool $CanPrintFCMIFlatDelCon) : static
    {
        $new = clone $this;
        $new->CanPrintFCMIFlatDelCon = $CanPrintFCMIFlatDelCon;

        return $new;
    }

    /**
     * @return bool
     */
    public function getCanBypassDomesticCustoms() : bool
    {
        return $this->CanBypassDomesticCustoms;
    }

    /**
     * @param bool $CanBypassDomesticCustoms
     * @return static
     */
    public function withCanBypassDomesticCustoms(bool $CanBypassDomesticCustoms) : static
    {
        $new = clone $this;
        $new->CanBypassDomesticCustoms = $CanBypassDomesticCustoms;

        return $new;
    }
}

