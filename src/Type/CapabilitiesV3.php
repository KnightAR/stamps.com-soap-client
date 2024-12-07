<?php

namespace Knightar\StampsSoapClient\Type;

use \Knightar\StampsSoapClient\Type\CapabilitiesV2;

class CapabilitiesV3 extends CapabilitiesV2
{
    /**
     * @var bool
     */
    private bool $CanPrintReturnShippingLabel;

    /**
     * @var bool
     */
    private bool $CanManageUsers;

    /**
     * @var bool
     */
    private bool $CanPrintNetStamps;

    /**
     * @var bool
     */
    private bool $CanEmailNotifications;

    /**
     * @var bool
     */
    private bool $CanViewReports;

    /**
     * @var bool
     */
    private bool $CanCreateSCANForm;

    /**
     * @var bool
     */
    private bool $AllowRestrictedSheets;

    /**
     * @var bool
     */
    private bool $HideUnavailableFeatures;

    /**
     * @var bool
     */
    private bool $WebPostage;

    /**
     * @var bool
     */
    private bool $CanViewInsuranceHistory;

    /**
     * @var bool
     */
    private bool $CanChangeServicePlan;

    /**
     * @var bool
     */
    private bool $HideEstimatedDeliveryTime;

    /**
     * @var bool
     */
    private bool $CanPurchaseFromStore;

    /**
     * @var bool
     */
    private bool $CanChangePhysicalAddress;

    /**
     * @var bool
     */
    private bool $CanChangePaymentMethod;

    /**
     * @var bool
     */
    private bool $CanChangeContactInfo;

    /**
     * @var bool
     */
    private bool $CanViewAdvancedReporting;

    /**
     * @return bool
     */
    public function getCanPrintReturnShippingLabel() : bool
    {
        return $this->CanPrintReturnShippingLabel;
    }

    /**
     * @param bool $CanPrintReturnShippingLabel
     * @return static
     */
    public function withCanPrintReturnShippingLabel(bool $CanPrintReturnShippingLabel) : static
    {
        $new = clone $this;
        $new->CanPrintReturnShippingLabel = $CanPrintReturnShippingLabel;

        return $new;
    }

    /**
     * @return bool
     */
    public function getCanManageUsers() : bool
    {
        return $this->CanManageUsers;
    }

    /**
     * @param bool $CanManageUsers
     * @return static
     */
    public function withCanManageUsers(bool $CanManageUsers) : static
    {
        $new = clone $this;
        $new->CanManageUsers = $CanManageUsers;

        return $new;
    }

    /**
     * @return bool
     */
    public function getCanPrintNetStamps() : bool
    {
        return $this->CanPrintNetStamps;
    }

    /**
     * @param bool $CanPrintNetStamps
     * @return static
     */
    public function withCanPrintNetStamps(bool $CanPrintNetStamps) : static
    {
        $new = clone $this;
        $new->CanPrintNetStamps = $CanPrintNetStamps;

        return $new;
    }

    /**
     * @return bool
     */
    public function getCanEmailNotifications() : bool
    {
        return $this->CanEmailNotifications;
    }

    /**
     * @param bool $CanEmailNotifications
     * @return static
     */
    public function withCanEmailNotifications(bool $CanEmailNotifications) : static
    {
        $new = clone $this;
        $new->CanEmailNotifications = $CanEmailNotifications;

        return $new;
    }

    /**
     * @return bool
     */
    public function getCanViewReports() : bool
    {
        return $this->CanViewReports;
    }

    /**
     * @param bool $CanViewReports
     * @return static
     */
    public function withCanViewReports(bool $CanViewReports) : static
    {
        $new = clone $this;
        $new->CanViewReports = $CanViewReports;

        return $new;
    }

    /**
     * @return bool
     */
    public function getCanCreateSCANForm() : bool
    {
        return $this->CanCreateSCANForm;
    }

    /**
     * @param bool $CanCreateSCANForm
     * @return static
     */
    public function withCanCreateSCANForm(bool $CanCreateSCANForm) : static
    {
        $new = clone $this;
        $new->CanCreateSCANForm = $CanCreateSCANForm;

        return $new;
    }

    /**
     * @return bool
     */
    public function getAllowRestrictedSheets() : bool
    {
        return $this->AllowRestrictedSheets;
    }

    /**
     * @param bool $AllowRestrictedSheets
     * @return static
     */
    public function withAllowRestrictedSheets(bool $AllowRestrictedSheets) : static
    {
        $new = clone $this;
        $new->AllowRestrictedSheets = $AllowRestrictedSheets;

        return $new;
    }

