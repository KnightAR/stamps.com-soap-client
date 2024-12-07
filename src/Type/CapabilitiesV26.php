<?php

namespace Knightar\StampsSoapClient\Type;

use \Knightar\StampsSoapClient\Type\CapabilitiesV25;

class CapabilitiesV26 extends CapabilitiesV25
{
    /**
     * @var bool
     */
    private bool $CanPrintPMOD;

    /**
     * @var bool
     */
    private bool $CanPrintPMEOD;

    /**
     * @var bool
     */
    private bool $CanPrintRetailGround;

    /**
     * @var bool
     */
    private bool $CanPrintPSLW;

    /**
     * @var bool
     */
    private bool $ZPB;

    /**
     * @return bool
     */
    public function getCanPrintPMOD() : bool
    {
        return $this->CanPrintPMOD;
    }

    /**
     * @param bool $CanPrintPMOD
     * @return static
     */
    public function withCanPrintPMOD(bool $CanPrintPMOD) : static
    {
        $new = clone $this;
        $new->CanPrintPMOD = $CanPrintPMOD;

        return $new;
    }

    /**
     * @return bool
     */
    public function getCanPrintPMEOD() : bool
    {
        return $this->CanPrintPMEOD;
    }

    /**
     * @param bool $CanPrintPMEOD
     * @return static
     */
    public function withCanPrintPMEOD(bool $CanPrintPMEOD) : static
    {
        $new = clone $this;
        $new->CanPrintPMEOD = $CanPrintPMEOD;

        return $new;
    }

    /**
     * @return bool
     */
    public function getCanPrintRetailGround() : bool
    {
        return $this->CanPrintRetailGround;
    }

    /**
     * @param bool $CanPrintRetailGround
     * @return static
     */
    public function withCanPrintRetailGround(bool $CanPrintRetailGround) : static
    {
        $new = clone $this;
        $new->CanPrintRetailGround = $CanPrintRetailGround;

        return $new;
    }

    /**
     * @return bool
     */
    public function getCanPrintPSLW() : bool
    {
        return $this->CanPrintPSLW;
    }

    /**
     * @param bool $CanPrintPSLW
     * @return static
     */
    public function withCanPrintPSLW(bool $CanPrintPSLW) : static
    {
        $new = clone $this;
        $new->CanPrintPSLW = $CanPrintPSLW;

        return $new;
    }

    /**
     * @return bool
     */
    public function getZPB() : bool
    {
        return $this->ZPB;
    }

    /**
     * @param bool $ZPB
     * @return static
     */
    public function withZPB(bool $ZPB) : static
    {
        $new = clone $this;
        $new->ZPB = $ZPB;

        return $new;
    }
}

