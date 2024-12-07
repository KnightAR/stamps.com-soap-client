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

    const URL_TYPE_HOME_PAGE = 'HomePage';
    const URL_TYPE_ACCOUNT_SETTINGS_PAGE = 'AccountSettingsPage';
    const URL_TYPE_EDIT_COST_CODES_PAGE = 'EditCostCodesPage';
    const URL_TYPE_ONLINE_REPORTS_PAGE = 'OnlineReportsPage';
    const URL_TYPE_HELP_PAGE = 'HelpPage';
    const URL_TYPE_ONLINE_REPORTING_HISTORY = 'OnlineReportingHistory';
    const URL_TYPE_ONLINE_REPORTING_REFUND = 'OnlineReportingRefund';
    const URL_TYPE_ONLINE_REPORTING_PICKUP = 'OnlineReportingPickup';
    const URL_TYPE_ONLINE_REPORTING_SCAN = 'OnlineReportingSCAN';
    const URL_TYPE_ONLINE_REPORTING_CLAIM = 'OnlineReportingClaim';
    const URL_TYPE_STORE_CHANGE_PLAN = 'StoreChangePlan';
    const URL_TYPE_WEB_CLIENT_HOME = 'WebClientHome';
    const URL_TYPE_REPORTS_BALANCES = 'ReportsBalances';
    const URL_TYPE_REPORTS_EXPENSES = 'ReportsExpenses';
    const URL_TYPE_REPORTS_PRINTS = 'ReportsPrints';
    const URL_TYPE_STORE_BUY_POSTAGE = 'StoreBuyPostage';
    const URL_TYPE_STORE_METERS = 'StoreMeters';
    const URL_TYPE_STORE_USERS = 'StoreUsers';
    const URL_TYPE_STORE_PAYMENT_METHODS = 'StorePaymentMethods';
    const URL_TYPE_STORE_CORP_CONTACT_INFO = 'StoreCorpContactInfo';
    const URL_TYPE_STORE_METER_USERS = 'StoreMeterUsers';
    const URL_TYPE_STORE_METER_SETTINGS = 'StoreMeterSettings';
    const URL_TYPE_STORE_METER_ADDRESS = 'StoreMeterAddress';
    const URL_TYPE_STORE_SHIPPING_ADDRESSES = 'StoreShippingAddresses';
    const URL_TYPE_STORE_REFER_A_FRIEND = 'StoreReferAFriend';
    const URL_TYPE_STORE_ACCOUNT_CREDIT = 'StoreAccountCredit';
    const URL_TYPE_STORE_REORDER = 'StoreReorder';
    const URL_TYPE_STORE_MY_PROFILE = 'StoreMyProfile';
    const URL_TYPE_STORE_PASSWORD = 'StorePassword';
    const URL_TYPE_STORE_COMM_PREFERENCES = 'StoreCommPreferences';
    const URL_TYPE_STORE_NET_STAMPS_LABELS = 'StoreNetStampsLabels';
    const URL_TYPE_STORE_SHIPPING_LABELS = 'StoreShippingLabels';
    const URL_TYPE_STORE_MAILING_LABELS = 'StoreMailingLabels';
    const URL_TYPE_STORE_SCALES_AND_PRINTERS = 'StoreScalesAndPrinters';
    const URL_TYPE_STORE_FREE_USPS_SUPPLIES = 'StoreFreeUSPSSupplies';
    const URL_TYPE_STORE_BUBBLE_MAILERS = 'StoreBubbleMailers';
    const URL_TYPE_STORE_SHIPPING_SUPPLIES = 'StoreShippingSupplies';
    const URL_TYPE_STORE_SCALES = 'StoreScales';
    const URL_TYPE_STORE_AVERY_NET_STAMPS_LABELS = 'StoreAveryNetStampsLabels';
    const URL_TYPE_STORE_AVERY_MAILING_LABELS = 'StoreAveryMailingLabels';
    const URL_TYPE_STORE_METER_CONTACT_INFO = 'StoreMeterContactInfo';
    const URL_TYPE_STORE_EDIT_METER_ADDRESS = 'StoreEditMeterAddress';
    const URL_TYPE_STORE_HOME = 'StoreHome';
    const URL_TYPE_STORE_ACCOUNT = 'StoreAccount';
    const URL_TYPE_STORE_COST_CODE = 'StoreCostCode';
    const URL_TYPE_STORE_HISTORY = 'StoreHistory';
    const URL_TYPE_STORE_FAQ = 'StoreFaq';
    const URL_TYPE_STORE_CUSTOMER_HOME = 'StoreCustomerHome';
    const URL_TYPE_STORE_GET_ACCOUNT_INFO_JSON = 'StoreGetAccountInfoJSon';
    const URL_TYPE_STORE_SET_ACCOUNT_INFO_JSON = 'StoreSetAccountInfoJSon';
    const URL_TYPE_STORE_USER_CATEGORIES = 'StoreUserCategories';
    const URL_TYPE_STORE_CATEGORY = 'StoreCategory';
    const URL_TYPE_STORE_UPDATE_PAYMENT_METHOD_RESUBMIT = 'StoreUpdatePaymentMethodResubmit';
    const URL_TYPE_STORE_DEFAULT_PAYMENT_METHODS = 'StoreDefaultPaymentMethods';
    const URL_TYPE_STORE_SIGN_OUT = 'StoreSignOut';
    const URL_TYPE_CUSTOM_SHIP_NOTIFY_EMAIL = 'CustomShipNotifyEmail';
    const URL_TYPE_HELP_CENTER_HOME = 'HelpCenterHome';
    const URL_TYPE_MUST_CHANGE_PASSWORD = 'MustChangePassword';
    const URL_TYPE_CONTACTS = 'Contacts';
    const URL_TYPE_WEB_CLIENT_PREFERENCES = 'WebClientPreferences';
    const URL_TYPE_WEB_CLIENT_DEFAULT = 'WebClientDefault';
    const URL_TYPE_STORE_AUTO_BUY = 'StoreAutoBuy';
    const URL_TYPE_SET_TERMS_GENERAL = 'SetTermsGeneral';
    const URL_TYPE_UPLOAD_IMAGE = 'UploadImage';
    const URL_TYPE_ENDICIA_LOGIN = 'EndiciaLogin';
    const URL_TYPE_PHONE_VERIFICATION = 'PhoneVerification';
    const URL_TYPE_CARRIER_SETUP_DHL_EXPRESS = 'CarrierSetupDHLExpress';
    const URL_TYPE_CARRIER_SETUP_UPS = 'CarrierSetupUPS';
    const URL_TYPE_CARRIER_MANAGEMENT = 'CarrierManagement';
    const URL_TYPE_STORE_ORDER_HISTORY = 'StoreOrderHistory';
    const URL_TYPE_STORE_SUBSCRIPTIONS = 'StoreSubscriptions';
    const URL_TYPE_STORE_HARDWARE = 'StoreHardware';
    const URL_TYPE_STORE_ENVELOPES = 'StoreEnvelopes';
    const URL_TYPE_STORE_LABELS = 'StoreLabels';
    const URL_TYPE_STORE_CLEAR_NET_STAMPS = 'StoreClearNetStamps';
    const URL_TYPE_STORE_ORIGINAL_NET_STAMPS = 'StoreOriginalNetStamps';
    const URL_TYPE_STORE_NET_STAMPS = 'StoreNetStamps';
    const URL_TYPE_STORE_SIGN_IN = 'StoreSignIn';
    const URL_TYPE_ADD_PAYMENT = 'AddPayment';
    const URL_TYPE_CARRIER_SETUP_FEDEX = 'CarrierSetupFedEx';
    const URL_TYPE_PARCEL_GUARD = 'ParcelGuard';
    const URL_TYPE_BRANDED_TRACKING = 'BrandedTracking';
    const URL_TYPE_RATE_ADVISOR = 'RateAdvisor';
    const URL_TYPE_PPL = 'PPL';
    const URL_TYPE_PARCEL_GUARD_CLAIM = 'ParcelGuardClaim';
    const URL_TYPE_PARCEL_GUARD_CLAIM_STATUS = 'ParcelGuardClaimStatus';

    /**
     * Constructor
     *
     * @param string $URLType
     * @param string $ApplicationContext
     * @param null | string $Authenticator
     * @param null | \Knightar\StampsSoapClient\Type\Credentials $Credentials
     */
    public function __construct(
        string                                       $URLType,
        string                                       $ApplicationContext,
        ?string                                      $Authenticator = null,
        ?\Knightar\StampsSoapClient\Type\Credentials $Credentials = null
    )
    {
        $this->URLType = $URLType;
        $this->ApplicationContext = $ApplicationContext;
        $this->Authenticator = $Authenticator;
        $this->Credentials = $Credentials;
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

