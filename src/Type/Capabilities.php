<?php

namespace Knightar\StampsSoapClient\Type;

class Capabilities
{
    /**
     * @var bool
     */
    private bool $CanPrintShipping;

    /**
     * @var bool
     */
    private bool $CanUseCostCodes;

    /**
     * @var bool
     */
    private bool $CanUseHiddenPostage;

    /**
     * @var bool
     */
    private bool $CanPurchaseSDCInsurance;

    /**
     * @var bool
     */
    private bool $CanPrintMemoOnShippingLabel;

    /**
     * @var bool
     */
    private bool $CanPrintInternational;

    /**
     * @var bool
     */
    private bool $CanPurchasePostage;

    /**
     * @var bool
     */
    private bool $CanEditCostCodes;

    /**
     * @var bool
     */
    private bool $MustUseCostCodes;

    /**
     * @var bool
     */
    private bool $CanViewOnlineReports;

    /**
     * @var float
     */
    private float $PerPrintLimit;

    /**
     * @return bool
     */
    public function getCanPrintShipping() : bool
    {
        return $this->CanPrintShipping;
    }

    /**
     * @param bool $CanPrintShipping
     * @return static
     */
    public function withCanPrintShipping(bool $CanPrintShipping) : static
    {
        $new = clone $this;
        $new->CanPrintShipping = $CanPrintShipping;

        return $new;
    }

    /**
     * @return bool
     */
    public function getCanUseCostCodes() : bool
    {
        return $this->CanUseCostCodes;
    }

    /**
     * @param bool $CanUseCostCodes
     * @return static
     */
    public function withCanUseCostCodes(bool $CanUseCostCodes) : static
    {
        $new = clone $this;
        $new->CanUseCostCodes = $CanUseCostCodes;

        return $new;
    }

    /**
     * @return bool
     */
    public function getCanUseHiddenPostage() : bool
    {
        return $this->CanUseHiddenPostage;
    }

    /**
     * @param bool $CanUseHiddenPostage
     * @return static
     */
    public function withCanUseHiddenPostage(bool $CanUseHiddenPostage) : static
    {
        $new = clone $this;
        $new->CanUseHiddenPostage = $CanUseHiddenPostage;

        return $new;
    }

    /**
     * @return bool
     */
    public function getCanPurchaseSDCInsurance() : bool
    {
        return $this->CanPurchaseSDCInsurance;
    }

    /**
     * @param bool $CanPurchaseSDCInsurance
     * @return static
     */
    public function withCanPurchaseSDCInsurance(bool $CanPurchaseSDCInsurance) : static
    {
        $new = clone $this;
        $new->CanPurchaseSDCInsurance = $CanPurchaseSDCInsurance;

        return $new;
    }

    /**
     * @return bool
     */
    public function getCanPrintMemoOnShippingLabel() : bool
    {
        return $this->CanPrintMemoOnShippingLabel;
    }

    /**
     * @param bool $CanPrintMemoOnShippingLabel
     * @return static
     */
    public function withCanPrintMemoOnShippingLabel(bool $CanPrintMemoOnShippingLabel) : static
    {
        $new = clone $this;
        $new->CanPrintMemoOnShippingLabel = $CanPrintMemoOnShippingLabel;

        return $new;
    }

    /**
     * @return bool
     */
    public function getCanPrintInternational() : bool
    {
        return $this->CanPrintInternational;
    }

    /**
     * @param bool $CanPrintInternational
     * @return static
     */
    public function withCanPrintInternational(bool $CanPrintInternational) : static
    {
        $new = clone $this;
        $new->CanPrintInternational = $CanPrintInternational;

        return $new;
    }

    /**
     * @return bool
     */
    public function getCanPurchasePostage() : bool
    {
        return $this->CanPurchasePostage;
    }

    /**
     * @param bool $CanPurchasePostage
     * @return static
     */
    public function withCanPurchasePostage(bool $CanPurchasePostage) : static
    {
        $new = clone $this;
        $new->CanPurchasePostage = $CanPurchasePostage;

        return $new;
    }

    /**
     * @return bool
     */
    public function getCanEditCostCodes() : bool
    {
        return $this->CanEditCostCodes;
    }

    /**
     * @param bool $CanEditCostCodes
     * @return static
     */
    public function withCanEditCostCodes(bool $CanEditCostCodes) : static
    {
        $new = clone $this;
        $new->CanEditCostCodes = $CanEditCostCodes;

        return $new;
    }

    /**
     * @return bool
     */
    public function getMustUseCostCodes() : bool
    {
        return $this->MustUseCostCodes;
    }

    /**
     * @param bool $MustUseCostCodes
     * @return static
     */
    public function withMustUseCostCodes(bool $MustUseCostCodes) : static
    {
        $new = clone $this;
        $new->MustUseCostCodes = $MustUseCostCodes;

        return $new;
    }

    /**
     * @return bool
     */
    public function getCanViewOnlineReports() : bool
    {
        return $this->CanViewOnlineReports;
    }

    /**
     * @param bool $CanViewOnlineReports
     * @return static
     */
    public function withCanViewOnlineReports(bool $CanViewOnlineReports) : static
    {
        $new = clone $this;
        $new->CanViewOnlineReports = $CanViewOnlineReports;

        return $new;
    }

    /**
     * @return float
     */
    public function getPerPrintLimit() : float
    {
        return $this->PerPrintLimit;
    }

    /**
     * @param float $PerPrintLimit
     * @return static
     */
    public function withPerPrintLimit(float $PerPrintLimit) : static
    {
        $new = clone $this;
        $new->PerPrintLimit = $PerPrintLimit;

        return $new;
    }
}

