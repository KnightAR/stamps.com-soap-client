<?php

namespace Knightar\StampsSoapClient\Type;

class AccountInfoV65
{
    /**
     * @var int
     */
    private int $CustomerID;

    /**
     * @var int
     */
    private int $MeterNumber;

    /**
     * @var int
     */
    private int $UserID;

    /**
     * @var \Knightar\StampsSoapClient\Type\PostageBalance
     */
    private \Knightar\StampsSoapClient\Type\PostageBalance $PostageBalance;

    /**
     * @var float
     */
    private float $MaxPostageBalance;

    /**
     * @var string
     */
    private string $LPOCity;

    /**
     * @var string
     */
    private string $LPOState;

    /**
     * @var string
     */
    private string $LPOZip;

    /**
     * @var null | int
     */
    private ?int $AccountId = null;

    /**
     * @var int
     */
    private int $CorpID;

    /**
     * @var string
     */
    private string $StoreID;

    /**
     * @var int
     */
    private int $CostCodeLimit;

    /**
     * @var int
     */
    private int $MonthlyPostagePurchaseLimit;

    /**
     * @var int
     */
    private int $MaxUsers;

    /**
     * @var \Knightar\StampsSoapClient\Type\CapabilitiesV50
     */
    private \Knightar\StampsSoapClient\Type\CapabilitiesV50 $Capabilities;

    /**
     * @var \Knightar\StampsSoapClient\Type\Address
     */
    private \Knightar\StampsSoapClient\Type\Address $MeterPhysicalAddress;

    /**
     * @var 'NOT_IN_RESUBMISSION' | 'PAYMENT_RESUBMISSION' | 'NON_CORRECTABLE_PAYMENT_RESUBMISSION'
     */
    private string $ResubmitStatus;

    /**
     * @var null | string
     */
    private ?string $ResubmitCookie = null;

    /**
     * @var int
     */
    private int $PlanID;

    /**
     * @var null | int
     */
    private ?int $PendingPlanId = null;

    /**
     * @var string
     */
    private string $Username;

    /**
     * @var null | 'Unknown' | 'Retail' | 'CBP' | 'CPP' | 'NSA' | 'STMP'
     */
    private ?string $RatesetType = null;

    /**
     * @var null | bool
     */
    private ?bool $USPSRep = null;

    /**
     * @var null | \Knightar\StampsSoapClient\Type\AutoBuySettings
     */
    private ?\Knightar\StampsSoapClient\Type\AutoBuySettings $AutoBuySettings = null;

    /**
     * @var null | string
     */
    private ?string $RateToken = null;

    /**
     * @var null | string
     */
    private ?string $CustomerData = null;

    /**
     * @var \Knightar\StampsSoapClient\Type\Terms
     */
    private \Knightar\StampsSoapClient\Type\Terms $Terms;

    /**
     * @var null | float
     */
    private ?float $OutstandingLabelBalance = null;

    /**
     * @var null | float
     */
    private ?float $MaxOutstandingLabelBalance = null;

    /**
     * @var null | string
     */
    private ?string $Merchant = null;

    /**
     * @var null | string
     */
    private ?string $MeterProvider = null;

    /**
     * @var int
     */
    private int $MaxImageCount;

    /**
     * @var null | string
     */
    private ?string $SEApiToken = null;

    /**
     * @var 'None' | 'Usps' | 'Dhl' | 'Ups'
     */
    private string $GAPickupCarrier;

    /**
     * @var string
     */
    private string $LocalCurrency;

    /**
     * @var bool
     */
    private bool $HasPOURMailerID;

    /**
     * @var null | float
     */
    private ?float $MaxParcelGuardInsuredValue = null;

    /**
     * @var null | bool
     */
    private ?bool $FacilityAssigned = null;

    /**
     * @var null | \Knightar\StampsSoapClient\Type\ArrayOfConfiguredCarriers
     */
    private ?\Knightar\StampsSoapClient\Type\ArrayOfConfiguredCarriers $ConfiguredCarriers = null;

    /**
     * @var 'None' | 'Usps' | 'Dhl' | 'Ups'
     */
    private string $GPPickupCarrier;

    /**
     * @var string
     */
    private string $MailingZipCode;

    /**
     * @var null | string
     */
    private ?string $BalanceID = null;

    /**
     * @var bool
     */
    private bool $BrandedExternalPrints;

    /**
     * @var null | string
     */
    private ?string $CustomerGroup = null;

