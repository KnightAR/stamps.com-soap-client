<?php

namespace Knightar\StampsSoapClient\Type;

use Phpro\SoapClient\Type\ResultInterface;

class ReprintIndiciumResponse implements ResultInterface
{
    /**
     * @var null | string
     */
    private ?string $Authenticator = null;

    /**
     * @var null | string
     */
    private ?string $IntegratorTxId = null;

    /**
     * @var null | string
     */
    private ?string $TrackingNumber = null;

    /**
     * @var null | string
     */
    private ?string $FromZipCode = null;

    /**
     * @var null | float
     */
    private ?float $Amount = null;

    /**
     * @var null | 'Unknown' | 'FirstClass' | 'Priority' | 'Express' | 'ParcelPost' | 'MediaMail' | 'BoundPrintedMatter' | 'MailClassIntlGxg' | 'MailClassIntlAirmailMBag' | 'MailClassIntlMatterForBlind' | 'LibraryMail' | 'ExpressMailInternational' | 'PriorityMailInternational' | 'FirstClassMailInternational' | 'MailClassIntlMBag' | 'MailClassIntlFirstClassParcel' | 'MailClassIntlFirstClassFlat' | 'Critical' | 'ParcelSelect' | 'DhlSMParcelsExpedited' | 'DhlSMParcelsGround' | 'DhlSMParcelPlusExpedited' | 'DhlSMParcelPlusGround' | 'DhlSMBpmExpedited' | 'DhlSMBpmGround' | 'DhlSMMarketingParcelExpedited' | 'DhlSMMarketingParcelGround' | 'StandardMailMarketingParcels' | 'AsendiaIpa' | 'AsendiaIsal' | 'AsendiaEpkt' | 'DhlGlobalmailPacketIpa' | 'DHLGlobalmailPacketIsal' | 'GlobegisticsIpa' | 'GlobegisticsIsal' | 'GlobegisticsEpkt' | 'InternationalBondedCouriersIpa' | 'InternationalBondedCouriersIsal' | 'InternationalBondedCouriersEpkt' | 'RrdIpa' | 'RrdIsal' | 'RrdEpkt' | 'UspsIpa' | 'UspsIsal' | 'UspsEpkt' | 'AsendiaGeneric' | 'GlobegisticsGeneric' | 'ScGeneric' | 'RrdGeneric' | 'GlobalPostEconomy' | 'GlobalPostPriority' | 'GlobalPostEconomySmartSaver' | 'GlobalPostPrioritySmartSaver' | 'DHLExpress' | 'FedExGround' | 'FedExHomeDelivery' | 'FedEx2Day' | 'FedExExpressSaver' | 'FedExStandardOvernight' | 'FedExPriorityOvernight' | 'FedExInternationalGround' | 'FedExInternationalEconomy' | 'FedExInternationalPriority' | 'GlobalPostPlusSmartSaver' | 'RetailGround' | 'GlobalPostPlus' | 'UPSNextDayAirEarly' | 'UPSNextDayAir' | 'UPSNextDayAirSaver' | 'UPS2ndDayAirAM' | 'UPS2ndDayAir' | 'UPS3DaySelect' | 'UPSGround' | 'UPSStandard' | 'UPSWorldwideExpress' | 'UPSWorldwideExpressPlus' | 'UPSWorldwideExpedited' | 'UPSWorldwideSaver' | 'GlobalPostFCI' | 'GlobalPostFCISS' | 'GlobalPostPMI' | 'GlobalPostPMISS' | 'GlobalPostEMI' | 'GlobalPostEMISS' | 'GlobalPostFCSS' | 'GlobalPostPSSS' | 'CanadaPostPriority' | 'CanadaPostXpressPost' | 'CanadaPostExpeditedParcel' | 'CanadaPostRegularParcel' | 'CanadaPostPriorityWorldWide' | 'CanadaPostPriorityWorldWideUSA' | 'CanadaPostXpresspostInternational' | 'CanadaPostXpresspostUSA' | 'CanadaPostExpeditedParcelUSA' | 'CanadaPostTrackedPacketInternational' | 'CanadaPostTrackedPackageUSA' | 'CanadaPostSmallPacketInternationalAir' | 'CanadaPostSmallPacketInternationalSurface' | 'CanadaPostSmallPacketUSAAir' | 'CanadaPostInternationalParcelAir' | 'CanadaPostInternationalParcelSurface' | 'FedEx2DayAM' | 'FedExFirstOvernight' | 'FedExInternationalFirst' | 'UspsReturn' | 'DhlGlobalmailPacketIpl' | 'DhlGlobalmailPacketIpr' | 'DhlGlobalmailPacketIst' | 'DhlGlobalmailParcelIdep' | 'DhlGlobalmailParcelIdeu' | 'DhlGlobalmailParcelIdpp' | 'DhlGlobalmailParcelIdpu' | 'DhlGlobalmailParcelIp' | 'DhlGlobalmailParcelIs' | 'DhlPacketInternational' | 'DhlParcelInternationalDirect' | 'DhlSMParcelExpeditedMax' | 'UPSGroundSaver' | 'GroundAdvantage'
     */
    private ?string $ServiceType = null;

