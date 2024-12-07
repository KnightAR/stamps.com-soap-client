<?php

namespace Knightar\StampsSoapClient\Type;

use Phpro\SoapClient\Type\RequestInterface;

class ScheduleCarrierPickup implements RequestInterface
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
     * @var \Knightar\StampsSoapClient\Type\CarrierPickupContactInformationV2
     */
    private \Knightar\StampsSoapClient\Type\CarrierPickupContactInformationV2 $ContactInformation;

    /**
     * @var \Knightar\StampsSoapClient\Type\CarrierPickupAddressV3
     */
    private \Knightar\StampsSoapClient\Type\CarrierPickupAddressV3 $Address;

    /**
     * @var \Knightar\StampsSoapClient\Type\CarrierPickupPackageInformation
     */
    private \Knightar\StampsSoapClient\Type\CarrierPickupPackageInformation $PackageInformation;

    /**
     * @var null | 'All' | 'USPS' | 'FedEx' | 'DHLExpress' | 'UPS' | 'CanadaPost' | 'DhlECommerce' | 'Zorbit'
     */
    private ?string $Carrier = null;

    /**
     * @var null | string
     */
    private ?string $PickupTimeEarliest = null;

    /**
     * @var null | string
     */
    private ?string $PickupTimeLatest = null;

    /**
     * @var null | 'Default' | 'AutoPickup'
     */
    private ?string $PickupType = null;

    /**
     * Constructor
     *
     * @param null | string $Authenticator
     * @param null | \Knightar\StampsSoapClient\Type\Credentials $Credentials
     * @param \Knightar\StampsSoapClient\Type\CarrierPickupContactInformationV2 $ContactInformation
     * @param \Knightar\StampsSoapClient\Type\CarrierPickupAddressV3 $Address
     * @param \Knightar\StampsSoapClient\Type\CarrierPickupPackageInformation $PackageInformation
     * @param null | 'All' | 'USPS' | 'FedEx' | 'DHLExpress' | 'UPS' | 'CanadaPost' | 'DhlECommerce' | 'Zorbit' $Carrier
     * @param null | string $PickupTimeEarliest
     * @param null | string $PickupTimeLatest
     * @param null | 'Default' | 'AutoPickup' $PickupType
     */
    public function __construct(?string $Authenticator = null, ?\Knightar\StampsSoapClient\Type\Credentials $Credentials = null, \Knightar\StampsSoapClient\Type\CarrierPickupContactInformationV2 $ContactInformation, \Knightar\StampsSoapClient\Type\CarrierPickupAddressV3 $Address, \Knightar\StampsSoapClient\Type\CarrierPickupPackageInformation $PackageInformation, ?string $Carrier, ?string $PickupTimeEarliest, ?string $PickupTimeLatest, ?string $PickupType)
    {
        $this->Authenticator = $Authenticator;
        $this->Credentials = $Credentials;
        $this->ContactInformation = $ContactInformation;
        $this->Address = $Address;
        $this->PackageInformation = $PackageInformation;
        $this->Carrier = $Carrier;
        $this->PickupTimeEarliest = $PickupTimeEarliest;
        $this->PickupTimeLatest = $PickupTimeLatest;
        $this->PickupType = $PickupType;
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
     * @return \Knightar\StampsSoapClient\Type\CarrierPickupAddressV3
     */
    public function getAddress() : \Knightar\StampsSoapClient\Type\CarrierPickupAddressV3
    {
        return $this->Address;
    }

    /**
     * @param \Knightar\StampsSoapClient\Type\CarrierPickupAddressV3 $Address
     * @return static
     */
    public function withAddress(\Knightar\StampsSoapClient\Type\CarrierPickupAddressV3 $Address) : static
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
     * @return null | 'All' | 'USPS' | 'FedEx' | 'DHLExpress' | 'UPS' | 'CanadaPost' | 'DhlECommerce' | 'Zorbit'
     */
    public function getCarrier() : ?string
    {
        return $this->Carrier;
    }

    /**
     * @param null | 'All' | 'USPS' | 'FedEx' | 'DHLExpress' | 'UPS' | 'CanadaPost' | 'DhlECommerce' | 'Zorbit' $Carrier
     * @return static
     */
    public function withCarrier(?string $Carrier) : static
    {
        $new = clone $this;
        $new->Carrier = $Carrier;

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
     * @return null | 'Default' | 'AutoPickup'
     */
    public function getPickupType() : ?string
    {
        return $this->PickupType;
    }

    /**
     * @param null | 'Default' | 'AutoPickup' $PickupType
     * @return static
     */
    public function withPickupType(?string $PickupType) : static
    {
        $new = clone $this;
        $new->PickupType = $PickupType;

        return $new;
    }
}

