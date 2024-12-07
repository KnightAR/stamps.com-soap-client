<?php

namespace Knightar\StampsSoapClient\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetURL implements RequestInterface
{
    /**
     * @var null | string
     */
    private ?string $Authenticator = null;

    /**
     * @var null | \Knightar\StampsSoapClient\Type\Credentials
     */
    private ?\Knightar\StampsSoapClient\Type\Credentials $Credentials = null;

    /**
     * @var 'HomePage' | 'AccountSettingsPage' | 'EditCostCodesPage' | 'OnlineReportsPage' | 'HelpPage' | 'OnlineReportingHistory' | 'OnlineReportingRefund' | 'OnlineReportingPickup' | 'OnlineReportingSCAN' | 'OnlineReportingClaim' | 'StoreChangePlan' | 'WebClientHome' | 'ReportsBalances' | 'ReportsExpenses' | 'ReportsPrints' | 'StoreBuyPostage' | 'StoreMeters' | 'StoreUsers' | 'StorePaymentMethods' | 'StoreCorpContactInfo' | 'StoreMeterUsers' | 'StoreMeterSettings' | 'StoreMeterAddress' | 'StoreShippingAddresses' | 'StoreReferAFriend' | 'StoreAccountCredit' | 'StoreReorder' | 'StoreMyProfile' | 'StorePassword' | 'StoreCommPreferences' | 'StoreNetStampsLabels' | 'StoreShippingLabels' | 'StoreMailingLabels' | 'StoreScalesAndPrinters' | 'StoreFreeUSPSSupplies' | 'StoreBubbleMailers' | 'StoreShippingSupplies' | 'StoreScales' | 'StoreAveryNetStampsLabels' | 'StoreAveryMailingLabels' | 'StoreMeterContactInfo' | 'StoreEditMeterAddress' | 'StoreHome' | 'StoreAccount' | 'StoreCostCode' | 'StoreHistory' | 'StoreFaq' | 'StoreCustomerHome' | 'StoreGetAccountInfoJSon' | 'StoreSetAccountInfoJSon' | 'StoreUserCategories' | 'StoreCategory' | 'StoreUpdatePaymentMethodResubmit' | 'StoreDefaultPaymentMethods' | 'StoreSignOut' | 'CustomShipNotifyEmail' | 'HelpCenterHome' | 'MustChangePassword' | 'Contacts' | 'WebClientPreferences' | 'WebClientDefault' | 'StoreAutoBuy' | 'SetTermsGeneral' | 'UploadImage' | 'EndiciaLogin' | 'PhoneVerification' | 'CarrierSetupDHLExpress' | 'CarrierSetupUPS' | 'CarrierManagement' | 'StoreOrderHistory' | 'StoreSubscriptions' | 'StoreHardware' | 'StoreEnvelopes' | 'StoreLabels' | 'StoreClearNetStamps' | 'StoreOriginalNetStamps' | 'StoreNetStamps' | 'StoreSignIn' | 'AddPayment' | 'CarrierSetupFedEx' | 'ParcelGuard' | 'BrandedTracking' | 'RateAdvisor' | 'PPL' | 'ParcelGuardClaim' | 'ParcelGuardClaimStatus'
     */
    private string $URLType;

    /**
     * @var string
     */
    private string $ApplicationContext;

