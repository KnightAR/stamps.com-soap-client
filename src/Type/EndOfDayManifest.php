<?php

namespace Knightar\StampsSoapClient\Type;

class EndOfDayManifest
{
    /**
     * @var 'None' | 'Usps' | 'Dhl' | 'Ups'
     */
    private string $PickupCarrier;

    /**
     * @var 'ScanForm' | 'GlobalAdvantage' | 'GlobalPost' | 'DriverManifest' | 'All'
     */
    private string $ManifestType;

    /**
     * @var null | string
     */
    private ?string $ManifestId = null;

    /**
     * @var null | string
     */
    private ?string $ManifestUrl = null;

    /**
     * @var null | \Knightar\StampsSoapClient\Type\ArrayOfContainerLabelV1
     */
    private ?\Knightar\StampsSoapClient\Type\ArrayOfContainerLabelV1 $ContainerLabels = null;

    /**
     * @return 'None' | 'Usps' | 'Dhl' | 'Ups'
     */
    public function getPickupCarrier() : string
    {
        return $this->PickupCarrier;
    }

    /**
     * @param 'None' | 'Usps' | 'Dhl' | 'Ups' $PickupCarrier
     * @return static
     */
    public function withPickupCarrier(string $PickupCarrier) : static
    {
        $new = clone $this;
        $new->PickupCarrier = $PickupCarrier;

        return $new;
    }

    /**
     * @return 'ScanForm' | 'GlobalAdvantage' | 'GlobalPost' | 'DriverManifest' | 'All'
     */
    public function getManifestType() : string
    {
        return $this->ManifestType;
    }

    /**
     * @param 'ScanForm' | 'GlobalAdvantage' | 'GlobalPost' | 'DriverManifest' | 'All' $ManifestType
     * @return static
     */
    public function withManifestType(string $ManifestType) : static
    {
        $new = clone $this;
        $new->ManifestType = $ManifestType;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getManifestId() : ?string
    {
        return $this->ManifestId;
    }

    /**
     * @param null | string $ManifestId
     * @return static
     */
    public function withManifestId(?string $ManifestId) : static
    {
        $new = clone $this;
        $new->ManifestId = $ManifestId;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getManifestUrl() : ?string
    {
        return $this->ManifestUrl;
    }

    /**
     * @param null | string $ManifestUrl
     * @return static
     */
    public function withManifestUrl(?string $ManifestUrl) : static
    {
        $new = clone $this;
        $new->ManifestUrl = $ManifestUrl;

        return $new;
    }

    /**
     * @return null | \Knightar\StampsSoapClient\Type\ArrayOfContainerLabelV1
     */
    public function getContainerLabels() : ?\Knightar\StampsSoapClient\Type\ArrayOfContainerLabelV1
    {
        return $this->ContainerLabels;
    }

    /**
     * @param null | \Knightar\StampsSoapClient\Type\ArrayOfContainerLabelV1 $ContainerLabels
     * @return static
     */
    public function withContainerLabels(?\Knightar\StampsSoapClient\Type\ArrayOfContainerLabelV1 $ContainerLabels) : static
    {
        $new = clone $this;
        $new->ContainerLabels = $ContainerLabels;

        return $new;
    }
}

