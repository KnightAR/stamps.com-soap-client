<?php

namespace Knightar\StampsSoapClient\Type;

use \Knightar\StampsSoapClient\Type\CapabilitiesV6;

class CapabilitiesV7 extends CapabilitiesV6
{
    /**
     * @var bool
     */
    private bool $CanUseCertifiedMail;

    /**
     * @var bool
     */
    private bool $CanPrintAllIndiciumValues;

    /**
     * @return bool
     */
    public function getCanUseCertifiedMail() : bool
    {
        return $this->CanUseCertifiedMail;
    }

    /**
     * @param bool $CanUseCertifiedMail
     * @return static
     */
    public function withCanUseCertifiedMail(bool $CanUseCertifiedMail) : static
    {
        $new = clone $this;
        $new->CanUseCertifiedMail = $CanUseCertifiedMail;

        return $new;
    }

    /**
     * @return bool
     */
    public function getCanPrintAllIndiciumValues() : bool
    {
        return $this->CanPrintAllIndiciumValues;
    }

    /**
     * @param bool $CanPrintAllIndiciumValues
     * @return static
     */
    public function withCanPrintAllIndiciumValues(bool $CanPrintAllIndiciumValues) : static
    {
        $new = clone $this;
        $new->CanPrintAllIndiciumValues = $CanPrintAllIndiciumValues;

        return $new;
    }
}