    /**
     * @var null | \DateTimeInterface
     */
    private ?\DateTimeInterface $ShipDate = null;

    /**
     * @var null | \Knightar\StampsSoapClient\Type\Address
     */
    private ?\Knightar\StampsSoapClient\Type\Address $From = null;

    /**
     * @var null | \Knightar\StampsSoapClient\Type\Address
     */
    private ?\Knightar\StampsSoapClient\Type\Address $To = null;

    /**
     * @var null | string
     */
    private ?string $StampsTxId = null;

    /**
     * @var null | string
     */
    private ?string $Url = null;

    /**
     * @var null | string
     */
    private ?string $FormUrl = null;

    /**
     * @var null | \Knightar\StampsSoapClient\Type\ArrayOfBase64Binary
     */
    private ?\Knightar\StampsSoapClient\Type\ArrayOfBase64Binary $ImageData = null;

    /**
     * @var null | \Knightar\StampsSoapClient\Type\ArrayOfIndiciumData
     */
    private ?\Knightar\StampsSoapClient\Type\ArrayOfIndiciumData $IndiciaData = null;

    /**
     * @var null | int
     */
    private ?int $IssuedLabelCount = null;

    /**
     * @var null | \Knightar\StampsSoapClient\Type\ReprintIndiciumResponse
     */
    private ?\Knightar\StampsSoapClient\Type\ReprintIndiciumResponse $ReprintIndiciumResult = null;

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
     * @return null | string
     */
    public function getIntegratorTxId() : ?string
    {
        return $this->IntegratorTxId;
    }

