<?php

namespace Knightar\StampsSoapClient\Type;

class AdjustmentDetails
{
    /**
     * @var 'NoAdjustment' | 'Processed' | 'Refunded'
     */
    private string $AdjustmentStatus;

    /**
     * @var null | \DateTimeInterface
     */
    private ?\DateTimeInterface $DateAdjustmentProcessed = null;

    /**
     * @var null | \DateTimeInterface
     */
    private ?\DateTimeInterface $DateRecorded = null;

    /**
     * @var string
     */
    private string $ActualTrackingNumber;

    /**
     * @var null | string
     */
    private ?string $ActualFromZIPCode = null;

    /**
     * @var null | string
     */
    private ?string $ActualToCountry = null;

    /**
     * @var null | string
     */
    private ?string $ActualToZip = null;

    /**
     * @var \Knightar\StampsSoapClient\Type\ActualService
     */
    private \Knightar\StampsSoapClient\Type\ActualService $ActualService;

    /**
     * @var null | \Knightar\StampsSoapClient\Type\ArrayOfAddOnV20
     */
    private ?\Knightar\StampsSoapClient\Type\ArrayOfAddOnV20 $ActualAddOns = null;

    /**
     * @var \Knightar\StampsSoapClient\Type\ActualPackageInfo
     */
    private \Knightar\StampsSoapClient\Type\ActualPackageInfo $ActualPackageInfo;

    /**
     * @var null | \Knightar\StampsSoapClient\Type\DisputeInfoV1
     */
    private ?\Knightar\StampsSoapClient\Type\DisputeInfoV1 $Dispute = null;

    /**
     * @var null | string
     */
    private ?string $ActualFromCountry = null;

    /**
     * @var null | string
     */
    private ?string $ActualFromCity = null;

    /**
     * @var null | string
     */
    private ?string $ActualToCity = null;

    /**
     * @var null | \Knightar\StampsSoapClient\Type\ArrayOfSurchargeV5
     */
    private ?\Knightar\StampsSoapClient\Type\ArrayOfSurchargeV5 $ActualSurcharges = null;

    /**
     * @var null | float
     */
    private ?float $OtherSurchargeAmounts = null;

    /**
     * @return 'NoAdjustment' | 'Processed' | 'Refunded'
     */
    public function getAdjustmentStatus() : string
    {
        return $this->AdjustmentStatus;
    }

    /**
     * @param 'NoAdjustment' | 'Processed' | 'Refunded' $AdjustmentStatus
     * @return static
     */
    public function withAdjustmentStatus(string $AdjustmentStatus) : static
    {
        $new = clone $this;
        $new->AdjustmentStatus = $AdjustmentStatus;

        return $new;
    }

    /**
     * @return null | \DateTimeInterface
     */
    public function getDateAdjustmentProcessed() : ?\DateTimeInterface
    {
        return $this->DateAdjustmentProcessed;
    }

    /**
     * @param null | \DateTimeInterface $DateAdjustmentProcessed
     * @return static
     */
    public function withDateAdjustmentProcessed(?\DateTimeInterface $DateAdjustmentProcessed) : static
    {
        $new = clone $this;
        $new->DateAdjustmentProcessed = $DateAdjustmentProcessed;

        return $new;
    }

    /**
     * @return null | \DateTimeInterface
     */
    public function getDateRecorded() : ?\DateTimeInterface
    {
        return $this->DateRecorded;
    }

    /**
     * @param null | \DateTimeInterface $DateRecorded
     * @return static
     */
    public function withDateRecorded(?\DateTimeInterface $DateRecorded) : static
    {
        $new = clone $this;
        $new->DateRecorded = $DateRecorded;

        return $new;
    }

    /**
     * @return string
     */
    public function getActualTrackingNumber() : string
    {
        return $this->ActualTrackingNumber;
    }