    /**
     * @return int
     */
    public function getCustomerID() : int
    {
        return $this->CustomerID;
    }

    /**
     * @param int $CustomerID
     * @return static
     */
    public function withCustomerID(int $CustomerID) : static
    {
        $new = clone $this;
        $new->CustomerID = $CustomerID;

        return $new;
    }

    /**
     * @return int
     */
    public function getMeterNumber() : int
    {
        return $this->MeterNumber;
    }

    /**
     * @param int $MeterNumber
     * @return static
     */
    public function withMeterNumber(int $MeterNumber) : static
    {
        $new = clone $this;
        $new->MeterNumber = $MeterNumber;

        return $new;
    }

    /**
     * @return int
     */
    public function getUserID() : int
    {
        return $this->UserID;
    }

    /**
     * @param int $UserID
     * @return static
     */
    public function withUserID(int $UserID) : static
    {
        $new = clone $this;
        $new->UserID = $UserID;

        return $new;
    }

    /**
     * @return \Knightar\StampsSoapClient\Type\PostageBalance
     */
    public function getPostageBalance() : \Knightar\StampsSoapClient\Type\PostageBalance
    {
        return $this->PostageBalance;
    }

    /**
     * @param \Knightar\StampsSoapClient\Type\PostageBalance $PostageBalance
     * @return static
     */
    public function withPostageBalance(\Knightar\StampsSoapClient\Type\PostageBalance $PostageBalance) : static
    {
        $new = clone $this;
        $new->PostageBalance = $PostageBalance;

        return $new;
    }

    /**
     * @return float
     */
    public function getMaxPostageBalance() : float
    {
        return $this->MaxPostageBalance;
    }

    /**
     * @param float $MaxPostageBalance
     * @return static
     */
    public function withMaxPostageBalance(float $MaxPostageBalance) : static
    {
        $new = clone $this;
        $new->MaxPostageBalance = $MaxPostageBalance;

        return $new;
    }

    /**
     * @return string
     */
    public function getLPOCity() : string
    {
        return $this->LPOCity;
    }

    /**
     * @param string $LPOCity
     * @return static
     */
    public function withLPOCity(string $LPOCity) : static
    {
        $new = clone $this;
        $new->LPOCity = $LPOCity;

        return $new;
    }

    /**
     * @return string
     */
    public function getLPOState() : string
    {
        return $this->LPOState;
    }

    /**
     * @param string $LPOState
     * @return static
     */
    public function withLPOState(string $LPOState) : static
    {
        $new = clone $this;
        $new->LPOState = $LPOState;

        return $new;
    }

    /**
     * @return string
     */
    public function getLPOZip() : string
    {
        return $this->LPOZip;
    }

