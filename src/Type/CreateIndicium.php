<?php

namespace Knightar\StampsSoapClient\Type;

use Phpro\SoapClient\Type\RequestInterface;

class CreateIndicium implements RequestInterface
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
     * @var string
     */
    private string $IntegratorTxID;

    /**
     * @var null | string
     */
    private ?string $TrackingNumber = null;

    /**
     * @var \Knightar\StampsSoapClient\Type\RateV46
     */
    private \Knightar\StampsSoapClient\Type\RateV46 $Rate;

    /**
     * @var null | \Knightar\StampsSoapClient\Type\Address
     */
    private ?\Knightar\StampsSoapClient\Type\Address $ReturnTo = null;

    /**
     * @var null | string
     */
    private ?string $CustomerID = null;

    /**
     * @var null | \Knightar\StampsSoapClient\Type\CustomsV8
     */
    private ?\Knightar\StampsSoapClient\Type\CustomsV8 $Customs = null;

    /**
     * @var null | bool
     */
    private ?bool $SampleOnly = null;

    /**
     * @var null | 'Normal' | 'NoPostage'
     */
    private ?string $PostageMode = null;

    /**
     * @var null | 'Auto' | 'Png' | 'Gif' | 'Pdf' | 'Epl' | 'Jpg' | 'PrintOncePdf' | 'EncryptedPngUrl' | 'Zpl' | 'AZpl' | 'BZpl' | 'Bmp' | 'BmpMonochrome' | 'PngMonochrome' | 'JpgMonochrome' | 'GifMonochrome'
     */
    private ?string $ImageType = null;

    /**
     * @var null | 'Default' | 'High'
     */
    private ?string $EltronPrinterDPIType = null;

    /**
     * @var null | string
     */
    private ?string $memo = null;

    /**
     * @var null | int
     */
    private ?int $cost_code_id = null;

    /**
     * @var null | bool
     */
    private ?bool $deliveryNotification = null;

    /**
     * @var null | \Knightar\StampsSoapClient\Type\ShipmentNotification
     */
    private ?\Knightar\StampsSoapClient\Type\ShipmentNotification $ShipmentNotification = null;

    /**
     * @var null | int
     */
    private ?int $rotationDegrees = null;

    /**
     * @var null | int
     */
    private ?int $horizontalOffset = null;

    /**
     * @var null | int
     */
    private ?int $verticalOffset = null;

    /**
     * @var null | int
     */
    private ?int $printDensity = null;

    /**
     * @var null | bool
     */
    private ?bool $printMemo = null;

    /**
     * @var null | bool
     */
    private ?bool $printInstructions = null;

    /**
     * @var null | bool
     */
    private ?bool $requestPostageHash = null;

    /**
     * @var null | 'Undefined' | 'Return' | 'Abandon' | 'Redirect'
     */
    private ?string $nonDeliveryOption = null;

    /**
     * @var null | \Knightar\StampsSoapClient\Type\Address
     */
    private ?\Knightar\StampsSoapClient\Type\Address $RedirectTo = null;

    /**
     * @var null | string
     */
    private ?string $OutboundTransactionID = null;

    /**
     * @var null | string
     */
    private ?string $OriginalPostageHash = null;

    /**
     * @var null | bool
     */
    private ?bool $ReturnImageData = null;

    /**
     * @var null | string
     */
    private ?string $InternalTransactionNumber = null;

    /**
     * @var null | 'Default' | 'Letter85x11' | 'LabelSize'
     */
    private ?string $PaperSize = null;

    /**
     * @var null | \Knightar\StampsSoapClient\Type\LabelRecipientInfo
     */
    private ?\Knightar\StampsSoapClient\Type\LabelRecipientInfo $EmailLabelTo = null;

    /**
     * @var null | bool
     */
    private ?bool $PayOnPrint = null;

    /**
     * @var null | int
     */
    private ?int $ReturnLabelExpirationDays = null;

    /**
     * @var null | 'ImageDpiDefault' | 'ImageDpi200' | 'ImageDpi300' | 'ImageDpi203' | 'ImageDpi96' | 'ImageDpi150'
     */
    private ?string $ImageDpi = null;

    /**
     * @var null | string
     */
    private ?string $RateToken = null;

    /**
     * @var null | string
     */
    private ?string $OrderId = null;

    /**
     * @var null | bool
     */
    private ?bool $BypassCleanseAddress = null;

    /**
     * @var null | int
     */
    private ?int $ImageId = null;

    /**
     * @var null | string
     */
    private ?string $Reference1 = null;

    /**
     * @var null | string
     */
    private ?string $Reference2 = null;

    /**
     * @var null | string
     */
    private ?string $Reference3 = null;

    /**
     * @var null | string
     */
    private ?string $Reference4 = null;

    /**
     * @var null | bool
     */
    private ?bool $ReturnIndiciumData = null;

    /**
     * @var null | \Knightar\StampsSoapClient\Type\ExtendedPostageInfoV1
     */
    private ?\Knightar\StampsSoapClient\Type\ExtendedPostageInfoV1 $ExtendedPostageInfo = null;

    /**
     * @var null | 'Unknown' | 'MarketingMail' | 'Periodicals' | 'NewsPeriodicals' | 'BoundMedia' | 'ParcelSelect' | 'OtherPackageService'
     */
    private ?string $EnclosedServiceType = null;

    /**
     * @var null | 'Unknown' | 'Letters' | 'Flats' | 'Irregular Parcels' | 'Machinable Parcels' | 'Non-Machinable Parcels'
     */
    private ?string $EnclosedPackageType = null;

    /**
     * @var null | \Knightar\StampsSoapClient\Type\OrderDetails
     */
    private ?\Knightar\StampsSoapClient\Type\OrderDetails $OrderDetails = null;

    /**
     * @var null | string
     */
    private ?string $BrandingId = null;

    /**
     * @var null | string
     */
    private ?string $NotificationSettingId = null;

    /**
     * @var null | string
     */
    private ?string $GroupCode = null;

    /**
     * @var null | string
     */
    private ?string $Description = null;

    /**
     * Constructor
     *
     * @param string $IntegratorTxID
     * @param \Knightar\StampsSoapClient\Type\RateV46 $Rate
     * @param null | string $TrackingNumber
     * @param null | \Knightar\StampsSoapClient\Type\Address $ReturnTo
     * @param null | string $CustomerID
     * @param null | \Knightar\StampsSoapClient\Type\CustomsV8 $Customs
     * @param null | bool $SampleOnly
     * @param null | string $memo
     * @param null | int $cost_code_id
     * @param null | bool $deliveryNotification
     * @param null | \Knightar\StampsSoapClient\Type\ShipmentNotification $ShipmentNotification
     * @param null | int $rotationDegrees
     * @param null | int $horizontalOffset
     * @param null | int $verticalOffset
     * @param null | int $printDensity
     * @param null | bool $printMemo
     * @param null | bool $printInstructions
     * @param null | bool $requestPostageHash
     * @param null | \Knightar\StampsSoapClient\Type\Address $RedirectTo
     * @param null | string $OutboundTransactionID
     * @param null | string $OriginalPostageHash
     * @param null | bool $ReturnImageData
     * @param null | string $InternalTransactionNumber
     * @param null | \Knightar\StampsSoapClient\Type\LabelRecipientInfo $EmailLabelTo
     * @param null | bool $PayOnPrint
     * @param null | int $ReturnLabelExpirationDays
     * @param null | string $RateToken
     * @param null | string $OrderId
     * @param null | bool $BypassCleanseAddress
     * @param null | int $ImageId
     * @param null | string $Reference1
     * @param null | string $Reference2
     * @param null | string $Reference3
     * @param null | string $Reference4
     * @param null | bool $ReturnIndiciumData
     * @param null | \Knightar\StampsSoapClient\Type\ExtendedPostageInfoV1 $ExtendedPostageInfo
     * @param null | \Knightar\StampsSoapClient\Type\OrderDetails $OrderDetails
     * @param null | string $BrandingId
     * @param null | string $NotificationSettingId
     * @param null | string $GroupCode
     * @param null | string $Description
     * @param null | 'Normal' | 'NoPostage' $PostageMode
     * @param null | 'Auto' | 'Png' | 'Gif' | 'Pdf' | 'Epl' | 'Jpg' | 'PrintOncePdf' | 'EncryptedPngUrl' | 'Zpl' | 'AZpl' | 'BZpl' | 'Bmp' | 'BmpMonochrome' | 'PngMonochrome' | 'JpgMonochrome' | 'GifMonochrome' $ImageType
     * @param null | 'Default' | 'High' $EltronPrinterDPIType
     * @param null | 'Undefined' | 'Return' | 'Abandon' | 'Redirect' $nonDeliveryOption
     * @param null | 'Default' | 'Letter85x11' | 'LabelSize' $PaperSize
     * @param null | 'ImageDpiDefault' | 'ImageDpi200' | 'ImageDpi300' | 'ImageDpi203' | 'ImageDpi96' | 'ImageDpi150' $ImageDpi
     * @param null | 'Unknown' | 'MarketingMail' | 'Periodicals' | 'NewsPeriodicals' | 'BoundMedia' | 'ParcelSelect' | 'OtherPackageService' $EnclosedServiceType
     * @param null | 'Unknown' | 'Letters' | 'Flats' | 'Irregular Parcels' | 'Machinable Parcels' | 'Non-Machinable Parcels' $EnclosedPackageType
     * @param null | string $Authenticator
     * @param null | \Knightar\StampsSoapClient\Type\Credentials $Credentials
     */
    public function __construct(
        string                                                 $IntegratorTxID,
        \Knightar\StampsSoapClient\Type\RateV46                $Rate,
        ?string                                                $TrackingNumber = null,
        ?\Knightar\StampsSoapClient\Type\Address               $ReturnTo = null,
        ?string                                                $CustomerID = null,
        ?\Knightar\StampsSoapClient\Type\CustomsV8             $Customs = null,
        ?bool                                                  $SampleOnly = null,
        ?string                                                $memo = null,
        ?int                                                   $cost_code_id = null,
        ?bool                                                  $deliveryNotification = null,
        ?\Knightar\StampsSoapClient\Type\ShipmentNotification  $ShipmentNotification = null,
        ?int                                                   $rotationDegrees = null,
        ?int                                                   $horizontalOffset = null,
        ?int                                                   $verticalOffset = null,
        ?int                                                   $printDensity = null,
        ?bool                                                  $printMemo = null,
        ?bool                                                  $printInstructions = null,
        ?bool                                                  $requestPostageHash = null,
        ?\Knightar\StampsSoapClient\Type\Address               $RedirectTo = null,
        ?string                                                $OutboundTransactionID = null,
        ?string                                                $OriginalPostageHash = null,
        ?bool                                                  $ReturnImageData = null,
        ?string                                                $InternalTransactionNumber = null,
        ?\Knightar\StampsSoapClient\Type\LabelRecipientInfo    $EmailLabelTo = null,
        ?bool                                                  $PayOnPrint = null,
        ?int                                                   $ReturnLabelExpirationDays = null,
        ?string                                                $RateToken = null,
        ?string                                                $OrderId = null,
        ?bool                                                  $BypassCleanseAddress = null,
        ?int                                                   $ImageId = null,
        ?string                                                $Reference1 = null,
        ?string                                                $Reference2 = null,
        ?string                                                $Reference3 = null,
        ?string                                                $Reference4 = null,
        ?bool                                                  $ReturnIndiciumData = null,
        ?\Knightar\StampsSoapClient\Type\ExtendedPostageInfoV1 $ExtendedPostageInfo = null,
        ?\Knightar\StampsSoapClient\Type\OrderDetails          $OrderDetails = null,
        ?string                                                $BrandingId = null,
        ?string                                                $NotificationSettingId = null,
        ?string                                                $GroupCode = null,
        ?string                                                $Description = null,
        ?string                                                $PostageMode = 'Normal',
        ?string                                                $ImageType = 'Auto',
        ?string                                                $EltronPrinterDPIType = 'Default',
        ?string                                                $nonDeliveryOption = 'Undefined',
        ?string                                                $PaperSize = 'Default',
        ?string                                                $ImageDpi = 'ImageDpiDefault',
        ?string                                                $EnclosedServiceType = 'Unknown',
        ?string                                                $EnclosedPackageType = 'Unknown',
        ?string                                                $Authenticator = null,
        ?\Knightar\StampsSoapClient\Type\Credentials           $Credentials = null,
    )
    {
        $this->Authenticator = $Authenticator;
        $this->Credentials = $Credentials;
        $this->IntegratorTxID = $IntegratorTxID;
        $this->TrackingNumber = $TrackingNumber;
        $this->Rate = $Rate;
        $this->ReturnTo = $ReturnTo;
        $this->CustomerID = $CustomerID;
        $this->Customs = $Customs;
        $this->SampleOnly = $SampleOnly;
        $this->PostageMode = $PostageMode;
        $this->ImageType = $ImageType;
        $this->EltronPrinterDPIType = $EltronPrinterDPIType;
        $this->memo = $memo;
        $this->cost_code_id = $cost_code_id;
        $this->deliveryNotification = $deliveryNotification;
        $this->ShipmentNotification = $ShipmentNotification;
        $this->rotationDegrees = $rotationDegrees;
        $this->horizontalOffset = $horizontalOffset;
        $this->verticalOffset = $verticalOffset;
        $this->printDensity = $printDensity;
        $this->printMemo = $printMemo;
        $this->printInstructions = $printInstructions;
        $this->requestPostageHash = $requestPostageHash;
        $this->nonDeliveryOption = $nonDeliveryOption;
        $this->RedirectTo = $RedirectTo;
        $this->OutboundTransactionID = $OutboundTransactionID;
        $this->OriginalPostageHash = $OriginalPostageHash;
        $this->ReturnImageData = $ReturnImageData;
        $this->InternalTransactionNumber = $InternalTransactionNumber;
        $this->PaperSize = $PaperSize;
        $this->EmailLabelTo = $EmailLabelTo;
        $this->PayOnPrint = $PayOnPrint;
        $this->ReturnLabelExpirationDays = $ReturnLabelExpirationDays;
        $this->ImageDpi = $ImageDpi;
        $this->RateToken = $RateToken;
        $this->OrderId = $OrderId;
        $this->BypassCleanseAddress = $BypassCleanseAddress;
        $this->ImageId = $ImageId;
        $this->Reference1 = $Reference1;
        $this->Reference2 = $Reference2;
        $this->Reference3 = $Reference3;
        $this->Reference4 = $Reference4;
        $this->ReturnIndiciumData = $ReturnIndiciumData;
        $this->ExtendedPostageInfo = $ExtendedPostageInfo;
        $this->EnclosedServiceType = $EnclosedServiceType;
        $this->EnclosedPackageType = $EnclosedPackageType;
        $this->OrderDetails = $OrderDetails;
        $this->BrandingId = $BrandingId;
        $this->NotificationSettingId = $NotificationSettingId;
        $this->GroupCode = $GroupCode;
        $this->Description = $Description;
    }

    const POSTAGE_MODE_NORMAL = 'Normal';
    const POSTAGE_MODE_NOPOSTAGE = 'NoPostage';

    const IMAGE_TYPE_AUTO = 'Auto';
    const IMAGE_TYPE_PNG = 'Png';
    const IMAGE_TYPE_GIF = 'Gif';
    const IMAGE_TYPE_PDF = 'Pdf';
    const IMAGE_TYPE_EPL = 'Epl';
    const IMAGE_TYPE_JPG = 'Jpg';
    const IMAGE_TYPE_PRINTONCEPDF = 'PrintOncePdf';
    const IMAGE_TYPE_ENCRYPTEDPNGURL = 'EncryptedPngUrl';
    const IMAGE_TYPE_ZPL = 'Zpl';
    const IMAGE_TYPE_AZPL = 'AZpl';
    const IMAGE_TYPE_BZPL = 'BZpl';
    const IMAGE_TYPE_BMP = 'Bmp';
    const IMAGE_TYPE_BMPMONOCHROME = 'BmpMonochrome';
    const IMAGE_TYPE_PNGMONOCHROME = 'PngMonochrome';
    const IMAGE_TYPE_JPGMONOCHROME = 'JpgMonochrome';
    const IMAGE_TYPE_GIFMONOCHROME = 'GifMonochrome';

    const ELTRON_PRINTER_DPI_TYPE_DEFAULT = 'Default';
    const ELTRON_PRINTER_DPI_TYPE_HIGH = 'High';

    const NON_DELIVERY_OPTION_UNDEFINED = 'Undefined';
    const NON_DELIVERY_OPTION_RETURN = 'Return';
    const NON_DELIVERY_OPTION_ABANDON = 'Abandon';
    const NON_DELIVERY_OPTION_REDIRECT = 'Redirect';

    const PAPER_SIZE_DEFAULT = 'Default';
    const PAPER_SIZE_LETTER85X11 = 'Letter85x11';
    const PAPER_SIZE_LABEL_SIZE = 'LabelSize';

    const IMAGE_DPI_DEFAULT = 'ImageDpiDefault';
    const IMAGE_DPI_200 = 'ImageDpi200';
    const IMAGE_DPI_300 = 'ImageDpi300';
    const IMAGE_DPI_203 = 'ImageDpi203';
    const IMAGE_DPI_96 = 'ImageDpi96';
    const IMAGE_DPI_150 = 'ImageDpi150';

    const ENCLOSED_SERVICE_TYPE_UNKNOWN = 'Unknown';
    const ENCLOSED_SERVICE_TYPE_MARKETINGMAIL = 'MarketingMail';
    const ENCLOSED_SERVICE_TYPE_PERIODICALS = 'Periodicals';
    const ENCLOSED_SERVICE_TYPE_NEWSPERIODICALS = 'NewsPeriodicals';
    const ENCLOSED_SERVICE_TYPE_BOUNDMEDIA = 'BoundMedia';
    const ENCLOSED_SERVICE_TYPE_PARCELSELECT = 'ParcelSelect';
    const ENCLOSED_SERVICE_TYPE_OTHERPACKAGESERVICE = 'OtherPackageService';

    const ENCLOSED_PACKAGE_TYPE_UNKNOWN = 'Unknown';
    const ENCLOSED_PACKAGE_TYPE_LETTERS = 'Letters';
    const ENCLOSED_PACKAGE_TYPE_FLATS = 'Flats';
    const ENCLOSED_PACKAGE_TYPE_IRREGULARPARCELS = 'Irregular Parcels';
    const ENCLOSED_PACKAGE_TYPE_MACHINABLEPARCELS = 'Machinable Parcels';
    const ENCLOSED_PACKAGE_TYPE_NONMACHINABLEPARCELS = 'Non-Machinable Parcels';

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
     * @return string
     */
    public function getIntegratorTxID() : string
    {
        return $this->IntegratorTxID;
    }

    /**
     * @param string $IntegratorTxID
     * @return static
     */
    public function withIntegratorTxID(string $IntegratorTxID) : static
    {
        $new = clone $this;
        $new->IntegratorTxID = $IntegratorTxID;

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
     * @return \Knightar\StampsSoapClient\Type\RateV46
     */
    public function getRate() : \Knightar\StampsSoapClient\Type\RateV46
    {
        return $this->Rate;
    }

    /**
     * @param \Knightar\StampsSoapClient\Type\RateV46 $Rate
     * @return static
     */
    public function withRate(\Knightar\StampsSoapClient\Type\RateV46 $Rate) : static
    {
        $new = clone $this;
        $new->Rate = $Rate;

        return $new;
    }

    /**
     * @return null | \Knightar\StampsSoapClient\Type\Address
     */
    public function getReturnTo() : ?\Knightar\StampsSoapClient\Type\Address
    {
        return $this->ReturnTo;
    }

    /**
     * @param null | \Knightar\StampsSoapClient\Type\Address $ReturnTo
     * @return static
     */
    public function withReturnTo(?\Knightar\StampsSoapClient\Type\Address $ReturnTo) : static
    {
        $new = clone $this;
        $new->ReturnTo = $ReturnTo;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getCustomerID() : ?string
    {
        return $this->CustomerID;
    }

    /**
     * @param null | string $CustomerID
     * @return static
     */
    public function withCustomerID(?string $CustomerID) : static
    {
        $new = clone $this;
        $new->CustomerID = $CustomerID;

        return $new;
    }

    /**
     * @return null | \Knightar\StampsSoapClient\Type\CustomsV8
     */
    public function getCustoms() : ?\Knightar\StampsSoapClient\Type\CustomsV8
    {
        return $this->Customs;
    }

    /**
     * @param null | \Knightar\StampsSoapClient\Type\CustomsV8 $Customs
     * @return static
     */
    public function withCustoms(?\Knightar\StampsSoapClient\Type\CustomsV8 $Customs) : static
    {
        $new = clone $this;
        $new->Customs = $Customs;

        return $new;
    }

    /**
     * @return null | bool
     */
    public function getSampleOnly() : ?bool
    {
        return $this->SampleOnly;
    }

    /**
     * @param null | bool $SampleOnly
     * @return static
     */
    public function withSampleOnly(?bool $SampleOnly) : static
    {
        $new = clone $this;
        $new->SampleOnly = $SampleOnly;

        return $new;
    }

    /**
     * @return null | 'Normal' | 'NoPostage'
     */
    public function getPostageMode() : ?string
    {
        return $this->PostageMode;
    }

    /**
     * @param null | 'Normal' | 'NoPostage' $PostageMode
     * @return static
     */
    public function withPostageMode(?string $PostageMode) : static
    {
        $new = clone $this;
        $new->PostageMode = $PostageMode;

        return $new;
    }

    /**
     * @return null | 'Auto' | 'Png' | 'Gif' | 'Pdf' | 'Epl' | 'Jpg' | 'PrintOncePdf' | 'EncryptedPngUrl' | 'Zpl' | 'AZpl' | 'BZpl' | 'Bmp' | 'BmpMonochrome' | 'PngMonochrome' | 'JpgMonochrome' | 'GifMonochrome'
     */
    public function getImageType() : ?string
    {
        return $this->ImageType;
    }

    /**
     * @param null | 'Auto' | 'Png' | 'Gif' | 'Pdf' | 'Epl' | 'Jpg' | 'PrintOncePdf' | 'EncryptedPngUrl' | 'Zpl' | 'AZpl' | 'BZpl' | 'Bmp' | 'BmpMonochrome' | 'PngMonochrome' | 'JpgMonochrome' | 'GifMonochrome' $ImageType
     * @return static
     */
    public function withImageType(?string $ImageType) : static
    {
        $new = clone $this;
        $new->ImageType = $ImageType;

        return $new;
    }

    /**
     * @return null | 'Default' | 'High'
     */
    public function getEltronPrinterDPIType() : ?string
    {
        return $this->EltronPrinterDPIType;
    }

    /**
     * @param null | 'Default' | 'High' $EltronPrinterDPIType
     * @return static
     */
    public function withEltronPrinterDPIType(?string $EltronPrinterDPIType) : static
    {
        $new = clone $this;
        $new->EltronPrinterDPIType = $EltronPrinterDPIType;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getMemo() : ?string
    {
        return $this->memo;
    }

    /**
     * @param null | string $memo
     * @return static
     */
    public function withMemo(?string $memo) : static
    {
        $new = clone $this;
        $new->memo = $memo;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getCostCodeId() : ?int
    {
        return $this->cost_code_id;
    }

    /**
     * @param null | int $cost_code_id
     * @return static
     */
    public function withCostCodeId(?int $cost_code_id) : static
    {
        $new = clone $this;
        $new->cost_code_id = $cost_code_id;

        return $new;
    }

    /**
     * @return null | bool
     */
    public function getDeliveryNotification() : ?bool
    {
        return $this->deliveryNotification;
    }

    /**
     * @param null | bool $deliveryNotification
     * @return static
     */
    public function withDeliveryNotification(?bool $deliveryNotification) : static
    {
        $new = clone $this;
        $new->deliveryNotification = $deliveryNotification;

        return $new;
    }

    /**
     * @return null | \Knightar\StampsSoapClient\Type\ShipmentNotification
     */
    public function getShipmentNotification() : ?\Knightar\StampsSoapClient\Type\ShipmentNotification
    {
        return $this->ShipmentNotification;
    }

    /**
     * @param null | \Knightar\StampsSoapClient\Type\ShipmentNotification $ShipmentNotification
     * @return static
     */
    public function withShipmentNotification(?\Knightar\StampsSoapClient\Type\ShipmentNotification $ShipmentNotification) : static
    {
        $new = clone $this;
        $new->ShipmentNotification = $ShipmentNotification;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getRotationDegrees() : ?int
    {
        return $this->rotationDegrees;
    }

    /**
     * @param null | int $rotationDegrees
     * @return static
     */
    public function withRotationDegrees(?int $rotationDegrees) : static
    {
        $new = clone $this;
        $new->rotationDegrees = $rotationDegrees;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getHorizontalOffset() : ?int
    {
        return $this->horizontalOffset;
    }

    /**
     * @param null | int $horizontalOffset
     * @return static
     */
    public function withHorizontalOffset(?int $horizontalOffset) : static
    {
        $new = clone $this;
        $new->horizontalOffset = $horizontalOffset;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getVerticalOffset() : ?int
    {
        return $this->verticalOffset;
    }

    /**
     * @param null | int $verticalOffset
     * @return static
     */
    public function withVerticalOffset(?int $verticalOffset) : static
    {
        $new = clone $this;
        $new->verticalOffset = $verticalOffset;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getPrintDensity() : ?int
    {
        return $this->printDensity;
    }

    /**
     * @param null | int $printDensity
     * @return static
     */
    public function withPrintDensity(?int $printDensity) : static
    {
        $new = clone $this;
        $new->printDensity = $printDensity;

        return $new;
    }

    /**
     * @return null | bool
     */
    public function getPrintMemo() : ?bool
    {
        return $this->printMemo;
    }

    /**
     * @param null | bool $printMemo
     * @return static
     */
    public function withPrintMemo(?bool $printMemo) : static
    {
        $new = clone $this;
        $new->printMemo = $printMemo;

        return $new;
    }

    /**
     * @return null | bool
     */
    public function getPrintInstructions() : ?bool
    {
        return $this->printInstructions;
    }

    /**
     * @param null | bool $printInstructions
     * @return static
     */
    public function withPrintInstructions(?bool $printInstructions) : static
    {
        $new = clone $this;
        $new->printInstructions = $printInstructions;

        return $new;
    }

    /**
     * @return null | bool
     */
    public function getRequestPostageHash() : ?bool
    {
        return $this->requestPostageHash;
    }

    /**
     * @param null | bool $requestPostageHash
     * @return static
     */
    public function withRequestPostageHash(?bool $requestPostageHash) : static
    {
        $new = clone $this;
        $new->requestPostageHash = $requestPostageHash;

        return $new;
    }

    /**
     * @return null | 'Undefined' | 'Return' | 'Abandon' | 'Redirect'
     */
    public function getNonDeliveryOption() : ?string
    {
        return $this->nonDeliveryOption;
    }

    /**
     * @param null | 'Undefined' | 'Return' | 'Abandon' | 'Redirect' $nonDeliveryOption
     * @return static
     */
    public function withNonDeliveryOption(?string $nonDeliveryOption) : static
    {
        $new = clone $this;
        $new->nonDeliveryOption = $nonDeliveryOption;

        return $new;
    }

    /**
     * @return null | \Knightar\StampsSoapClient\Type\Address
     */
    public function getRedirectTo() : ?\Knightar\StampsSoapClient\Type\Address
    {
        return $this->RedirectTo;
    }

    /**
     * @param null | \Knightar\StampsSoapClient\Type\Address $RedirectTo
     * @return static
     */
    public function withRedirectTo(?\Knightar\StampsSoapClient\Type\Address $RedirectTo) : static
    {
        $new = clone $this;
        $new->RedirectTo = $RedirectTo;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getOutboundTransactionID() : ?string
    {
        return $this->OutboundTransactionID;
    }

    /**
     * @param null | string $OutboundTransactionID
     * @return static
     */
    public function withOutboundTransactionID(?string $OutboundTransactionID) : static
    {
        $new = clone $this;
        $new->OutboundTransactionID = $OutboundTransactionID;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getOriginalPostageHash() : ?string
    {
        return $this->OriginalPostageHash;
    }

    /**
     * @param null | string $OriginalPostageHash
     * @return static
     */
    public function withOriginalPostageHash(?string $OriginalPostageHash) : static
    {
        $new = clone $this;
        $new->OriginalPostageHash = $OriginalPostageHash;

        return $new;
    }

    /**
     * @return null | bool
     */
    public function getReturnImageData() : ?bool
    {
        return $this->ReturnImageData;
    }

    /**
     * @param null | bool $ReturnImageData
     * @return static
     */
    public function withReturnImageData(?bool $ReturnImageData) : static
    {
        $new = clone $this;
        $new->ReturnImageData = $ReturnImageData;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getInternalTransactionNumber() : ?string
    {
        return $this->InternalTransactionNumber;
    }

    /**
     * @param null | string $InternalTransactionNumber
     * @return static
     */
    public function withInternalTransactionNumber(?string $InternalTransactionNumber) : static
    {
        $new = clone $this;
        $new->InternalTransactionNumber = $InternalTransactionNumber;

        return $new;
    }

    /**
     * @return null | 'Default' | 'Letter85x11' | 'LabelSize'
     */
    public function getPaperSize() : ?string
    {
        return $this->PaperSize;
    }

    /**
     * @param null | 'Default' | 'Letter85x11' | 'LabelSize' $PaperSize
     * @return static
     */
    public function withPaperSize(?string $PaperSize) : static
    {
        $new = clone $this;
        $new->PaperSize = $PaperSize;

        return $new;
    }

    /**
     * @return null | \Knightar\StampsSoapClient\Type\LabelRecipientInfo
     */
    public function getEmailLabelTo() : ?\Knightar\StampsSoapClient\Type\LabelRecipientInfo
    {
        return $this->EmailLabelTo;
    }

    /**
     * @param null | \Knightar\StampsSoapClient\Type\LabelRecipientInfo $EmailLabelTo
     * @return static
     */
    public function withEmailLabelTo(?\Knightar\StampsSoapClient\Type\LabelRecipientInfo $EmailLabelTo) : static
    {
        $new = clone $this;
        $new->EmailLabelTo = $EmailLabelTo;

        return $new;
    }

    /**
     * @return null | bool
     */
    public function getPayOnPrint() : ?bool
    {
        return $this->PayOnPrint;
    }

    /**
     * @param null | bool $PayOnPrint
     * @return static
     */
    public function withPayOnPrint(?bool $PayOnPrint) : static
    {
        $new = clone $this;
        $new->PayOnPrint = $PayOnPrint;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getReturnLabelExpirationDays() : ?int
    {
        return $this->ReturnLabelExpirationDays;
    }

    /**
     * @param null | int $ReturnLabelExpirationDays
     * @return static
     */
    public function withReturnLabelExpirationDays(?int $ReturnLabelExpirationDays) : static
    {
        $new = clone $this;
        $new->ReturnLabelExpirationDays = $ReturnLabelExpirationDays;

        return $new;
    }

    /**
     * @return null | 'ImageDpiDefault' | 'ImageDpi200' | 'ImageDpi300' | 'ImageDpi203' | 'ImageDpi96' | 'ImageDpi150'
     */
    public function getImageDpi() : ?string
    {
        return $this->ImageDpi;
    }

    /**
     * @param null | 'ImageDpiDefault' | 'ImageDpi200' | 'ImageDpi300' | 'ImageDpi203' | 'ImageDpi96' | 'ImageDpi150' $ImageDpi
     * @return static
     */
    public function withImageDpi(?string $ImageDpi) : static
    {
        $new = clone $this;
        $new->ImageDpi = $ImageDpi;

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
    public function getOrderId() : ?string
    {
        return $this->OrderId;
    }

    /**
     * @param null | string $OrderId
     * @return static
     */
    public function withOrderId(?string $OrderId) : static
    {
        $new = clone $this;
        $new->OrderId = $OrderId;

        return $new;
    }

    /**
     * @return null | bool
     */
    public function getBypassCleanseAddress() : ?bool
    {
        return $this->BypassCleanseAddress;
    }

    /**
     * @param null | bool $BypassCleanseAddress
     * @return static
     */
    public function withBypassCleanseAddress(?bool $BypassCleanseAddress) : static
    {
        $new = clone $this;
        $new->BypassCleanseAddress = $BypassCleanseAddress;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getImageId() : ?int
    {
        return $this->ImageId;
    }

    /**
     * @param null | int $ImageId
     * @return static
     */
    public function withImageId(?int $ImageId) : static
    {
        $new = clone $this;
        $new->ImageId = $ImageId;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getReference1() : ?string
    {
        return $this->Reference1;
    }

    /**
     * @param null | string $Reference1
     * @return static
     */
    public function withReference1(?string $Reference1) : static
    {
        $new = clone $this;
        $new->Reference1 = $Reference1;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getReference2() : ?string
    {
        return $this->Reference2;
    }

    /**
     * @param null | string $Reference2
     * @return static
     */
    public function withReference2(?string $Reference2) : static
    {
        $new = clone $this;
        $new->Reference2 = $Reference2;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getReference3() : ?string
    {
        return $this->Reference3;
    }

    /**
     * @param null | string $Reference3
     * @return static
     */
    public function withReference3(?string $Reference3) : static
    {
        $new = clone $this;
        $new->Reference3 = $Reference3;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getReference4() : ?string
    {
        return $this->Reference4;
    }

    /**
     * @param null | string $Reference4
     * @return static
     */
    public function withReference4(?string $Reference4) : static
    {
        $new = clone $this;
        $new->Reference4 = $Reference4;

        return $new;
    }

    /**
     * @return null | bool
     */
    public function getReturnIndiciumData() : ?bool
    {
        return $this->ReturnIndiciumData;
    }

    /**
     * @param null | bool $ReturnIndiciumData
     * @return static
     */
    public function withReturnIndiciumData(?bool $ReturnIndiciumData) : static
    {
        $new = clone $this;
        $new->ReturnIndiciumData = $ReturnIndiciumData;

        return $new;
    }

    /**
     * @return null | \Knightar\StampsSoapClient\Type\ExtendedPostageInfoV1
     */
    public function getExtendedPostageInfo() : ?\Knightar\StampsSoapClient\Type\ExtendedPostageInfoV1
    {
        return $this->ExtendedPostageInfo;
    }

    /**
     * @param null | \Knightar\StampsSoapClient\Type\ExtendedPostageInfoV1 $ExtendedPostageInfo
     * @return static
     */
    public function withExtendedPostageInfo(?\Knightar\StampsSoapClient\Type\ExtendedPostageInfoV1 $ExtendedPostageInfo) : static
    {
        $new = clone $this;
        $new->ExtendedPostageInfo = $ExtendedPostageInfo;

        return $new;
    }

    /**
     * @return null | 'Unknown' | 'MarketingMail' | 'Periodicals' | 'NewsPeriodicals' | 'BoundMedia' | 'ParcelSelect' | 'OtherPackageService'
     */
    public function getEnclosedServiceType() : ?string
    {
        return $this->EnclosedServiceType;
    }

    /**
     * @param null | 'Unknown' | 'MarketingMail' | 'Periodicals' | 'NewsPeriodicals' | 'BoundMedia' | 'ParcelSelect' | 'OtherPackageService' $EnclosedServiceType
     * @return static
     */
    public function withEnclosedServiceType(?string $EnclosedServiceType) : static
    {
        $new = clone $this;
        $new->EnclosedServiceType = $EnclosedServiceType;

        return $new;
    }

    /**
     * @return null | 'Unknown' | 'Letters' | 'Flats' | 'Irregular Parcels' | 'Machinable Parcels' | 'Non-Machinable Parcels'
     */
    public function getEnclosedPackageType() : ?string
    {
        return $this->EnclosedPackageType;
    }

    /**
     * @param null | 'Unknown' | 'Letters' | 'Flats' | 'Irregular Parcels' | 'Machinable Parcels' | 'Non-Machinable Parcels' $EnclosedPackageType
     * @return static
     */
    public function withEnclosedPackageType(?string $EnclosedPackageType) : static
    {
        $new = clone $this;
        $new->EnclosedPackageType = $EnclosedPackageType;

        return $new;
    }

    /**
     * @return null | \Knightar\StampsSoapClient\Type\OrderDetails
     */
    public function getOrderDetails() : ?\Knightar\StampsSoapClient\Type\OrderDetails
    {
        return $this->OrderDetails;
    }

    /**
     * @param null | \Knightar\StampsSoapClient\Type\OrderDetails $OrderDetails
     * @return static
     */
    public function withOrderDetails(?\Knightar\StampsSoapClient\Type\OrderDetails $OrderDetails) : static
    {
        $new = clone $this;
        $new->OrderDetails = $OrderDetails;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getBrandingId() : ?string
    {
        return $this->BrandingId;
    }

    /**
     * @param null | string $BrandingId
     * @return static
     */
    public function withBrandingId(?string $BrandingId) : static
    {
        $new = clone $this;
        $new->BrandingId = $BrandingId;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getNotificationSettingId() : ?string
    {
        return $this->NotificationSettingId;
    }

    /**
     * @param null | string $NotificationSettingId
     * @return static
     */
    public function withNotificationSettingId(?string $NotificationSettingId) : static
    {
        $new = clone $this;
        $new->NotificationSettingId = $NotificationSettingId;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getGroupCode() : ?string
    {
        return $this->GroupCode;
    }

    /**
     * @param null | string $GroupCode
     * @return static
     */
    public function withGroupCode(?string $GroupCode) : static
    {
        $new = clone $this;
        $new->GroupCode = $GroupCode;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getDescription() : ?string
    {
        return $this->Description;
    }

    /**
     * @param null | string $Description
     * @return static
     */
    public function withDescription(?string $Description) : static
    {
        $new = clone $this;
        $new->Description = $Description;

        return $new;
    }
}