    /**
     * @return bool
     */
    public function getHideUnavailableFeatures() : bool
    {
        return $this->HideUnavailableFeatures;
    }

    /**
     * @param bool $HideUnavailableFeatures
     * @return static
     */
    public function withHideUnavailableFeatures(bool $HideUnavailableFeatures) : static
    {
        $new = clone $this;
        $new->HideUnavailableFeatures = $HideUnavailableFeatures;

        return $new;
    }

    /**
     * @return bool
     */
    public function getWebPostage() : bool
    {
        return $this->WebPostage;
    }

    /**
     * @param bool $WebPostage
     * @return static
     */
    public function withWebPostage(bool $WebPostage) : static
    {
        $new = clone $this;
        $new->WebPostage = $WebPostage;

        return $new;
    }

    /**
     * @return bool
     */
    public function getCanViewInsuranceHistory() : bool
    {
        return $this->CanViewInsuranceHistory;
    }

    /**
     * @param bool $CanViewInsuranceHistory
     * @return static
     */
    public function withCanViewInsuranceHistory(bool $CanViewInsuranceHistory) : static
    {
        $new = clone $this;
        $new->CanViewInsuranceHistory = $CanViewInsuranceHistory;

        return $new;
    }

    /**
     * @return bool
     */
    public function getCanChangeServicePlan() : bool
    {
        return $this->CanChangeServicePlan;
    }

    /**
     * @param bool $CanChangeServicePlan
     * @return static
     */
    public function withCanChangeServicePlan(bool $CanChangeServicePlan) : static
    {
        $new = clone $this;
        $new->CanChangeServicePlan = $CanChangeServicePlan;

        return $new;
    }

    /**
     * @return bool
     */
    public function getHideEstimatedDeliveryTime() : bool
    {
        return $this->HideEstimatedDeliveryTime;
    }

    /**
     * @param bool $HideEstimatedDeliveryTime
     * @return static
     */
    public function withHideEstimatedDeliveryTime(bool $HideEstimatedDeliveryTime) : static
    {
        $new = clone $this;
        $new->HideEstimatedDeliveryTime = $HideEstimatedDeliveryTime;

        return $new;
    }

    /**
     * @return bool
     */
    public function getCanPurchaseFromStore() : bool
    {
        return $this->CanPurchaseFromStore;
    }

    /**
     * @param bool $CanPurchaseFromStore
     * @return static
     */
    public function withCanPurchaseFromStore(bool $CanPurchaseFromStore) : static
    {
        $new = clone $this;
        $new->CanPurchaseFromStore = $CanPurchaseFromStore;

        return $new;
    }

    /**
     * @return bool
     */
    public function getCanChangePhysicalAddress() : bool
    {
        return $this->CanChangePhysicalAddress;
    }

    /**
     * @param bool $CanChangePhysicalAddress
     * @return static
     */
    public function withCanChangePhysicalAddress(bool $CanChangePhysicalAddress) : static
    {
        $new = clone $this;
        $new->CanChangePhysicalAddress = $CanChangePhysicalAddress;

        return $new;
    }

    /**
     * @return bool
     */
    public function getCanChangePaymentMethod() : bool
    {
        return $this->CanChangePaymentMethod;
    }

    /**
     * @param bool $CanChangePaymentMethod
     * @return static
     */
    public function withCanChangePaymentMethod(bool $CanChangePaymentMethod) : static
    {
        $new = clone $this;
        $new->CanChangePaymentMethod = $CanChangePaymentMethod;

        return $new;
    }

    /**
     * @return bool
     */
    public function getCanChangeContactInfo() : bool
    {
        return $this->CanChangeContactInfo;
    }

    /**
     * @param bool $CanChangeContactInfo
     * @return static
     */
    public function withCanChangeContactInfo(bool $CanChangeContactInfo) : static
    {
        $new = clone $this;
        $new->CanChangeContactInfo = $CanChangeContactInfo;

        return $new;
    }

    /**
     * @return bool
     */
    public function getCanViewAdvancedReporting() : bool
    {
        return $this->CanViewAdvancedReporting;
    }

    /**
     * @param bool $CanViewAdvancedReporting
     * @return static
     */
    public function withCanViewAdvancedReporting(bool $CanViewAdvancedReporting) : static
    {
        $new = clone $this;
        $new->CanViewAdvancedReporting = $CanViewAdvancedReporting;

        return $new;
    }
}

