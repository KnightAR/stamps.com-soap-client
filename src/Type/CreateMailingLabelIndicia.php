<?php

namespace Knightar\StampsSoapClient\Type;

use Phpro\SoapClient\Type\RequestInterface;

class CreateMailingLabelIndicia implements RequestInterface
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
    private string $IntegratorTxId;

    /**
     * @var string
     */
    private string $Layout;

    /**
     * @var null | bool
     */
    private ?bool $PrintToAddress = null;

    /**
     * @var null | int
     */
    private ?int $StartRow = null;

    /**
     * @var null | int
     */
    private ?int $StartColumn = null;

    /**
     * @var \Knightar\StampsSoapClient\Type\ArrayOfIndiciumInfoV39
     */
    private \Knightar\StampsSoapClient\Type\ArrayOfIndiciumInfoV39 $IndiciumInfo;

    /**
     * @var null | 'Normal' | 'Sample' | 'NoPostage' | 'Preview'
     */
    private ?string $Mode = null;

    /**
     * @var null | 'Auto' | 'Png' | 'Gif' | 'Pdf' | 'Epl' | 'Jpg' | 'PrintOncePdf' | 'EncryptedPngUrl' | 'Zpl' | 'AZpl' | 'BZpl' | 'Bmp' | 'BmpMonochrome' | 'PngMonochrome' | 'JpgMonochrome' | 'GifMonochrome'
     */
    private ?string $ImageType = null;

    /**
     * @var null | string
     */
    private ?string $RateToken = null;

    /**
     * @var null | string
     */
    private ?string $memo = null;

    /**
     * @var null | bool
     */
    private ?bool $BypassCleanseAddress = null;

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
     * @var null | int
     */
    private ?int $ImageId = null;

    /**
     * @var null | bool
     */
    private ?bool $PrintFromAddress = null;

    /**
     * Constructor
     *
     * @param null | string $Authenticator
     * @param null | \Knightar\StampsSoapClient\Type\Credentials $Credentials
     * @param string $IntegratorTxId
     * @param string $Layout
     * @param null | bool $PrintToAddress
     * @param null | int $StartRow
     * @param null | int $StartColumn
     * @param \Knightar\StampsSoapClient\Type\ArrayOfIndiciumInfoV39 $IndiciumInfo
     * @param null | 'Normal' | 'Sample' | 'NoPostage' | 'Preview' $Mode
     * @param null | 'Auto' | 'Png' | 'Gif' | 'Pdf' | 'Epl' | 'Jpg' | 'PrintOncePdf' | 'EncryptedPngUrl' | 'Zpl' | 'AZpl' | 'BZpl' | 'Bmp' | 'BmpMonochrome' | 'PngMonochrome' | 'JpgMonochrome' | 'GifMonochrome' $ImageType
     * @param null | string $RateToken
     * @param null | string $memo
     * @param null | bool $BypassCleanseAddress
     * @param null | string $Reference1
     * @param null | string $Reference2
     * @param null | string $Reference3
     * @param null | string $Reference4
     * @param null | bool $ReturnIndiciumData
     * @param null | \Knightar\StampsSoapClient\Type\ExtendedPostageInfoV1 $ExtendedPostageInfo
     * @param null | int $ImageId
     * @param null | bool $PrintFromAddress
     */
    public function __construct(?string $Authenticator = null, ?\Knightar\StampsSoapClient\Type\Credentials $Credentials = null, string $IntegratorTxId, string $Layout, ?bool $PrintToAddress, ?int $StartRow, ?int $StartColumn, \Knightar\StampsSoapClient\Type\ArrayOfIndiciumInfoV39 $IndiciumInfo, ?string $Mode, ?string $ImageType, ?string $RateToken, ?string $memo, ?bool $BypassCleanseAddress, ?string $Reference1, ?string $Reference2, ?string $Reference3, ?string $Reference4, ?bool $ReturnIndiciumData, ?\Knightar\StampsSoapClient\Type\ExtendedPostageInfoV1 $ExtendedPostageInfo, ?int $ImageId, ?bool $PrintFromAddress)
    {
        $this->Authenticator = $Authenticator;
        $this->Credentials = $Credentials;
        $this->IntegratorTxId = $IntegratorTxId;
        $this->Layout = $Layout;
        $this->PrintToAddress = $PrintToAddress;
        $this->StartRow = $StartRow;
        $this->StartColumn = $StartColumn;
        $this->IndiciumInfo = $IndiciumInfo;
        $this->Mode = $Mode;
        $this->ImageType = $ImageType;
        $this->RateToken = $RateToken;
        $this->memo = $memo;
        $this->BypassCleanseAddress = $BypassCleanseAddress;
        $this->Reference1 = $Reference1;
        $this->Reference2 = $Reference2;
        $this->Reference3 = $Reference3;
        $this->Reference4 = $Reference4;
        $this->ReturnIndiciumData = $ReturnIndiciumData;
        $this->ExtendedPostageInfo = $ExtendedPostageInfo;
        $this->ImageId = $ImageId;
        $this->PrintFromAddress = $PrintFromAddress;
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
    public function getIntegratorTxId() : string
    {
        return $this->IntegratorTxId;
    }

    /**
     * @param string $IntegratorTxId
     * @return static
     */
    public function withIntegratorTxId(string $IntegratorTxId) : static
    {
        $new = clone $this;
        $new->IntegratorTxId = $IntegratorTxId;

        return $new;
    }

    /**
     * @return string
     */
    public function getLayout() : string
    {
        return $this->Layout;
    }

    /**
     * @param string $Layout
     * @return static
     */
    public function withLayout(string $Layout) : static
    {
        $new = clone $this;
        $new->Layout = $Layout;

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
     * @return null | int
     */
    public function getStartRow() : ?int
    {
        return $this->StartRow;
    }

    /**
     * @param null | int $StartRow
     * @return static
     */
    public function withStartRow(?int $StartRow) : static
    {
        $new = clone $this;
        $new->StartRow = $StartRow;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getStartColumn() : ?int
    {
        return $this->StartColumn;
    }

    /**
     * @param null | int $StartColumn
     * @return static
     */
    public function withStartColumn(?int $StartColumn) : static
    {
        $new = clone $this;
        $new->StartColumn = $StartColumn;

        return $new;
    }

    /**
     * @return \Knightar\StampsSoapClient\Type\ArrayOfIndiciumInfoV39
     */
    public function getIndiciumInfo() : \Knightar\StampsSoapClient\Type\ArrayOfIndiciumInfoV39
    {
        return $this->IndiciumInfo;
    }

    /**
     * @param \Knightar\StampsSoapClient\Type\ArrayOfIndiciumInfoV39 $IndiciumInfo
     * @return static
     */
    public function withIndiciumInfo(\Knightar\StampsSoapClient\Type\ArrayOfIndiciumInfoV39 $IndiciumInfo) : static
    {
        $new = clone $this;
        $new->IndiciumInfo = $IndiciumInfo;

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
}

