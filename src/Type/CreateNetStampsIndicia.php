<?php

namespace Knightar\StampsSoapClient\Type;

use Phpro\SoapClient\Type\RequestInterface;

class CreateNetStampsIndicia implements RequestInterface
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
     * @var null | string
     */
    private ?string $Layout = null;

    /**
     * @var \Knightar\StampsSoapClient\Type\ArrayOfNetStampV42
     */
    private \Knightar\StampsSoapClient\Type\ArrayOfNetStampV42 $NetStamps;

    /**
     * @var null | \Knightar\StampsSoapClient\Type\Address
     */
    private ?\Knightar\StampsSoapClient\Type\Address $ReturnTo = null;

    /**
     * @var null | bool
     */
    private ?bool $SampleOnly = null;

    /**
     * @var null | 'Auto' | 'Png' | 'Gif' | 'Pdf' | 'Epl' | 'Jpg' | 'PrintOncePdf' | 'EncryptedPngUrl' | 'Zpl' | 'AZpl' | 'BZpl' | 'Bmp' | 'BmpMonochrome' | 'PngMonochrome' | 'JpgMonochrome' | 'GifMonochrome'
     */
    private ?string $ImageType = null;

    /**
     * @var null | int
     */
    private ?int $cost_code_id = null;

    /**
     * @var null | int
     */
    private ?int $ImageId = null;

    /**
     * @var null | bool
     */
    private ?bool $ReturnIndiciaData = null;

    /**
     * @var null | string
     */
    private ?string $RateToken = null;

    /**
     * @var null | string
     */
    private ?string $memo = null;

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

    private const IMAGE_TYPE_AUTO = 'Auto';
    private const IMAGE_TYPE_PNG = 'Png';
    private const IMAGE_TYPE_GIF = 'Gif';
    private const IMAGE_TYPE_PDF = 'Pdf';
    private const IMAGE_TYPE_EPL = 'Epl';
    private const IMAGE_TYPE_JPG = 'Jpg';
    private const IMAGE_TYPE_PRINT_ONCE_PDF = 'PrintOncePdf';
    private const IMAGE_TYPE_ENCRYPTED_PNG_URL = 'EncryptedPngUrl';
    private const IMAGE_TYPE_ZPL = 'Zpl';
    private const IMAGE_TYPE_AZPL = 'AZpl';
    private const IMAGE_TYPE_BZPL = 'BZpl';
    private const IMAGE_TYPE_BMP = 'Bmp';
    private const IMAGE_TYPE_BMP_MONOCHROME = 'BmpMonochrome';
    private const IMAGE_TYPE_PNG_MONOCHROME = 'PngMonochrome';
    private const IMAGE_TYPE_JPG_MONOCHROME = 'JpgMonochrome';
    private const IMAGE_TYPE_GIF_MONOCHROME = 'GifMonochrome';

    private const IMAGE_DPI_DEFAULT = 'ImageDpiDefault';
    private const IMAGE_DPI_200 = 'ImageDpi200';
    private const IMAGE_DPI_300 = 'ImageDpi300';
    private const IMAGE_DPI_203 = 'ImageDpi203';
    private const IMAGE_DPI_96 = 'ImageDpi96';
    private const IMAGE_DPI_150 = 'ImageDpi150';

    /**
     * Constructor
     *
     * @param string $IntegratorTxId
     * @param \Knightar\StampsSoapClient\Type\ArrayOfNetStampV42 $NetStamps
     * @param null | \Knightar\StampsSoapClient\Type\Address $ReturnTo
     * @param null | bool $SampleOnly
     * @param null | string $ImageType
     * @param null | int $cost_code_id
     * @param null | int $ImageId
     * @param null | bool $ReturnIndiciaData
     * @param null | string $RateToken
     * @param null | string $memo
     * @param null | string $Reference1
     * @param null | string $Reference2
     * @param null | string $Reference3
     * @param null | string $Reference4
     * @param null | \Knightar\StampsSoapClient\Type\ExtendedPostageInfoV1 $ExtendedPostageInfo
     * @param null | bool $ReturnImageData
     * @param null | string $ImageDpi
     * @param null | string $Layout
     * @param null | string $Authenticator
     * @param null | \Knightar\StampsSoapClient\Type\Credentials $Credentials
     */
    public function __construct(
        string                                                 $IntegratorTxId,
        \Knightar\StampsSoapClient\Type\ArrayOfNetStampV42     $NetStamps,
        ?\Knightar\StampsSoapClient\Type\Address               $ReturnTo = null,
        ?bool                                                  $SampleOnly = null,
        ?string                                                $ImageType = null,
        ?int                                                   $cost_code_id = null,
        ?int                                                   $ImageId = null,
        ?bool                                                  $ReturnIndiciaData = null,
        ?string                                                $RateToken = null,
        ?string                                                $memo = null,
        ?string                                                $Reference1 = null,
        ?string                                                $Reference2 = null,
        ?string                                                $Reference3 = null,
        ?string                                                $Reference4 = null,
        ?\Knightar\StampsSoapClient\Type\ExtendedPostageInfoV1 $ExtendedPostageInfo = null,
        ?bool                                                  $ReturnImageData = null,
        ?string                                                $ImageDpi = null,
        ?string                                                $Layout = null,
        ?string                                                $Authenticator = null,
        ?\Knightar\StampsSoapClient\Type\Credentials           $Credentials = null
    )
    {
        $this->Authenticator = $Authenticator;
        $this->Credentials = $Credentials;
        $this->IntegratorTxId = $IntegratorTxId;
        $this->Layout = $Layout;
        $this->NetStamps = $NetStamps;
        $this->ReturnTo = $ReturnTo;
        $this->SampleOnly = $SampleOnly;
        $this->ImageType = $ImageType;
        $this->cost_code_id = $cost_code_id;
        $this->ImageId = $ImageId;
        $this->ReturnIndiciaData = $ReturnIndiciaData;
        $this->RateToken = $RateToken;
        $this->memo = $memo;
        $this->Reference1 = $Reference1;
        $this->Reference2 = $Reference2;
        $this->Reference3 = $Reference3;
        $this->Reference4 = $Reference4;
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
     * @return null | string
     */
    public function getLayout() : ?string
    {
        return $this->Layout;
    }

    /**
     * @param null | string $Layout
     * @return static
     */
    public function withLayout(?string $Layout) : static
    {
        $new = clone $this;
        $new->Layout = $Layout;

        return $new;
    }

    /**
     * @return \Knightar\StampsSoapClient\Type\ArrayOfNetStampV42
     */
    public function getNetStamps() : \Knightar\StampsSoapClient\Type\ArrayOfNetStampV42
    {
        return $this->NetStamps;
    }

    /**
     * @param \Knightar\StampsSoapClient\Type\ArrayOfNetStampV42 $NetStamps
     * @return static
     */
    public function withNetStamps(\Knightar\StampsSoapClient\Type\ArrayOfNetStampV42 $NetStamps) : static
    {
        $new = clone $this;
        $new->NetStamps = $NetStamps;

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
    public function getReturnIndiciaData() : ?bool
    {
        return $this->ReturnIndiciaData;
    }

    /**
     * @param null | bool $ReturnIndiciaData
     * @return static
     */
    public function withReturnIndiciaData(?bool $ReturnIndiciaData) : static
    {
        $new = clone $this;
        $new->ReturnIndiciaData = $ReturnIndiciaData;

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

