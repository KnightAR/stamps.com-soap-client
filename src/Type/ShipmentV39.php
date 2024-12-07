<?php

namespace Knightar\StampsSoapClient\Type;

class ShipmentV39
{
    /**
     * @var null | string
     */
    private ?string $StampsTxId = null;

    /**
     * @var null | 'Printed' | 'In Transit' | 'Received at Opening Unit' | 'Delivered' | 'Pending Refund' | 'Refunded' | 'Voided' | 'Unprinted' | 'Expired' | 'Recipient Action Required' | 'Action Required'
     */
    private ?string $ShipmentStatus = null;

    /**
     * @var null | \DateTimeInterface
     */
    private ?\DateTimeInterface $PrintDate = null;

    /**
     * @var null | \DateTimeInterface
     */
    private ?\DateTimeInterface $MailDate = null;

    /**
     * @var null | \DateTimeInterface
     */
    private ?\DateTimeInterface $DeliveredDate = null;

    /**
     * @var null | string
     */
    private ?string $TrackingNumber = null;

    /**
     * @var null | string
     */
    private ?string $ReturnTrackingNumber = null;

    /**
     * @var null | string
     */
    private ?string $ScanFormId = null;

    /**
     * @var null | \Knightar\StampsSoapClient\Type\ServicesV22
     */
    private ?\Knightar\StampsSoapClient\Type\ServicesV22 $Service = null;

    /**
     * @var null | \Knightar\StampsSoapClient\Type\ArrayOfAddOnV20
     */
    private ?\Knightar\StampsSoapClient\Type\ArrayOfAddOnV20 $AddOns = null;

    /**
     * @var null | string
     */
    private ?string $FromZIPCode = null;

    /**
     * @var null | \Knightar\StampsSoapClient\Type\Address
     */
    private ?\Knightar\StampsSoapClient\Type\Address $ReturnTo = null;

    /**
     * @var null | \Knightar\StampsSoapClient\Type\Address
     */
    private ?\Knightar\StampsSoapClient\Type\Address $ShipTo = null;

    /**
     * @var null | \Knightar\StampsSoapClient\Type\PackageInfoV6
     */
    private ?\Knightar\StampsSoapClient\Type\PackageInfoV6 $PackageInfo = null;

    /**
     * @var null | \Knightar\StampsSoapClient\Type\ReferencesV3
     */
    private ?\Knightar\StampsSoapClient\Type\ReferencesV3 $References = null;

    /**
     * @var null | 'E-refund' | 'Mail-in'
     */
    private ?string $RefundType = null;

    /**
     * @var null | \Knightar\StampsSoapClient\Type\RefundStatusV1
     */
    private ?\Knightar\StampsSoapClient\Type\RefundStatusV1 $RefundStatus = null;

    /**
     * @var null | \DateTimeInterface
     */
    private ?\DateTimeInterface $ExpiryDate = null;

    /**
     * @var null | \Knightar\StampsSoapClient\Type\ServicesV22
     */
    private ?\Knightar\StampsSoapClient\Type\ServicesV22 $Reserved = null;

    /**
     * @var null | \Knightar\StampsSoapClient\Type\AdjustmentDetails
     */
    private ?\Knightar\StampsSoapClient\Type\AdjustmentDetails $AdjustmentDetails = null;

    /**
     * @var null | \Knightar\StampsSoapClient\Type\PGClaimDetails
     */
    private ?\Knightar\StampsSoapClient\Type\PGClaimDetails $ClaimDetails = null;

    /**
     * @var null | \Knightar\StampsSoapClient\Type\ArrayOfSurchargeV5
     */
    private ?\Knightar\StampsSoapClient\Type\ArrayOfSurchargeV5 $Surcharges = null;

    /**
     * @var null | int
     */
    private ?int $LabelCategory = null;

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
     * @return null | 'Printed' | 'In Transit' | 'Received at Opening Unit' | 'Delivered' | 'Pending Refund' | 'Refunded' | 'Voided' | 'Unprinted' | 'Expired' | 'Recipient Action Required' | 'Action Required'
     */
    public function getShipmentStatus() : ?string
    {
        return $this->ShipmentStatus;
    }

    /**
     * @param null | 'Printed' | 'In Transit' | 'Received at Opening Unit' | 'Delivered' | 'Pending Refund' | 'Refunded' | 'Voided' | 'Unprinted' | 'Expired' | 'Recipient Action Required' | 'Action Required' $ShipmentStatus
     * @return static
     */
    public function withShipmentStatus(?string $ShipmentStatus) : static
    {
        $new = clone $this;
        $new->ShipmentStatus = $ShipmentStatus;

        return $new;
    }

