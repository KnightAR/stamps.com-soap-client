<?php

namespace Knightar\StampsSoapClient\Type;

use Phpro\SoapClient\Type\RequestInterface;

class CreateManifest implements RequestInterface
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
    private ?string $IntegratorTxID = null;

    /**
     * @var null | \Knightar\StampsSoapClient\Type\ArrayOfGuid
     */
    private ?\Knightar\StampsSoapClient\Type\ArrayOfGuid $StampsTxIds = null;

    /**
     * @var null | \Knightar\StampsSoapClient\Type\ArrayOfString
     */
    private ?\Knightar\StampsSoapClient\Type\ArrayOfString $TrackingNumbers = null;

    /**
     * @var null | \DateTimeInterface
     */
    private ?\DateTimeInterface $ShipDate = null;

    /**
     * @var null | string
     */
    private ?string $PrintLayout = null;

    /**
     * @var \Knightar\StampsSoapClient\Type\Address
     */
    private \Knightar\StampsSoapClient\Type\Address $FromAddress;

    /**
     * @var 'Auto' | 'Png' | 'Gif' | 'Pdf' | 'Epl' | 'Jpg' | 'PrintOncePdf' | 'EncryptedPngUrl' | 'Zpl' | 'AZpl' | 'BZpl' | 'Bmp' | 'BmpMonochrome' | 'PngMonochrome' | 'JpgMonochrome' | 'GifMonochrome'
     */
    private string $ImageType;

    /**
     * @var bool
     */
    private bool $PrintInstructions;

    /**
     * @var null | 'ScanForm' | 'GlobalAdvantage' | 'GlobalPost' | 'DriverManifest' | 'All'
     */
    private ?string $ManifestType = null;

    /**
     * @var null | int
     */
    private ?int $NumberOfLabels = null;

    /**
     * Constructor
     *
     * @param null | string $Authenticator
     * @param null | \Knightar\StampsSoapClient\Type\Credentials $Credentials
     * @param null | string $IntegratorTxID
     * @param null | \Knightar\StampsSoapClient\Type\ArrayOfGuid $StampsTxIds
     * @param null | \Knightar\StampsSoapClient\Type\ArrayOfString $TrackingNumbers
     * @param null | \DateTimeInterface $ShipDate
     * @param null | string $PrintLayout
     * @param \Knightar\StampsSoapClient\Type\Address $FromAddress
     * @param 'Auto' | 'Png' | 'Gif' | 'Pdf' | 'Epl' | 'Jpg' | 'PrintOncePdf' | 'EncryptedPngUrl' | 'Zpl' | 'AZpl' | 'BZpl' | 'Bmp' | 'BmpMonochrome' | 'PngMonochrome' | 'JpgMonochrome' | 'GifMonochrome' $ImageType
     * @param bool $PrintInstructions
     * @param null | 'ScanForm' | 'GlobalAdvantage' | 'GlobalPost' | 'DriverManifest' | 'All' $ManifestType
     * @param null | int $NumberOfLabels
     */
    public function __construct(?string $Authenticator = null, ?\Knightar\StampsSoapClient\Type\Credentials $Credentials = null, ?string $IntegratorTxID, ?\Knightar\StampsSoapClient\Type\ArrayOfGuid $StampsTxIds, ?\Knightar\StampsSoapClient\Type\ArrayOfString $TrackingNumbers, ?\DateTimeInterface $ShipDate, ?string $PrintLayout, \Knightar\StampsSoapClient\Type\Address $FromAddress, string $ImageType, bool $PrintInstructions, ?string $ManifestType, ?int $NumberOfLabels)
    {
        $this->Authenticator = $Authenticator;
        $this->Credentials = $Credentials;
        $this->IntegratorTxID = $IntegratorTxID;
        $this->StampsTxIds = $StampsTxIds;
        $this->TrackingNumbers = $TrackingNumbers;
        $this->ShipDate = $ShipDate;
        $this->PrintLayout = $PrintLayout;
        $this->FromAddress = $FromAddress;
        $this->ImageType = $ImageType;
        $this->PrintInstructions = $PrintInstructions;
        $this->ManifestType = $ManifestType;
        $this->NumberOfLabels = $NumberOfLabels;
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
     * @return null | string
     */
    public function getIntegratorTxID() : ?string
    {
        return $this->IntegratorTxID;
    }

    /**
     * @param null | string $IntegratorTxID
     * @return static
     */
    public function withIntegratorTxID(?string $IntegratorTxID) : static
    {
        $new = clone $this;
        $new->IntegratorTxID = $IntegratorTxID;

        return $new;
    }

    /**
     * @return null | \Knightar\StampsSoapClient\Type\ArrayOfGuid
     */
    public function getStampsTxIds() : ?\Knightar\StampsSoapClient\Type\ArrayOfGuid
    {
        return $this->StampsTxIds;
    }

    /**
     * @param null | \Knightar\StampsSoapClient\Type\ArrayOfGuid $StampsTxIds
     * @return static
     */
    public function withStampsTxIds(?\Knightar\StampsSoapClient\Type\ArrayOfGuid $StampsTxIds) : static
    {
        $new = clone $this;
        $new->StampsTxIds = $StampsTxIds;

        return $new;
    }

    /**
     * @return null | \Knightar\StampsSoapClient\Type\ArrayOfString
     */
    public function getTrackingNumbers() : ?\Knightar\StampsSoapClient\Type\ArrayOfString
    {
        return $this->TrackingNumbers;
    }

    /**
     * @param null | \Knightar\StampsSoapClient\Type\ArrayOfString $TrackingNumbers
     * @return static
     */
    public function withTrackingNumbers(?\Knightar\StampsSoapClient\Type\ArrayOfString $TrackingNumbers) : static
    {
        $new = clone $this;
        $new->TrackingNumbers = $TrackingNumbers;

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

    /**
     * @return \Knightar\StampsSoapClient\Type\Address
     */
    public function getFromAddress() : \Knightar\StampsSoapClient\Type\Address
    {
        return $this->FromAddress;
    }

    /**
     * @param \Knightar\StampsSoapClient\Type\Address $FromAddress
     * @return static
     */
    public function withFromAddress(\Knightar\StampsSoapClient\Type\Address $FromAddress) : static
    {
        $new = clone $this;
        $new->FromAddress = $FromAddress;

        return $new;
    }

    /**
     * @return 'Auto' | 'Png' | 'Gif' | 'Pdf' | 'Epl' | 'Jpg' | 'PrintOncePdf' | 'EncryptedPngUrl' | 'Zpl' | 'AZpl' | 'BZpl' | 'Bmp' | 'BmpMonochrome' | 'PngMonochrome' | 'JpgMonochrome' | 'GifMonochrome'
     */
    public function getImageType() : string
    {
        return $this->ImageType;
    }

    /**
     * @param 'Auto' | 'Png' | 'Gif' | 'Pdf' | 'Epl' | 'Jpg' | 'PrintOncePdf' | 'EncryptedPngUrl' | 'Zpl' | 'AZpl' | 'BZpl' | 'Bmp' | 'BmpMonochrome' | 'PngMonochrome' | 'JpgMonochrome' | 'GifMonochrome' $ImageType
     * @return static
     */
    public function withImageType(string $ImageType) : static
    {
        $new = clone $this;
        $new->ImageType = $ImageType;

        return $new;
    }

    /**
     * @return bool
     */
    public function getPrintInstructions() : bool
    {
        return $this->PrintInstructions;
    }

    /**
     * @param bool $PrintInstructions
     * @return static
     */
    public function withPrintInstructions(bool $PrintInstructions) : static
    {
        $new = clone $this;
        $new->PrintInstructions = $PrintInstructions;

        return $new;
    }

    /**
     * @return null | 'ScanForm' | 'GlobalAdvantage' | 'GlobalPost' | 'DriverManifest' | 'All'
     */
    public function getManifestType() : ?string
    {
        return $this->ManifestType;
    }

    /**
     * @param null | 'ScanForm' | 'GlobalAdvantage' | 'GlobalPost' | 'DriverManifest' | 'All' $ManifestType
     * @return static
     */
    public function withManifestType(?string $ManifestType) : static
    {
        $new = clone $this;
        $new->ManifestType = $ManifestType;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getNumberOfLabels() : ?int
    {
        return $this->NumberOfLabels;
    }

    /**
     * @param null | int $NumberOfLabels
     * @return static
     */
    public function withNumberOfLabels(?int $NumberOfLabels) : static
    {
        $new = clone $this;
        $new->NumberOfLabels = $NumberOfLabels;

        return $new;
    }
}

