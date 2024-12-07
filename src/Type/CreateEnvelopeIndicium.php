<?php

namespace Knightar\StampsSoapClient\Type;

use Phpro\SoapClient\Type\RequestInterface;

class CreateEnvelopeIndicium implements RequestInterface
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
     * @var \Knightar\StampsSoapClient\Type\RateV46
     */
    private \Knightar\StampsSoapClient\Type\RateV46 $Rate;

    /**
     * @var null | \Knightar\StampsSoapClient\Type\Address
     */
    private ?\Knightar\StampsSoapClient\Type\Address $ReturnTo = null;

    /**
     * @var null | bool
     */
    private ?bool $PrintFromAddress = null;

    /**
     * @var null | bool
     */
    private ?bool $PrintToAddress = null;

    /**
     * @var null | string
     */
    private ?string $CustomerID = null;

    /**
     * @var null | 'Normal' | 'Sample' | 'NoPostage' | 'Preview'
     */
    private ?string $Mode = null;

    /**
     * @var null | 'Auto' | 'Png' | 'Gif' | 'Pdf' | 'Epl' | 'Jpg' | 'PrintOncePdf' | 'EncryptedPngUrl' | 'Zpl' | 'AZpl' | 'BZpl' | 'Bmp' | 'BmpMonochrome' | 'PngMonochrome' | 'JpgMonochrome' | 'GifMonochrome'
     */
    private ?string $ImageType = null;

    /**
     * @var null | int
     */
    private ?int $CostCodeId = null;

    /**
     * @var null | bool
     */
    private ?bool $HideFIM = null;

    /**
     * @var null | string
     */
    private ?string $RateToken = null;

    /**
     * @var null | string
     */
    private ?string $OrderId = null;

    /**
     * @var null | string
     */
    private ?string $memo = null;

    /**
     * @var null | bool
     */
    private ?bool $BypassCleanseAddress = null;

    /**
     * @var null | int
     */
    private ?int $ImageId = null;

    /**
     * @var null | int
     */
    private ?int $ImageId2 = null;

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
     * @var null | bool
     */
    private ?bool $ReturnImageData = null;

    /**
     * @var null | 'ImageDpiDefault' | 'ImageDpi200' | 'ImageDpi300' | 'ImageDpi203' | 'ImageDpi96' | 'ImageDpi150'
     */
    private ?string $ImageDpi = null;

    /**
     * Constructor
     *
     * @param null | string $Authenticator
     * @param null | \Knightar\StampsSoapClient\Type\Credentials $Credentials
     * @param string $IntegratorTxID
     * @param \Knightar\StampsSoapClient\Type\RateV46 $Rate
     * @param null | \Knightar\StampsSoapClient\Type\Address $ReturnTo
     * @param null | bool $PrintFromAddress
     * @param null | bool $PrintToAddress
     * @param null | string $CustomerID
     * @param null | 'Normal' | 'Sample' | 'NoPostage' | 'Preview' $Mode
     * @param null | 'Auto' | 'Png' | 'Gif' | 'Pdf' | 'Epl' | 'Jpg' | 'PrintOncePdf' | 'EncryptedPngUrl' | 'Zpl' | 'AZpl' | 'BZpl' | 'Bmp' | 'BmpMonochrome' | 'PngMonochrome' | 'JpgMonochrome' | 'GifMonochrome' $ImageType
     * @param null | int $CostCodeId
     * @param null | bool $HideFIM
     * @param null | string $RateToken
     * @param null | string $OrderId
     * @param null | string $memo
     * @param null | bool $BypassCleanseAddress
     * @param null | int $ImageId
     * @param null | int $ImageId2
     * @param null | string $Reference1
     * @param null | string $Reference2
     * @param null | string $Reference3
     * @param null | string $Reference4
     * @param null | bool $ReturnIndiciumData
     * @param null | \Knightar\StampsSoapClient\Type\ExtendedPostageInfoV1 $ExtendedPostageInfo
     * @param null | bool $ReturnImageData
     * @param null | 'ImageDpiDefault' | 'ImageDpi200' | 'ImageDpi300' | 'ImageDpi203' | 'ImageDpi96' | 'ImageDpi150' $ImageDpi
     */
    public function __construct(?string $Authenticator = null, ?\Knightar\StampsSoapClient\Type\Credentials $Credentials = null, string $IntegratorTxID, \Knightar\StampsSoapClient\Type\RateV46 $Rate, ?\Knightar\StampsSoapClient\Type\Address $ReturnTo, ?bool $PrintFromAddress, ?bool $PrintToAddress, ?string $CustomerID, ?string $Mode, ?string $ImageType, ?int $CostCodeId, ?bool $HideFIM, ?string $RateToken, ?string $OrderId, ?string $memo, ?bool $BypassCleanseAddress, ?int $ImageId, ?int $ImageId2, ?string $Reference1, ?string $Reference2, ?string $Reference3, ?string $Reference4, ?bool $ReturnIndiciumData, ?\Knightar\StampsSoapClient\Type\ExtendedPostageInfoV1 $ExtendedPostageInfo, ?bool $ReturnImageData, ?string $ImageDpi)
    {
        $this->Authenticator = $Authenticator;
        $this->Credentials = $Credentials;
        $this->IntegratorTxID = $IntegratorTxID;
        $this->Rate = $Rate;
        $this->ReturnTo = $ReturnTo;
        $this->PrintFromAddress = $PrintFromAddress;
        $this->PrintToAddress = $PrintToAddress;
        $this->CustomerID = $CustomerID;
        $this->Mode = $Mode;
        $this->ImageType = $ImageType;
        $this->CostCodeId = $CostCodeId;
        $this->HideFIM = $HideFIM;
        $this->RateToken = $RateToken;
        $this->OrderId = $OrderId;
        $this->memo = $memo;
        $this->BypassCleanseAddress = $BypassCleanseAddress;
        $this->ImageId = $ImageId;
        $this->ImageId2 = $ImageId2;
        $this->Reference1 = $Reference1;
        $this->Reference2 = $Reference2;
        $this->Reference3 = $Reference3;
        $this->Reference4 = $Reference4;
        $this->ReturnIndiciumData = $ReturnIndiciumData;
        $this->ExtendedPostageInfo = $ExtendedPostageInfo;
        $this->ReturnImageData = $ReturnImageData;
        $this->ImageDpi = $ImageDpi;
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
     * @return null | bool
     */
    public function getPrintFromAddress() : ?bool
    {
        return $this->PrintFromAddress;
    }

    /**
     * @param null | bool $PrintFromAddress
     * @return static
     */
    public function withPrintFromAddress(?bool $PrintFromAddress) : static
    {
        $new = clone $this;
        $new->PrintFromAddress = $PrintFromAddress;

        return $new;
    }

    /**
     * @return null | bool
     */
    public function getPrintToAddress() : ?bool
    {
        return $this->PrintToAddress;
    }

    /**
     * @param null | bool $PrintToAddress
     * @return static
     */
    public function withPrintToAddress(?bool $PrintToAddress) : static
    {
        $new = clone $this;
        $new->PrintToAddress = $PrintToAddress;

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
     * @return null | 'Normal' | 'Sample' | 'NoPostage' | 'Preview'
     */
    public function getMode() : ?string
    {
        return $this->Mode;
    }

    /**
     * @param null | 'Normal' | 'Sample' | 'NoPostage' | 'Preview' $Mode
     * @return static
     */
    public function withMode(?string $Mode) : static
    {
        $new = clone $this;
        $new->Mode = $Mode;

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
     * @return null | int
     */
    public function getCostCodeId() : ?int
    {
        return $this->CostCodeId;
    }

    /**
     * @param null | int $CostCodeId
     * @return static
     */
    public function withCostCodeId(?int $CostCodeId) : static
    {
        $new = clone $this;
        $new->CostCodeId = $CostCodeId;

        return $new;
    }

    /**
     * @return null | bool
     */
    public function getHideFIM() : ?bool
    {
        return $this->HideFIM;
    }

    /**
     * @param null | bool $HideFIM
     * @return static
     */
    public function withHideFIM(?bool $HideFIM) : static
    {
        $new = clone $this;
        $new->HideFIM = $HideFIM;

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
     * @return null | int
     */
    public function getImageId2() : ?int
    {
        return $this->ImageId2;
    }

    /**
     * @param null | int $ImageId2
     * @return static
     */
    public function withImageId2(?int $ImageId2) : static
    {
        $new = clone $this;
        $new->ImageId2 = $ImageId2;

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
}

