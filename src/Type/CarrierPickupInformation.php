<?php

namespace Knightar\StampsSoapClient\Type;

class CarrierPickupInformation
{
    /**
     * @var string
     */
    private string $ConfirmationNumber;

    /**
     * @var 'All' | 'USPS' | 'FedEx' | 'DHLExpress' | 'UPS' | 'CanadaPost' | 'DhlECommerce' | 'Zorbit'
     */
    private string $Carrier;

    /**
     * @var \DateTimeInterface
     */
    private \DateTimeInterface $PickupDate;

    /**
     * @var string
     */
    private string $PickUpDayOfWeek;

    /**
     * @var \Knightar\StampsSoapClient\Type\CarrierPickupContactInformationV2
     */
    private \Knightar\StampsSoapClient\Type\CarrierPickupContactInformationV2 $ContactInformation;

    /**
     * @var \Knightar\StampsSoapClient\Type\CarrierPickupAddressV2
     */
    private \Knightar\StampsSoapClient\Type\CarrierPickupAddressV2 $Address;

    /**
     * @var \Knightar\StampsSoapClient\Type\CarrierPickupPackageInformation
     */
    private \Knightar\StampsSoapClient\Type\CarrierPickupPackageInformation $PackageInformation;

    /**
     * @var null | string
     */
    private ?string $PickupTimeEarliest = null;

    /**
     * @var null | string
     */
    private ?string $PickupTimeLatest = null;

    /**
     * @var float
     */
    private float $EstimatedAmount;

    /**
     * @var 'Default' | 'AutoPickup'
     */
    private string $PickupType;

    /**
     * @return string
     */
    public function getConfirmationNumber() : string
    {
        return $this->ConfirmationNumber;
    }

    /**
     * @param string $ConfirmationNumber
     * @return static
     */
    public function withConfirmationNumber(string $ConfirmationNumber) : static
    {
        $new = clone $this;
        $new->ConfirmationNumber = $ConfirmationNumber;

        return $new;
    }

    /**
     * @return 'All' | 'USPS' | 'FedEx' | 'DHLExpress' | 'UPS' | 'CanadaPost' | 'DhlECommerce' | 'Zorbit'
     */
    public function getCarrier() : string
    {
        return $this->Carrier;
    }

    /**
     * @param 'All' | 'USPS' | 'FedEx' | 'DHLExpress' | 'UPS' | 'CanadaPost' | 'DhlECommerce' | 'Zorbit' $Carrier
     * @return static
     */
    public function withCarrier(string $Carrier) : static
    {
        $new = clone $this;
        $new->Carrier = $Carrier;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getPickupDate() : \DateTimeInterface
    {
        return $this->PickupDate;
    }

    /**
     * @param \DateTimeInterface $PickupDate
     * @return static
     */
    public function withPickupDate(\DateTimeInterface $PickupDate) : static
    {
        $new = clone $this;
        $new->PickupDate = $PickupDate;

        return $new;
    }

    /**
     * @return string
     */
    public function getPickUpDayOfWeek() : string
    {
        return $this->PickUpDayOfWeek;
    }

    /**
     * @param string $PickUpDayOfWeek
     * @return static
     */
    public function withPickUpDayOfWeek(string $PickUpDayOfWeek) : static
    {
        $new = clone $this;
        $new->PickUpDayOfWeek = $PickUpDayOfWeek;

        return $new;
    }

    /**
     * @return \Knightar\StampsSoapClient\Type\CarrierPickupContactInformationV2
     */
    public function getContactInformation() : \Knightar\StampsSoapClient\Type\CarrierPickupContactInformationV2
    {
        return $this->ContactInformation;
    }

    /**
     * @param \Knightar\StampsSoapClient\Type\CarrierPickupContactInformationV2 $ContactInformation
     * @return static
     */
    public function withContactInformation(\Knightar\StampsSoapClient\Type\CarrierPickupContactInformationV2 $ContactInformation) : static
    {
        $new = clone $this;
        $new->ContactInformation = $ContactInformation;

        return $new;
    }

    /**
     * @return \Knightar\StampsSoapClient\Type\CarrierPickupAddressV2
     */
    public function getAddress() : \Knightar\StampsSoapClient\Type\CarrierPickupAddressV2
    {
        return $this->Address;
    }

    /**
     * @param \Knightar\StampsSoapClient\Type\CarrierPickupAddressV2 $Address
     * @return static
     */
    public function withAddress(\Knightar\StampsSoapClient\Type\CarrierPickupAddressV2 $Address) : static
    {
        $new = clone $this;
        $new->Address = $Address;

        return $new;
    }

    /**
     * @return \Knightar\StampsSoapClient\Type\CarrierPickupPackageInformation
     */
    public function getPackageInformation() : \Knightar\StampsSoapClient\Type\CarrierPickupPackageInformation
    {
        return $this->PackageInformation;
    }

    /**
     * @param \Knightar\StampsSoapClient\Type\CarrierPickupPackageInformation $PackageInformation
     * @return static
     */
    public function withPackageInformation(\Knightar\StampsSoapClient\Type\CarrierPickupPackageInformation $PackageInformation) : static
    {
        $new = clone $this;
        $new->PackageInformation = $PackageInformation;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getPickupTimeEarliest() : ?string
    {
        return $this->PickupTimeEarliest;
    }

    /**
     * @param null | string $PickupTimeEarliest
     * @return static
     */
    public function withPickupTimeEarliest(?string $PickupTimeEarliest) : static
    {
        $new = clone $this;
        $new->PickupTimeEarliest = $PickupTimeEarliest;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getPickupTimeLatest() : ?string
    {
        return $this->PickupTimeLatest;
    }

    /**
     * @param null | string $PickupTimeLatest
     * @return static
     */
    public function withPickupTimeLatest(?string $PickupTimeLatest) : static
    {
        $new = clone $this;
        $new->PickupTimeLatest = $PickupTimeLatest;

        return $new;
    }

    /**
     * @return float
     */
    public function getEstimatedAmount() : float
    {
        return $this->EstimatedAmount;
    }

    /**
     * @param float $EstimatedAmount
     * @return static
     */
    public function withEstimatedAmount(float $EstimatedAmount) : static
    {
        $new = clone $this;
        $new->EstimatedAmount = $EstimatedAmount;

        return $new;
    }

    /**
     * @return 'Default' | 'AutoPickup'
     */
    public function getPickupType() : string
    {
        return $this->PickupType;
    }

    /**
     * @param 'Default' | 'AutoPickup' $PickupType
     * @return static
     */
    public function withPickupType(string $PickupType) : static
    {
        $new = clone $this;
        $new->PickupType = $PickupType;

        return $new;
    }
}