    /**
     * @param null | string $IntegratorTxId
     * @return static
     */
    public function withIntegratorTxId(?string $IntegratorTxId) : static
    {
        $new = clone $this;
        $new->IntegratorTxId = $IntegratorTxId;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getTrackingNumber() : ?string
    {
        return $this->TrackingNumber;
    }

    /**
     * @param null | string $TrackingNumber
     * @return static
     */
    public function withTrackingNumber(?string $TrackingNumber) : static
    {
        $new = clone $this;
        $new->TrackingNumber = $TrackingNumber;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getFromZipCode() : ?string
    {
        return $this->FromZipCode;
    }

    /**
     * @param null | string $FromZipCode
     * @return static
     */
    public function withFromZipCode(?string $FromZipCode) : static
    {
        $new = clone $this;
        $new->FromZipCode = $FromZipCode;

        return $new;
    }

    /**
     * @return null | float
     */
    public function getAmount() : ?float
    {
        return $this->Amount;
    }

    /**
     * @param null | float $Amount
     * @return static
     */
    public function withAmount(?float $Amount) : static
    {
        $new = clone $this;
        $new->Amount = $Amount;

        return $new;
    }

    /**
     * @return null | 'Unknown' | 'FirstClass' | 'Priority' | 'Express' | 'ParcelPost' | 'MediaMail' | 'BoundPrintedMatter' | 'MailClassIntlGxg' | 'MailClassIntlAirmailMBag' | 'MailClassIntlMatterForBlind' | 'LibraryMail' | 'ExpressMailInternational' | 'PriorityMailInternational' | 'FirstClassMailInternational' | 'MailClassIntlMBag' | 'MailClassIntlFirstClassParcel' | 'MailClassIntlFirstClassFlat' | 'Critical' | 'ParcelSelect' | 'DhlSMParcelsExpedited' | 'DhlSMParcelsGround' | 'DhlSMParcelPlusExpedited' | 'DhlSMParcelPlusGround' | 'DhlSMBpmExpedited' | 'DhlSMBpmGround' | 'DhlSMMarketingParcelExpedited' | 'DhlSMMarketingParcelGround' | 'StandardMailMarketingParcels' | 'AsendiaIpa' | 'AsendiaIsal' | 'AsendiaEpkt' | 'DhlGlobalmailPacketIpa' | 'DHLGlobalmailPacketIsal' | 'GlobegisticsIpa' | 'GlobegisticsIsal' | 'GlobegisticsEpkt' | 'InternationalBondedCouriersIpa' | 'InternationalBondedCouriersIsal' | 'InternationalBondedCouriersEpkt' | 'RrdIpa' | 'RrdIsal' | 'RrdEpkt' | 'UspsIpa' | 'UspsIsal' | 'UspsEpkt' | 'AsendiaGeneric' | 'GlobegisticsGeneric' | 'ScGeneric' | 'RrdGeneric' | 'GlobalPostEconomy' | 'GlobalPostPriority' | 'GlobalPostEconomySmartSaver' | 'GlobalPostPrioritySmartSaver' | 'DHLExpress' | 'FedExGround' | 'FedExHomeDelivery' | 'FedEx2Day' | 'FedExExpressSaver' | 'FedExStandardOvernight' | 'FedExPriorityOvernight' | 'FedExInternationalGround' | 'FedExInternationalEconomy' | 'FedExInternationalPriority' | 'GlobalPostPlusSmartSaver' | 'RetailGround' | 'GlobalPostPlus' | 'UPSNextDayAirEarly' | 'UPSNextDayAir' | 'UPSNextDayAirSaver' | 'UPS2ndDayAirAM' | 'UPS2ndDayAir' | 'UPS3DaySelect' | 'UPSGround' | 'UPSStandard' | 'UPSWorldwideExpress' | 'UPSWorldwideExpressPlus' | 'UPSWorldwideExpedited' | 'UPSWorldwideSaver' | 'GlobalPostFCI' | 'GlobalPostFCISS' | 'GlobalPostPMI' | 'GlobalPostPMISS' | 'GlobalPostEMI' | 'GlobalPostEMISS' | 'GlobalPostFCSS' | 'GlobalPostPSSS' | 'CanadaPostPriority' | 'CanadaPostXpressPost' | 'CanadaPostExpeditedParcel' | 'CanadaPostRegularParcel' | 'CanadaPostPriorityWorldWide' | 'CanadaPostPriorityWorldWideUSA' | 'CanadaPostXpresspostInternational' | 'CanadaPostXpresspostUSA' | 'CanadaPostExpeditedParcelUSA' | 'CanadaPostTrackedPacketInternational' | 'CanadaPostTrackedPackageUSA' | 'CanadaPostSmallPacketInternationalAir' | 'CanadaPostSmallPacketInternationalSurface' | 'CanadaPostSmallPacketUSAAir' | 'CanadaPostInternationalParcelAir' | 'CanadaPostInternationalParcelSurface' | 'FedEx2DayAM' | 'FedExFirstOvernight' | 'FedExInternationalFirst' | 'UspsReturn' | 'DhlGlobalmailPacketIpl' | 'DhlGlobalmailPacketIpr' | 'DhlGlobalmailPacketIst' | 'DhlGlobalmailParcelIdep' | 'DhlGlobalmailParcelIdeu' | 'DhlGlobalmailParcelIdpp' | 'DhlGlobalmailParcelIdpu' | 'DhlGlobalmailParcelIp' | 'DhlGlobalmailParcelIs' | 'DhlPacketInternational' | 'DhlParcelInternationalDirect' | 'DhlSMParcelExpeditedMax' | 'UPSGroundSaver' | 'GroundAdvantage'
     */
    public function getServiceType() : ?string
    {
        return $this->ServiceType;
    }

    /**
     * @param null | 'Unknown' | 'FirstClass' | 'Priority' | 'Express' | 'ParcelPost' | 'MediaMail' | 'BoundPrintedMatter' | 'MailClassIntlGxg' | 'MailClassIntlAirmailMBag' | 'MailClassIntlMatterForBlind' | 'LibraryMail' | 'ExpressMailInternational' | 'PriorityMailInternational' | 'FirstClassMailInternational' | 'MailClassIntlMBag' | 'MailClassIntlFirstClassParcel' | 'MailClassIntlFirstClassFlat' | 'Critical' | 'ParcelSelect' | 'DhlSMParcelsExpedited' | 'DhlSMParcelsGround' | 'DhlSMParcelPlusExpedited' | 'DhlSMParcelPlusGround' | 'DhlSMBpmExpedited' | 'DhlSMBpmGround' | 'DhlSMMarketingParcelExpedited' | 'DhlSMMarketingParcelGround' | 'StandardMailMarketingParcels' | 'AsendiaIpa' | 'AsendiaIsal' | 'AsendiaEpkt' | 'DhlGlobalmailPacketIpa' | 'DHLGlobalmailPacketIsal' | 'GlobegisticsIpa' | 'GlobegisticsIsal' | 'GlobegisticsEpkt' | 'InternationalBondedCouriersIpa' | 'InternationalBondedCouriersIsal' | 'InternationalBondedCouriersEpkt' | 'RrdIpa' | 'RrdIsal' | 'RrdEpkt' | 'UspsIpa' | 'UspsIsal' | 'UspsEpkt' | 'AsendiaGeneric' | 'GlobegisticsGeneric' | 'ScGeneric' | 'RrdGeneric' | 'GlobalPostEconomy' | 'GlobalPostPriority' | 'GlobalPostEconomySmartSaver' | 'GlobalPostPrioritySmartSaver' | 'DHLExpress' | 'FedExGround' | 'FedExHomeDelivery' | 'FedEx2Day' | 'FedExExpressSaver' | 'FedExStandardOvernight' | 'FedExPriorityOvernight' | 'FedExInternationalGround' | 'FedExInternationalEconomy' | 'FedExInternationalPriority' | 'GlobalPostPlusSmartSaver' | 'RetailGround' | 'GlobalPostPlus' | 'UPSNextDayAirEarly' | 'UPSNextDayAir' | 'UPSNextDayAirSaver' | 'UPS2ndDayAirAM' | 'UPS2ndDayAir' | 'UPS3DaySelect' | 'UPSGround' | 'UPSStandard' | 'UPSWorldwideExpress' | 'UPSWorldwideExpressPlus' | 'UPSWorldwideExpedited' | 'UPSWorldwideSaver' | 'GlobalPostFCI' | 'GlobalPostFCISS' | 'GlobalPostPMI' | 'GlobalPostPMISS' | 'GlobalPostEMI' | 'GlobalPostEMISS' | 'GlobalPostFCSS' | 'GlobalPostPSSS' | 'CanadaPostPriority' | 'CanadaPostXpressPost' | 'CanadaPostExpeditedParcel' | 'CanadaPostRegularParcel' | 'CanadaPostPriorityWorldWide' | 'CanadaPostPriorityWorldWideUSA' | 'CanadaPostXpresspostInternational' | 'CanadaPostXpresspostUSA' | 'CanadaPostExpeditedParcelUSA' | 'CanadaPostTrackedPacketInternational' | 'CanadaPostTrackedPackageUSA' | 'CanadaPostSmallPacketInternationalAir' | 'CanadaPostSmallPacketInternationalSurface' | 'CanadaPostSmallPacketUSAAir' | 'CanadaPostInternationalParcelAir' | 'CanadaPostInternationalParcelSurface' | 'FedEx2DayAM' | 'FedExFirstOvernight' | 'FedExInternationalFirst' | 'UspsReturn' | 'DhlGlobalmailPacketIpl' | 'DhlGlobalmailPacketIpr' | 'DhlGlobalmailPacketIst' | 'DhlGlobalmailParcelIdep' | 'DhlGlobalmailParcelIdeu' | 'DhlGlobalmailParcelIdpp' | 'DhlGlobalmailParcelIdpu' | 'DhlGlobalmailParcelIp' | 'DhlGlobalmailParcelIs' | 'DhlPacketInternational' | 'DhlParcelInternationalDirect' | 'DhlSMParcelExpeditedMax' | 'UPSGroundSaver' | 'GroundAdvantage' $ServiceType
     * @return static
     */
    public function withServiceType(?string $ServiceType) : static
    {
        $new = clone $this;
        $new->ServiceType = $ServiceType;

        return $new;
    }

    /**
     * @return null | \DateTimeInterface
     */
    public function getShipDate() : ?\DateTimeInterface
    {
        return $this->ShipDate;
    }

    /**
     * @param null | \DateTimeInterface $ShipDate
     * @return static
     */
    public function withShipDate(?\DateTimeInterface $ShipDate) : static
    {
        $new = clone $this;
        $new->ShipDate = $ShipDate;

        return $new;
    }

    /**
     * @return null | \Knightar\StampsSoapClient\Type\Address
     */
    public function getFrom() : ?\Knightar\StampsSoapClient\Type\Address
    {
        return $this->From;
    }

    /**
     * @param null | \Knightar\StampsSoapClient\Type\Address $From
     * @return static
     */
    public function withFrom(?\Knightar\StampsSoapClient\Type\Address $From) : static
    {
        $new = clone $this;
        $new->From = $From;

        return $new;
    }

    /**
     * @return null | \Knightar\StampsSoapClient\Type\Address
     */
    public function getTo() : ?\Knightar\StampsSoapClient\Type\Address
    {
        return $this->To;
    }

    /**
     * @param null | \Knightar\StampsSoapClient\Type\Address $To
     * @return static
     */
    public function withTo(?\Knightar\StampsSoapClient\Type\Address $To) : static
    {
        $new = clone $this;
        $new->To = $To;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getStampsTxId() : ?string
    {
        return $this->StampsTxId;
    }

    /**
     * @param null | string $StampsTxId
     * @return static
     */
    public function withStampsTxId(?string $StampsTxId) : static
    {
        $new = clone $this;
        $new->StampsTxId = $StampsTxId;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getUrl() : ?string
    {
        return $this->Url;
    }

    /**
     * @param null | string $Url
     * @return static
     */
    public function withUrl(?string $Url) : static
    {
        $new = clone $this;
        $new->Url = $Url;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getFormUrl() : ?string
    {
        return $this->FormUrl;
    }

    /**
     * @param null | string $FormUrl
     * @return static
     */
    public function withFormUrl(?string $FormUrl) : static
    {
        $new = clone $this;
        $new->FormUrl = $FormUrl;

        return $new;
    }

    /**
     * @return null | \Knightar\StampsSoapClient\Type\ArrayOfBase64Binary
     */
    public function getImageData() : ?\Knightar\StampsSoapClient\Type\ArrayOfBase64Binary
    {
        return $this->ImageData;
    }

    /**
     * @param null | \Knightar\StampsSoapClient\Type\ArrayOfBase64Binary $ImageData
     * @return static
     */
    public function withImageData(?\Knightar\StampsSoapClient\Type\ArrayOfBase64Binary $ImageData) : static
    {
        $new = clone $this;
        $new->ImageData = $ImageData;

        return $new;
    }

    /**
     * @return null | \Knightar\StampsSoapClient\Type\ArrayOfIndiciumData
     */
    public function getIndiciaData() : ?\Knightar\StampsSoapClient\Type\ArrayOfIndiciumData
    {
        return $this->IndiciaData;
    }

    /**
     * @param null | \Knightar\StampsSoapClient\Type\ArrayOfIndiciumData $IndiciaData
     * @return static
     */
    public function withIndiciaData(?\Knightar\StampsSoapClient\Type\ArrayOfIndiciumData $IndiciaData) : static
    {
        $new = clone $this;
        $new->IndiciaData = $IndiciaData;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getIssuedLabelCount() : ?int
    {
        return $this->IssuedLabelCount;
    }

    /**
     * @param null | int $IssuedLabelCount
     * @return static
     */
    public function withIssuedLabelCount(?int $IssuedLabelCount) : static
    {
        $new = clone $this;
        $new->IssuedLabelCount = $IssuedLabelCount;

        return $new;
    }

    /**
     * @return null | \Knightar\StampsSoapClient\Type\ReprintIndiciumResponse
     */
    public function getReprintIndiciumResult() : ?\Knightar\StampsSoapClient\Type\ReprintIndiciumResponse
    {
        return $this->ReprintIndiciumResult;
    }

    /**
     * @param null | \Knightar\StampsSoapClient\Type\ReprintIndiciumResponse $ReprintIndiciumResult
     * @return static
     */
    public function withReprintIndiciumResult(?\Knightar\StampsSoapClient\Type\ReprintIndiciumResponse $ReprintIndiciumResult) : static
    {
        $new = clone $this;
        $new->ReprintIndiciumResult = $ReprintIndiciumResult;

        return $new;
    }
}