    /**
     * @return null | \DateTimeInterface
     */
    public function getPrintDate() : ?\DateTimeInterface
    {
        return $this->PrintDate;
    }

    /**
     * @param null | \DateTimeInterface $PrintDate
     * @return static
     */
    public function withPrintDate(?\DateTimeInterface $PrintDate) : static
    {
        $new = clone $this;
        $new->PrintDate = $PrintDate;

        return $new;
    }

    /**
     * @return null | \DateTimeInterface
     */
    public function getMailDate() : ?\DateTimeInterface
    {
        return $this->MailDate;
    }

    /**
     * @param null | \DateTimeInterface $MailDate
     * @return static
     */
    public function withMailDate(?\DateTimeInterface $MailDate) : static
    {
        $new = clone $this;
        $new->MailDate = $MailDate;

        return $new;
    }

    /**
     * @return null | \DateTimeInterface
     */
    public function getDeliveredDate() : ?\DateTimeInterface
    {
        return $this->DeliveredDate;
    }

    /**
     * @param null | \DateTimeInterface $DeliveredDate
     * @return static
     */
    public function withDeliveredDate(?\DateTimeInterface $DeliveredDate) : static
    {
        $new = clone $this;
        $new->DeliveredDate = $DeliveredDate;

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
    public function getReturnTrackingNumber() : ?string
    {
        return $this->ReturnTrackingNumber;
    }

    /**
     * @param null | string $ReturnTrackingNumber
     * @return static
     */
    public function withReturnTrackingNumber(?string $ReturnTrackingNumber) : static
    {
        $new = clone $this;
        $new->ReturnTrackingNumber = $ReturnTrackingNumber;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getScanFormId() : ?string
    {
        return $this->ScanFormId;
    }

    /**
     * @param null | string $ScanFormId
     * @return static
     */
    public function withScanFormId(?string $ScanFormId) : static
    {
        $new = clone $this;
        $new->ScanFormId = $ScanFormId;

        return $new;
    }

    /**
     * @return null | \Knightar\StampsSoapClient\Type\ServicesV22
     */
    public function getService() : ?\Knightar\StampsSoapClient\Type\ServicesV22
    {
        return $this->Service;
    }

    /**
     * @param null | \Knightar\StampsSoapClient\Type\ServicesV22 $Service
     * @return static
     */
    public function withService(?\Knightar\StampsSoapClient\Type\ServicesV22 $Service) : static
    {
        $new = clone $this;
        $new->Service = $Service;

        return $new;
    }

    /**
     * @return null | \Knightar\StampsSoapClient\Type\ArrayOfAddOnV20
     */
    public function getAddOns() : ?\Knightar\StampsSoapClient\Type\ArrayOfAddOnV20
    {
        return $this->AddOns;
    }

    /**
     * @param null | \Knightar\StampsSoapClient\Type\ArrayOfAddOnV20 $AddOns
     * @return static
     */
    public function withAddOns(?\Knightar\StampsSoapClient\Type\ArrayOfAddOnV20 $AddOns) : static
    {
        $new = clone $this;
        $new->AddOns = $AddOns;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getFromZIPCode() : ?string
    {
        return $this->FromZIPCode;
    }

    /**
     * @param null | string $FromZIPCode
     * @return static
     */
    public function withFromZIPCode(?string $FromZIPCode) : static
    {
        $new = clone $this;
        $new->FromZIPCode = $FromZIPCode;

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
     * @return null | \Knightar\StampsSoapClient\Type\Address
     */
    public function getShipTo() : ?\Knightar\StampsSoapClient\Type\Address
    {
        return $this->ShipTo;
    }

    /**
     * @param null | \Knightar\StampsSoapClient\Type\Address $ShipTo
     * @return static
     */
    public function withShipTo(?\Knightar\StampsSoapClient\Type\Address $ShipTo) : static
    {
        $new = clone $this;
        $new->ShipTo = $ShipTo;

        return $new;
    }

    /**
     * @return null | \Knightar\StampsSoapClient\Type\PackageInfoV6
     */
    public function getPackageInfo() : ?\Knightar\StampsSoapClient\Type\PackageInfoV6
    {
        return $this->PackageInfo;
    }

    /**
     * @param null | \Knightar\StampsSoapClient\Type\PackageInfoV6 $PackageInfo
     * @return static
     */
    public function withPackageInfo(?\Knightar\StampsSoapClient\Type\PackageInfoV6 $PackageInfo) : static
    {
        $new = clone $this;
        $new->PackageInfo = $PackageInfo;

        return $new;
    }

    /**
     * @return null | \Knightar\StampsSoapClient\Type\ReferencesV3
     */
    public function getReferences() : ?\Knightar\StampsSoapClient\Type\ReferencesV3
    {
        return $this->References;
    }

    /**
     * @param null | \Knightar\StampsSoapClient\Type\ReferencesV3 $References
     * @return static
     */
    public function withReferences(?\Knightar\StampsSoapClient\Type\ReferencesV3 $References) : static
    {
        $new = clone $this;
        $new->References = $References;

        return $new;
    }

    /**
     * @return null | 'E-refund' | 'Mail-in'
     */
    public function getRefundType() : ?string
    {
        return $this->RefundType;
    }

    /**
     * @param null | 'E-refund' | 'Mail-in' $RefundType
     * @return static
     */
    public function withRefundType(?string $RefundType) : static
    {
        $new = clone $this;
        $new->RefundType = $RefundType;

        return $new;
    }

    /**
     * @return null | \Knightar\StampsSoapClient\Type\RefundStatusV1
     */
    public function getRefundStatus() : ?\Knightar\StampsSoapClient\Type\RefundStatusV1
    {
        return $this->RefundStatus;
    }

    /**
     * @param null | \Knightar\StampsSoapClient\Type\RefundStatusV1 $RefundStatus
     * @return static
     */
    public function withRefundStatus(?\Knightar\StampsSoapClient\Type\RefundStatusV1 $RefundStatus) : static
    {
        $new = clone $this;
        $new->RefundStatus = $RefundStatus;

        return $new;
    }

    /**
     * @return null | \DateTimeInterface
     */
    public function getExpiryDate() : ?\DateTimeInterface
    {
        return $this->ExpiryDate;
    }

    /**
     * @param null | \DateTimeInterface $ExpiryDate
     * @return static
     */
    public function withExpiryDate(?\DateTimeInterface $ExpiryDate) : static
    {
        $new = clone $this;
        $new->ExpiryDate = $ExpiryDate;

        return $new;
    }

    /**
     * @return null | \Knightar\StampsSoapClient\Type\ServicesV22
     */
    public function getReserved() : ?\Knightar\StampsSoapClient\Type\ServicesV22
    {
        return $this->Reserved;
    }

    /**
     * @param null | \Knightar\StampsSoapClient\Type\ServicesV22 $Reserved
     * @return static
     */
    public function withReserved(?\Knightar\StampsSoapClient\Type\ServicesV22 $Reserved) : static
    {
        $new = clone $this;
        $new->Reserved = $Reserved;

        return $new;
    }

    /**
     * @return null | \Knightar\StampsSoapClient\Type\AdjustmentDetails
     */
    public function getAdjustmentDetails() : ?\Knightar\StampsSoapClient\Type\AdjustmentDetails
    {
        return $this->AdjustmentDetails;
    }

    /**
     * @param null | \Knightar\StampsSoapClient\Type\AdjustmentDetails $AdjustmentDetails
     * @return static
     */
    public function withAdjustmentDetails(?\Knightar\StampsSoapClient\Type\AdjustmentDetails $AdjustmentDetails) : static
    {
        $new = clone $this;
        $new->AdjustmentDetails = $AdjustmentDetails;

        return $new;
    }

    /**
     * @return null | \Knightar\StampsSoapClient\Type\PGClaimDetails
     */
    public function getClaimDetails() : ?\Knightar\StampsSoapClient\Type\PGClaimDetails
    {
        return $this->ClaimDetails;
    }

    /**
     * @param null | \Knightar\StampsSoapClient\Type\PGClaimDetails $ClaimDetails
     * @return static
     */
    public function withClaimDetails(?\Knightar\StampsSoapClient\Type\PGClaimDetails $ClaimDetails) : static
    {
        $new = clone $this;
        $new->ClaimDetails = $ClaimDetails;

        return $new;
    }

    /**
     * @return null | \Knightar\StampsSoapClient\Type\ArrayOfSurchargeV5
     */
    public function getSurcharges() : ?\Knightar\StampsSoapClient\Type\ArrayOfSurchargeV5
    {
        return $this->Surcharges;
    }

    /**
     * @param null | \Knightar\StampsSoapClient\Type\ArrayOfSurchargeV5 $Surcharges
     * @return static
     */
    public function withSurcharges(?\Knightar\StampsSoapClient\Type\ArrayOfSurchargeV5 $Surcharges) : static
    {
        $new = clone $this;
        $new->Surcharges = $Surcharges;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getLabelCategory() : ?int
    {
        return $this->LabelCategory;
    }

    /**
     * @param null | int $LabelCategory
     * @return static
     */
    public function withLabelCategory(?int $LabelCategory) : static
    {
        $new = clone $this;
        $new->LabelCategory = $LabelCategory;

        return $new;
    }
}