    /**
     * Constructor
     *
     * @param null | string $Authenticator
     * @param null | \Knightar\StampsSoapClient\Type\Credentials $Credentials
     * @param 'HomePage' | 'AccountSettingsPage' | 'EditCostCodesPage' | 'OnlineReportsPage' | 'HelpPage' | 'OnlineReportingHistory' | 'OnlineReportingRefund' | 'OnlineReportingPickup' | 'OnlineReportingSCAN' | 'OnlineReportingClaim' | 'StoreChangePlan' | 'WebClientHome' | 'ReportsBalances' | 'ReportsExpenses' | 'ReportsPrints' | 'StoreBuyPostage' | 'StoreMeters' | 'StoreUsers' | 'StorePaymentMethods' | 'StoreCorpContactInfo' | 'StoreMeterUsers' | 'StoreMeterSettings' | 'StoreMeterAddress' | 'StoreShippingAddresses' | 'StoreReferAFriend' | 'StoreAccountCredit' | 'StoreReorder' | 'StoreMyProfile' | 'StorePassword' | 'StoreCommPreferences' | 'StoreNetStampsLabels' | 'StoreShippingLabels' | 'StoreMailingLabels' | 'StoreScalesAndPrinters' | 'StoreFreeUSPSSupplies' | 'StoreBubbleMailers' | 'StoreShippingSupplies' | 'StoreScales' | 'StoreAveryNetStampsLabels' | 'StoreAveryMailingLabels' | 'StoreMeterContactInfo' | 'StoreEditMeterAddress' | 'StoreHome' | 'StoreAccount' | 'StoreCostCode' | 'StoreHistory' | 'StoreFaq' | 'StoreCustomerHome' | 'StoreGetAccountInfoJSon' | 'StoreSetAccountInfoJSon' | 'StoreUserCategories' | 'StoreCategory' | 'StoreUpdatePaymentMethodResubmit' | 'StoreDefaultPaymentMethods' | 'StoreSignOut' | 'CustomShipNotifyEmail' | 'HelpCenterHome' | 'MustChangePassword' | 'Contacts' | 'WebClientPreferences' | 'WebClientDefault' | 'StoreAutoBuy' | 'SetTermsGeneral' | 'UploadImage' | 'EndiciaLogin' | 'PhoneVerification' | 'CarrierSetupDHLExpress' | 'CarrierSetupUPS' | 'CarrierManagement' | 'StoreOrderHistory' | 'StoreSubscriptions' | 'StoreHardware' | 'StoreEnvelopes' | 'StoreLabels' | 'StoreClearNetStamps' | 'StoreOriginalNetStamps' | 'StoreNetStamps' | 'StoreSignIn' | 'AddPayment' | 'CarrierSetupFedEx' | 'ParcelGuard' | 'BrandedTracking' | 'RateAdvisor' | 'PPL' | 'ParcelGuardClaim' | 'ParcelGuardClaimStatus' $URLType
     * @param string $ApplicationContext
     */
    public function __construct(?string $Authenticator = null, ?\Knightar\StampsSoapClient\Type\Credentials $Credentials = null, string $URLType, string $ApplicationContext)
    {
        $this->Authenticator = $Authenticator;
        $this->Credentials = $Credentials;
        $this->URLType = $URLType;
        $this->ApplicationContext = $ApplicationContext;
    }

    /**
     * @return null | string
     */
    public function getAuthenticator() : ?string
    {
        return $this->Authenticator;
    }

    /**
     * @param null | string $Authenticator
     * @return static
     */
    public function withAuthenticator(?string $Authenticator) : static
    {
        $new = clone $this;
        $new->Authenticator = $Authenticator;

        return $new;
    }

    /**
     * @return null | \Knightar\StampsSoapClient\Type\Credentials
     */
    public function getCredentials() : ?\Knightar\StampsSoapClient\Type\Credentials
    {
        return $this->Credentials;
    }

    /**
     * @param null | \Knightar\StampsSoapClient\Type\Credentials $Credentials
     * @return static
     */
    public function withCredentials(?\Knightar\StampsSoapClient\Type\Credentials $Credentials) : static
    {
        $new = clone $this;
        $new->Credentials = $Credentials;

        return $new;
    }

    /**
     * @return 'HomePage' | 'AccountSettingsPage' | 'EditCostCodesPage' | 'OnlineReportsPage' | 'HelpPage' | 'OnlineReportingHistory' | 'OnlineReportingRefund' | 'OnlineReportingPickup' | 'OnlineReportingSCAN' | 'OnlineReportingClaim' | 'StoreChangePlan' | 'WebClientHome' | 'ReportsBalances' | 'ReportsExpenses' | 'ReportsPrints' | 'StoreBuyPostage' | 'StoreMeters' | 'StoreUsers' | 'StorePaymentMethods' | 'StoreCorpContactInfo' | 'StoreMeterUsers' | 'StoreMeterSettings' | 'StoreMeterAddress' | 'StoreShippingAddresses' | 'StoreReferAFriend' | 'StoreAccountCredit' | 'StoreReorder' | 'StoreMyProfile' | 'StorePassword' | 'StoreCommPreferences' | 'StoreNetStampsLabels' | 'StoreShippingLabels' | 'StoreMailingLabels' | 'StoreScalesAndPrinters' | 'StoreFreeUSPSSupplies' | 'StoreBubbleMailers' | 'StoreShippingSupplies' | 'StoreScales' | 'StoreAveryNetStampsLabels' | 'StoreAveryMailingLabels' | 'StoreMeterContactInfo' | 'StoreEditMeterAddress' | 'StoreHome' | 'StoreAccount' | 'StoreCostCode' | 'StoreHistory' | 'StoreFaq' | 'StoreCustomerHome' | 'StoreGetAccountInfoJSon' | 'StoreSetAccountInfoJSon' | 'StoreUserCategories' | 'StoreCategory' | 'StoreUpdatePaymentMethodResubmit' | 'StoreDefaultPaymentMethods' | 'StoreSignOut' | 'CustomShipNotifyEmail' | 'HelpCenterHome' | 'MustChangePassword' | 'Contacts' | 'WebClientPreferences' | 'WebClientDefault' | 'StoreAutoBuy' | 'SetTermsGeneral' | 'UploadImage' | 'EndiciaLogin' | 'PhoneVerification' | 'CarrierSetupDHLExpress' | 'CarrierSetupUPS' | 'CarrierManagement' | 'StoreOrderHistory' | 'StoreSubscriptions' | 'StoreHardware' | 'StoreEnvelopes' | 'StoreLabels' | 'StoreClearNetStamps' | 'StoreOriginalNetStamps' | 'StoreNetStamps' | 'StoreSignIn' | 'AddPayment' | 'CarrierSetupFedEx' | 'ParcelGuard' | 'BrandedTracking' | 'RateAdvisor' | 'PPL' | 'ParcelGuardClaim' | 'ParcelGuardClaimStatus'
     */
    public function getURLType() : string
    {
        return $this->URLType;
    }