    /**
     * @param string $LPOZip
     * @return static
     */
    public function withLPOZip(string $LPOZip) : static
    {
        $new = clone $this;
        $new->LPOZip = $LPOZip;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getAccountId() : ?int
    {
        return $this->AccountId;
    }

    /**
     * @param null | int $AccountId
     * @return static
     */
    public function withAccountId(?int $AccountId) : static
    {
        $new = clone $this;
        $new->AccountId = $AccountId;

        return $new;
    }

    /**
     * @return int
     */
    public function getCorpID() : int
    {
        return $this->CorpID;
    }

    /**
     * @param int $CorpID
     * @return static
     */
    public function withCorpID(int $CorpID) : static
    {
        $new = clone $this;
        $new->CorpID = $CorpID;

        return $new;
    }

    /**
     * @return string
     */
    public function getStoreID() : string
    {
        return $this->StoreID;
    }

    /**
     * @param string $StoreID
     * @return static
     */
    public function withStoreID(string $StoreID) : static
    {
        $new = clone $this;
        $new->StoreID = $StoreID;

        return $new;
    }

    /**
     * @return int
     */
    public function getCostCodeLimit() : int
    {
        return $this->CostCodeLimit;
    }

    /**
     * @param int $CostCodeLimit
     * @return static
     */
    public function withCostCodeLimit(int $CostCodeLimit) : static
    {
        $new = clone $this;
        $new->CostCodeLimit = $CostCodeLimit;

        return $new;
    }

    /**
     * @return int
     */
    public function getMonthlyPostagePurchaseLimit() : int
    {
        return $this->MonthlyPostagePurchaseLimit;
    }

    /**
     * @param int $MonthlyPostagePurchaseLimit
     * @return static
     */
    public function withMonthlyPostagePurchaseLimit(int $MonthlyPostagePurchaseLimit) : static
    {
        $new = clone $this;
        $new->MonthlyPostagePurchaseLimit = $MonthlyPostagePurchaseLimit;

        return $new;
    }

    /**
     * @return int
     */
    public function getMaxUsers() : int
    {
        return $this->MaxUsers;
    }

    /**
     * @param int $MaxUsers
     * @return static
     */
    public function withMaxUsers(int $MaxUsers) : static
    {
        $new = clone $this;
        $new->MaxUsers = $MaxUsers;

        return $new;
    }

    /**
     * @return \Knightar\StampsSoapClient\Type\CapabilitiesV50
     */
    public function getCapabilities() : \Knightar\StampsSoapClient\Type\CapabilitiesV50
    {
        return $this->Capabilities;
    }

    /**
     * @param \Knightar\StampsSoapClient\Type\CapabilitiesV50 $Capabilities
     * @return static
     */
    public function withCapabilities(\Knightar\StampsSoapClient\Type\CapabilitiesV50 $Capabilities) : static
    {
        $new = clone $this;
        $new->Capabilities = $Capabilities;

        return $new;
    }

    /**
     * @return \Knightar\StampsSoapClient\Type\Address
     */
    public function getMeterPhysicalAddress() : \Knightar\StampsSoapClient\Type\Address
    {
        return $this->MeterPhysicalAddress;
    }

    /**
     * @param \Knightar\StampsSoapClient\Type\Address $MeterPhysicalAddress
     * @return static
     */
    public function withMeterPhysicalAddress(\Knightar\StampsSoapClient\Type\Address $MeterPhysicalAddress) : static
    {
        $new = clone $this;
        $new->MeterPhysicalAddress = $MeterPhysicalAddress;

        return $new;
    }

    /**
     * @return 'NOT_IN_RESUBMISSION' | 'PAYMENT_RESUBMISSION' | 'NON_CORRECTABLE_PAYMENT_RESUBMISSION'
     */
    public function getResubmitStatus() : string
    {
        return $this->ResubmitStatus;
    }

    /**
     * @param 'NOT_IN_RESUBMISSION' | 'PAYMENT_RESUBMISSION' | 'NON_CORRECTABLE_PAYMENT_RESUBMISSION' $ResubmitStatus
     * @return static
     */
    public function withResubmitStatus(string $ResubmitStatus) : static
    {
        $new = clone $this;
        $new->ResubmitStatus = $ResubmitStatus;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getResubmitCookie() : ?string
    {
        return $this->ResubmitCookie;
    }

    /**
     * @param null | string $ResubmitCookie
     * @return static
     */
    public function withResubmitCookie(?string $ResubmitCookie) : static
    {
        $new = clone $this;
        $new->ResubmitCookie = $ResubmitCookie;

        return $new;
    }

    /**
     * @return int
     */
    public function getPlanID() : int
    {
        return $this->PlanID;
    }

    /**
     * @param int $PlanID
     * @return static
     */
    public function withPlanID(int $PlanID) : static
    {
        $new = clone $this;
        $new->PlanID = $PlanID;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getPendingPlanId() : ?int
    {
        return $this->PendingPlanId;
    }

    /**
     * @param null | int $PendingPlanId
     * @return static
     */
    public function withPendingPlanId(?int $PendingPlanId) : static
    {
        $new = clone $this;
        $new->PendingPlanId = $PendingPlanId;

        return $new;
    }

    /**
     * @return string
     */
    public function getUsername() : string
    {
        return $this->Username;
    }

    /**
     * @param string $Username
     * @return static
     */
    public function withUsername(string $Username) : static
    {
        $new = clone $this;
        $new->Username = $Username;

        return $new;
    }

    /**
     * @return null | 'Unknown' | 'Retail' | 'CBP' | 'CPP' | 'NSA' | 'STMP'
     */
    public function getRatesetType() : ?string
    {
        return $this->RatesetType;
    }

    /**
     * @param null | 'Unknown' | 'Retail' | 'CBP' | 'CPP' | 'NSA' | 'STMP' $RatesetType
     * @return static
     */
    public function withRatesetType(?string $RatesetType) : static
    {
        $new = clone $this;
        $new->RatesetType = $RatesetType;

        return $new;
    }

    /**
     * @return null | bool
     */
    public function getUSPSRep() : ?bool
    {
        return $this->USPSRep;
    }

    /**
     * @param null | bool $USPSRep
     * @return static
     */
    public function withUSPSRep(?bool $USPSRep) : static
    {
        $new = clone $this;
        $new->USPSRep = $USPSRep;

        return $new;
    }

    /**
     * @return null | \Knightar\StampsSoapClient\Type\AutoBuySettings
     */
    public function getAutoBuySettings() : ?\Knightar\StampsSoapClient\Type\AutoBuySettings
    {
        return $this->AutoBuySettings;
    }

    /**
     * @param null | \Knightar\StampsSoapClient\Type\AutoBuySettings $AutoBuySettings
     * @return static
     */
    public function withAutoBuySettings(?\Knightar\StampsSoapClient\Type\AutoBuySettings $AutoBuySettings) : static
    {
        $new = clone $this;
        $new->AutoBuySettings = $AutoBuySettings;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getRateToken() : ?string
    {
        return $this->RateToken;
    }

    /**
     * @param null | string $RateToken
     * @return static
     */
    public function withRateToken(?string $RateToken) : static
    {
        $new = clone $this;
        $new->RateToken = $RateToken;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getCustomerData() : ?string
    {
        return $this->CustomerData;
    }

    /**
     * @param null | string $CustomerData
     * @return static
     */
    public function withCustomerData(?string $CustomerData) : static
    {
        $new = clone $this;
        $new->CustomerData = $CustomerData;

        return $new;
    }

    /**
     * @return \Knightar\StampsSoapClient\Type\Terms
     */
    public function getTerms() : \Knightar\StampsSoapClient\Type\Terms
    {
        return $this->Terms;
    }

    /**
     * @param \Knightar\StampsSoapClient\Type\Terms $Terms
     * @return static
     */
    public function withTerms(\Knightar\StampsSoapClient\Type\Terms $Terms) : static
    {
        $new = clone $this;
        $new->Terms = $Terms;

        return $new;
    }

    /**
     * @return null | float
     */
    public function getOutstandingLabelBalance() : ?float
    {
        return $this->OutstandingLabelBalance;
    }

    /**
     * @param null | float $OutstandingLabelBalance
     * @return static
     */
    public function withOutstandingLabelBalance(?float $OutstandingLabelBalance) : static
    {
        $new = clone $this;
        $new->OutstandingLabelBalance = $OutstandingLabelBalance;

        return $new;
    }

    /**
     * @return null | float
     */
    public function getMaxOutstandingLabelBalance() : ?float
    {
        return $this->MaxOutstandingLabelBalance;
    }

    /**
     * @param null | float $MaxOutstandingLabelBalance
     * @return static
     */
    public function withMaxOutstandingLabelBalance(?float $MaxOutstandingLabelBalance) : static
    {
        $new = clone $this;
        $new->MaxOutstandingLabelBalance = $MaxOutstandingLabelBalance;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getMerchant() : ?string
    {
        return $this->Merchant;
    }

    /**
     * @param null | string $Merchant
     * @return static
     */
    public function withMerchant(?string $Merchant) : static
    {
        $new = clone $this;
        $new->Merchant = $Merchant;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getMeterProvider() : ?string
    {
        return $this->MeterProvider;
    }

    /**
     * @param null | string $MeterProvider
     * @return static
     */
    public function withMeterProvider(?string $MeterProvider) : static
    {
        $new = clone $this;
        $new->MeterProvider = $MeterProvider;

        return $new;
    }

    /**
     * @return int
     */
    public function getMaxImageCount() : int
    {
        return $this->MaxImageCount;
    }

    /**
     * @param int $MaxImageCount
     * @return static
     */
    public function withMaxImageCount(int $MaxImageCount) : static
    {
        $new = clone $this;
        $new->MaxImageCount = $MaxImageCount;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getSEApiToken() : ?string
    {
        return $this->SEApiToken;
    }

    /**
     * @param null | string $SEApiToken
     * @return static
     */
    public function withSEApiToken(?string $SEApiToken) : static
    {
        $new = clone $this;
        $new->SEApiToken = $SEApiToken;

        return $new;
    }

    /**
     * @return 'None' | 'Usps' | 'Dhl' | 'Ups'
     */
    public function getGAPickupCarrier() : string
    {
        return $this->GAPickupCarrier;
    }

    /**
     * @param 'None' | 'Usps' | 'Dhl' | 'Ups' $GAPickupCarrier
     * @return static
     */
    public function withGAPickupCarrier(string $GAPickupCarrier) : static
    {
        $new = clone $this;
        $new->GAPickupCarrier = $GAPickupCarrier;

        return $new;
    }

    /**
     * @return string
     */
    public function getLocalCurrency() : string
    {
        return $this->LocalCurrency;
    }

    /**
     * @param string $LocalCurrency
     * @return static
     */
    public function withLocalCurrency(string $LocalCurrency) : static
    {
        $new = clone $this;
        $new->LocalCurrency = $LocalCurrency;

        return $new;
    }

    /**
     * @return bool
     */
    public function getHasPOURMailerID() : bool
    {
        return $this->HasPOURMailerID;
    }

    /**
     * @param bool $HasPOURMailerID
     * @return static
     */
    public function withHasPOURMailerID(bool $HasPOURMailerID) : static
    {
        $new = clone $this;
        $new->HasPOURMailerID = $HasPOURMailerID;

        return $new;
    }

    /**
     * @return null | float
     */
    public function getMaxParcelGuardInsuredValue() : ?float
    {
        return $this->MaxParcelGuardInsuredValue;
    }

    /**
     * @param null | float $MaxParcelGuardInsuredValue
     * @return static
     */
    public function withMaxParcelGuardInsuredValue(?float $MaxParcelGuardInsuredValue) : static
    {
        $new = clone $this;
        $new->MaxParcelGuardInsuredValue = $MaxParcelGuardInsuredValue;

        return $new;
    }

    /**
     * @return null | bool
     */
    public function getFacilityAssigned() : ?bool
    {
        return $this->FacilityAssigned;
    }

    /**
     * @param null | bool $FacilityAssigned
     * @return static
     */
    public function withFacilityAssigned(?bool $FacilityAssigned) : static
    {
        $new = clone $this;
        $new->FacilityAssigned = $FacilityAssigned;

        return $new;
    }

    /**
     * @return null | \Knightar\StampsSoapClient\Type\ArrayOfConfiguredCarriers
     */
    public function getConfiguredCarriers() : ?\Knightar\StampsSoapClient\Type\ArrayOfConfiguredCarriers
    {
        return $this->ConfiguredCarriers;
    }

    /**
     * @param null | \Knightar\StampsSoapClient\Type\ArrayOfConfiguredCarriers $ConfiguredCarriers
     * @return static
     */
    public function withConfiguredCarriers(?\Knightar\StampsSoapClient\Type\ArrayOfConfiguredCarriers $ConfiguredCarriers) : static
    {
        $new = clone $this;
        $new->ConfiguredCarriers = $ConfiguredCarriers;

        return $new;
    }

    /**
     * @return 'None' | 'Usps' | 'Dhl' | 'Ups'
     */
    public function getGPPickupCarrier() : string
    {
        return $this->GPPickupCarrier;
    }

    /**
     * @param 'None' | 'Usps' | 'Dhl' | 'Ups' $GPPickupCarrier
     * @return static
     */
    public function withGPPickupCarrier(string $GPPickupCarrier) : static
    {
        $new = clone $this;
        $new->GPPickupCarrier = $GPPickupCarrier;

        return $new;
    }

    /**
     * @return string
     */
    public function getMailingZipCode() : string
    {
        return $this->MailingZipCode;
    }

    /**
     * @param string $MailingZipCode
     * @return static
     */
    public function withMailingZipCode(string $MailingZipCode) : static
    {
        $new = clone $this;
        $new->MailingZipCode = $MailingZipCode;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getBalanceID() : ?string
    {
        return $this->BalanceID;
    }

    /**
     * @param null | string $BalanceID
     * @return static
     */
    public function withBalanceID(?string $BalanceID) : static
    {
        $new = clone $this;
        $new->BalanceID = $BalanceID;

        return $new;
    }

    /**
     * @return bool
     */
    public function getBrandedExternalPrints() : bool
    {
        return $this->BrandedExternalPrints;
    }

    /**
     * @param bool $BrandedExternalPrints
     * @return static
     */
    public function withBrandedExternalPrints(bool $BrandedExternalPrints) : static
    {
        $new = clone $this;
        $new->BrandedExternalPrints = $BrandedExternalPrints;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getCustomerGroup() : ?string
    {
        return $this->CustomerGroup;
    }

    /**
     * @param null | string $CustomerGroup
     * @return static
     */
    public function withCustomerGroup(?string $CustomerGroup) : static
    {
        $new = clone $this;
        $new->CustomerGroup = $CustomerGroup;

        return $new;
    }
}

