<?php

namespace Knightar\StampsSoapClient\Type;

class ReprintIndiciumRequest
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
     * @var null | string
     */
    private ?string $IntegratorTxId = null;

    /**
     * @var null | string
     */
    private ?string $StampsTxId = null;

    /**
     * @var null | string
     */
    private ?string $TrackingNumber = null;

    /**
     * @var null | 'Auto' | 'Png' | 'Gif' | 'Pdf' | 'Epl' | 'Jpg' | 'PrintOncePdf' | 'EncryptedPngUrl' | 'Zpl' | 'AZpl' | 'BZpl' | 'Bmp' | 'BmpMonochrome' | 'PngMonochrome' | 'JpgMonochrome' | 'GifMonochrome'
     */
    private ?string $ImageType = null;

    /**
     * @var null | 'ImageDpiDefault' | 'ImageDpi200' | 'ImageDpi300' | 'ImageDpi203' | 'ImageDpi96' | 'ImageDpi150'
     */
    private ?string $ImageDpi = null;

    /**
     * @var null | 'Default' | 'High'
     */
    private ?string $EltronPrinterDpiType = null;

    /**
     * @var int
     */
    private int $RotationDegrees;

    /**
     * @var null | int
     */
    private ?int $HorizontalOffset = null;

    /**
     * @var null | int
     */
    private ?int $VerticalOffset = null;

    /**
     * @var null | int
     */
    private ?int $PrintDensity = null;

    /**
     * @var null | 'Default' | 'Letter85x11' | 'LabelSize'
     */
    private ?string $PaperSize = null;

    /**
     * @var int
     */
    private int $StartRow;

    /**
     * @var int
     */
    private int $StartColumn;

    /**
     * @var null | bool
     */
    private ?bool $ReturnImageData = null;

    /**
     * @var null | bool
     */
    private ?bool $ReturnIndiciumData = null;

    /**
     * @var null | string
     */
    private ?string $PrintLayout = null;

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
     * @return null | 'Default' | 'High'
     */
    public function getEltronPrinterDpiType() : ?string
    {
        return $this->EltronPrinterDpiType;
    }

    /**
     * @param null | 'Default' | 'High' $EltronPrinterDpiType
     * @return static
     */
    public function withEltronPrinterDpiType(?string $EltronPrinterDpiType) : static
    {
        $new = clone $this;
        $new->EltronPrinterDpiType = $EltronPrinterDpiType;

        return $new;
    }

    /**
     * @return int
     */
    public function getRotationDegrees() : int
    {
        return $this->RotationDegrees;
    }

    /**
     * @param int $RotationDegrees
     * @return static
     */
    public function withRotationDegrees(int $RotationDegrees) : static
    {
        $new = clone $this;
        $new->RotationDegrees = $RotationDegrees;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getHorizontalOffset() : ?int
    {
        return $this->HorizontalOffset;
    }

    /**
     * @param null | int $HorizontalOffset
     * @return static
     */
    public function withHorizontalOffset(?int $HorizontalOffset) : static
    {
        $new = clone $this;
        $new->HorizontalOffset = $HorizontalOffset;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getVerticalOffset() : ?int
    {
        return $this->VerticalOffset;
    }

    /**
     * @param null | int $VerticalOffset
     * @return static
     */
    public function withVerticalOffset(?int $VerticalOffset) : static
    {
        $new = clone $this;
        $new->VerticalOffset = $VerticalOffset;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getPrintDensity() : ?int
    {
        return $this->PrintDensity;
    }

    /**
     * @param null | int $PrintDensity
     * @return static
     */
    public function withPrintDensity(?int $PrintDensity) : static
    {
        $new = clone $this;
        $new->PrintDensity = $PrintDensity;

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
     * @return int
     */
    public function getStartRow() : int
    {
        return $this->StartRow;
    }

    /**
     * @param int $StartRow
     * @return static
     */
    public function withStartRow(int $StartRow) : static
    {
        $new = clone $this;
        $new->StartRow = $StartRow;

        return $new;
    }

    /**
     * @return int
     */
    public function getStartColumn() : int
    {
        return $this->StartColumn;
    }

    /**
     * @param int $StartColumn
     * @return static
     */
    public function withStartColumn(int $StartColumn) : static
    {
        $new = clone $this;
        $new->StartColumn = $StartColumn;

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
     * @return null | string
     */
    public function getPrintLayout() : ?string
    {
        return $this->PrintLayout;
    }

    /**
     * @param null | string $PrintLayout
     * @return static
     */
    public function withPrintLayout(?string $PrintLayout) : static
    {
        $new = clone $this;
        $new->PrintLayout = $PrintLayout;

        return $new;
    }
}