    /**
     * @param string $ActualTrackingNumber
     * @return static
     */
    public function withActualTrackingNumber(string $ActualTrackingNumber) : static
    {
        $new = clone $this;
        $new->ActualTrackingNumber = $ActualTrackingNumber;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getActualFromZIPCode() : ?string
    {
        return $this->ActualFromZIPCode;
    }

    /**
     * @param null | string $ActualFromZIPCode
     * @return static
     */
    public function withActualFromZIPCode(?string $ActualFromZIPCode) : static
    {
        $new = clone $this;
        $new->ActualFromZIPCode = $ActualFromZIPCode;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getActualToCountry() : ?string
    {
        return $this->ActualToCountry;
    }

    /**
     * @param null | string $ActualToCountry
     * @return static
     */
    public function withActualToCountry(?string $ActualToCountry) : static
    {
        $new = clone $this;
        $new->ActualToCountry = $ActualToCountry;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getActualToZip() : ?string
    {
        return $this->ActualToZip;
    }

    /**
     * @param null | string $ActualToZip
     * @return static
     */
    public function withActualToZip(?string $ActualToZip) : static
    {
        $new = clone $this;
        $new->ActualToZip = $ActualToZip;

        return $new;
    }

    /**
     * @return \Knightar\StampsSoapClient\Type\ActualService
     */
    public function getActualService() : \Knightar\StampsSoapClient\Type\ActualService
    {
        return $this->ActualService;
    }

    /**
     * @param \Knightar\StampsSoapClient\Type\ActualService $ActualService
     * @return static
     */
    public function withActualService(\Knightar\StampsSoapClient\Type\ActualService $ActualService) : static
    {
        $new = clone $this;
        $new->ActualService = $ActualService;

        return $new;
    }

    /**
     * @return null | \Knightar\StampsSoapClient\Type\ArrayOfAddOnV20
     */
    public function getActualAddOns() : ?\Knightar\StampsSoapClient\Type\ArrayOfAddOnV20
    {
        return $this->ActualAddOns;
    }

    /**
     * @param null | \Knightar\StampsSoapClient\Type\ArrayOfAddOnV20 $ActualAddOns
     * @return static
     */
    public function withActualAddOns(?\Knightar\StampsSoapClient\Type\ArrayOfAddOnV20 $ActualAddOns) : static
    {
        $new = clone $this;
        $new->ActualAddOns = $ActualAddOns;

        return $new;
    }

    /**
     * @return \Knightar\StampsSoapClient\Type\ActualPackageInfo
     */
    public function getActualPackageInfo() : \Knightar\StampsSoapClient\Type\ActualPackageInfo
    {
        return $this->ActualPackageInfo;
    }

    /**
     * @param \Knightar\StampsSoapClient\Type\ActualPackageInfo $ActualPackageInfo
     * @return static
     */
    public function withActualPackageInfo(\Knightar\StampsSoapClient\Type\ActualPackageInfo $ActualPackageInfo) : static
    {
        $new = clone $this;
        $new->ActualPackageInfo = $ActualPackageInfo;

        return $new;
    }

    /**
     * @return null | \Knightar\StampsSoapClient\Type\DisputeInfoV1
     */
    public function getDispute() : ?\Knightar\StampsSoapClient\Type\DisputeInfoV1
    {
        return $this->Dispute;
    }

    /**
     * @param null | \Knightar\StampsSoapClient\Type\DisputeInfoV1 $Dispute
     * @return static
     */
    public function withDispute(?\Knightar\StampsSoapClient\Type\DisputeInfoV1 $Dispute) : static
    {
        $new = clone $this;
        $new->Dispute = $Dispute;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getActualFromCountry() : ?string
    {
        return $this->ActualFromCountry;
    }

    /**
     * @param null | string $ActualFromCountry
     * @return static
     */
    public function withActualFromCountry(?string $ActualFromCountry) : static
    {
        $new = clone $this;
        $new->ActualFromCountry = $ActualFromCountry;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getActualFromCity() : ?string
    {
        return $this->ActualFromCity;
    }

    /**
     * @param null | string $ActualFromCity
     * @return static
     */
    public function withActualFromCity(?string $ActualFromCity) : static
    {
        $new = clone $this;
        $new->ActualFromCity = $ActualFromCity;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getActualToCity() : ?string
    {
        return $this->ActualToCity;
    }

    /**
     * @param null | string $ActualToCity
     * @return static
     */
    public function withActualToCity(?string $ActualToCity) : static
    {
        $new = clone $this;
        $new->ActualToCity = $ActualToCity;

        return $new;
    }

    /**
     * @return null | \Knightar\StampsSoapClient\Type\ArrayOfSurchargeV5
     */
    public function getActualSurcharges() : ?\Knightar\StampsSoapClient\Type\ArrayOfSurchargeV5
    {
        return $this->ActualSurcharges;
    }

    /**
     * @param null | \Knightar\StampsSoapClient\Type\ArrayOfSurchargeV5 $ActualSurcharges
     * @return static
     */
    public function withActualSurcharges(?\Knightar\StampsSoapClient\Type\ArrayOfSurchargeV5 $ActualSurcharges) : static
    {
        $new = clone $this;
        $new->ActualSurcharges = $ActualSurcharges;

        return $new;
    }

    /**
     * @return null | float
     */
    public function getOtherSurchargeAmounts() : ?float
    {
        return $this->OtherSurchargeAmounts;
    }

    /**
     * @param null | float $OtherSurchargeAmounts
     * @return static
     */
    public function withOtherSurchargeAmounts(?float $OtherSurchargeAmounts) : static
    {
        $new = clone $this;
        $new->OtherSurchargeAmounts = $OtherSurchargeAmounts;

        return $new;
    }
}