    /**
     * @param 'HomePage' | 'AccountSettingsPage' | 'EditCostCodesPage' | 'OnlineReportsPage' | 'HelpPage' | 'OnlineReportingHistory' | 'OnlineReportingRefund' | 'OnlineReportingPickup' | 'OnlineReportingSCAN' | 'OnlineReportingClaim' | 'StoreChangePlan' | 'WebClientHome' | 'ReportsBalances' | 'ReportsExpenses' | 'ReportsPrints' | 'StoreBuyPostage' | 'StoreMeters' | 'StoreUsers' | 'StorePaymentMethods' | 'StoreCorpContactInfo' | 'StoreMeterUsers' | 'StoreMeterSettings' | 'StoreMeterAddress' | 'StoreShippingAddresses' | 'StoreReferAFriend' | 'StoreAccountCredit' | 'StoreReorder' | 'StoreMyProfile' | 'StorePassword' | 'StoreCommPreferences' | 'StoreNetStampsLabels' | 'StoreShippingLabels' | 'StoreMailingLabels' | 'StoreScalesAndPrinters' | 'StoreFreeUSPSSupplies' | 'StoreBubbleMailers' | 'StoreShippingSupplies' | 'StoreScales' | 'StoreAveryNetStampsLabels' | 'StoreAveryMailingLabels' | 'StoreMeterContactInfo' | 'StoreEditMeterAddress' | 'StoreHome' | 'StoreAccount' | 'StoreCostCode' | 'StoreHistory' | 'StoreFaq' | 'StoreCustomerHome' | 'StoreGetAccountInfoJSon' | 'StoreSetAccountInfoJSon' | 'StoreUserCategories' | 'StoreCategory' | 'StoreUpdatePaymentMethodResubmit' | 'StoreDefaultPaymentMethods' | 'StoreSignOut' | 'CustomShipNotifyEmail' | 'HelpCenterHome' | 'MustChangePassword' | 'Contacts' | 'WebClientPreferences' | 'WebClientDefault' | 'StoreAutoBuy' | 'SetTermsGeneral' | 'UploadImage' | 'EndiciaLogin' | 'PhoneVerification' | 'CarrierSetupDHLExpress' | 'CarrierSetupUPS' | 'CarrierManagement' | 'StoreOrderHistory' | 'StoreSubscriptions' | 'StoreHardware' | 'StoreEnvelopes' | 'StoreLabels' | 'StoreClearNetStamps' | 'StoreOriginalNetStamps' | 'StoreNetStamps' | 'StoreSignIn' | 'AddPayment' | 'CarrierSetupFedEx' | 'ParcelGuard' | 'BrandedTracking' | 'RateAdvisor' | 'PPL' | 'ParcelGuardClaim' | 'ParcelGuardClaimStatus' $URLType
     * @return static
     */
    public function withURLType(string $URLType) : static
    {
        $new = clone $this;
        $new->URLType = $URLType;

        return $new;
    }

    /**
     * @return string
     */
    public function getApplicationContext() : string
    {
        return $this->ApplicationContext;
    }

    /**
     * @param string $ApplicationContext
     * @return static
     */
    public function withApplicationContext(string $ApplicationContext) : static
    {
        $new = clone $this;
        $new->ApplicationContext = $ApplicationContext;

        return $new;
    }
}

