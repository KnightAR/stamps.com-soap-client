<?php

namespace Knightar\StampsSoapClient\Type;

use \Knightar\StampsSoapClient\Type\CapabilitiesV22;

class CapabilitiesV23 extends CapabilitiesV22
{
    /**
     * @var bool
     */
    private bool $BlockSLAFromServiceBanner;

    /**
     * @var bool
     */
    private bool $CanPrintMailingLabel;

    /**
     * @var bool
     */
    private bool $IsManualManifesting;

    /**
     * @var bool
     */
    private bool $AllowNineDigitBarCode;

    /**
     * @return bool
     */
    public function getBlockSLAFromServiceBanner() : bool
    {
        return $this->BlockSLAFromServiceBanner;
    }

    /**
     * @param bool $BlockSLAFromServiceBanner
     * @return static
     */
    public function withBlockSLAFromServiceBanner(bool $BlockSLAFromServiceBanner) : static
    {
        $new = clone $this;
        $new->BlockSLAFromServiceBanner = $BlockSLAFromServiceBanner;

        return $new;
    }

    /**
     * @return bool
     */
    public function getCanPrintMailingLabel() : bool
    {
        return $this->CanPrintMailingLabel;
    }

    /**
     * @param bool $CanPrintMailingLabel
     * @return static
     */
    public function withCanPrintMailingLabel(bool $CanPrintMailingLabel) : static
    {
        $new = clone $this;
        $new->CanPrintMailingLabel = $CanPrintMailingLabel;

        return $new;
    }

    /**
     * @return bool
     */
    public function getIsManualManifesting() : bool
    {
        return $this->IsManualManifesting;
    }

    /**
     * @param bool $IsManualManifesting
     * @return static
     */
    public function withIsManualManifesting(bool $IsManualManifesting) : static
    {
        $new = clone $this;
        $new->IsManualManifesting = $IsManualManifesting;

        return $new;
    }

    /**
     * @return bool
     */
    public function getAllowNineDigitBarCode() : bool
    {
        return $this->AllowNineDigitBarCode;
    }

    /**
     * @param bool $AllowNineDigitBarCode
     * @return static
     */
    public function withAllowNineDigitBarCode(bool $AllowNineDigitBarCode) : static
    {
        $new = clone $this;
        $new->AllowNineDigitBarCode = $AllowNineDigitBarCode;

        return $new;
    }
}

