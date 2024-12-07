<?php

namespace Knightar\StampsSoapClient\Type;

use Phpro\SoapClient\Type\RequestInterface;

class ModifyCarrierPickup implements RequestInterface
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
     * @var null | \Knightar\StampsSoapClient\Type\CarrierPickupContactInformation
     */
    private ?\Knightar\StampsSoapClient\Type\CarrierPickupContactInformation $ContactInformation = null;

    /**
     * @var null | \Knightar\StampsSoapClient\Type\CarrierPickupPackageInformation
     */
    private ?\Knightar\StampsSoapClient\Type\CarrierPickupPackageInformation $PackageInformation = null;

    /**
     * @var string
     */
    private string $ConfirmationNumber;

    /**
     * @var null | 'All' | 'USPS' | 'FedEx' | 'DHLExpress' | 'UPS' | 'CanadaPost' | 'DhlECommerce' | 'Zorbit'
     */
    private ?string $Carrier = null;

    /**
     * @var null | 'Default' | 'AutoPickup'
     */
    private ?string $PickupType = null;

    /**
     * Constructor
     *
     * @param null | string $Authenticator
     * @param null | \Knightar\StampsSoapClient\Type\Credentials $Credentials
     * @param null | \Knightar\StampsSoapClient\Type\CarrierPickupContactInformation $ContactInformation
     * @param null | \Knightar\StampsSoapClient\Type\CarrierPickupPackageInformation $PackageInformation
     * @param string $ConfirmationNumber
     * @param null | 'All' | 'USPS' | 'FedEx' | 'DHLExpress' | 'UPS' | 'CanadaPost' | 'DhlECommerce' | 'Zorbit' $Carrier
     * @param null | 'Default' | 'AutoPickup' $PickupType
     */
    public function __construct(?string $Authenticator = null, ?\Knightar\StampsSoapClient\Type\Credentials $Credentials = null, ?\Knightar\StampsSoapClient\Type\CarrierPickupContactInformation $ContactInformation, ?\Knightar\StampsSoapClient\Type\CarrierPickupPackageInformation $PackageInformation, string $ConfirmationNumber, ?string $Carrier, ?string $PickupType)
    {
        $this->Authenticator = $Authenticator;
        $this->Credentials = $Credentials;
        $this->ContactInformation = $ContactInformation;
        $this->PackageInformation = $PackageInformation;
        $this->ConfirmationNumber = $ConfirmationNumber;
        $this->Carrier = $Carrier;
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
     * @return null | \Knightar\StampsSoapClient\Type\CarrierPickupContactInformation
     */
    public function getContactInformation() : ?\Knightar\StampsSoapClient\Type\CarrierPickupContactInformation
    {
        return $this->ContactInformation;
    }

    /**
     * @param null | \Knightar\StampsSoapClient\Type\CarrierPickupContactInformation $ContactInformation
     * @return static
     */
    public function withContactInformation(?\Knightar\StampsSoapClient\Type\CarrierPickupContactInformation $ContactInformation) : static
    {
        $new = clone $this;
        $new->ContactInformation = $ContactInformation;

        return $new;
    }

    /**
     * @return null | \Knightar\StampsSoapClient\Type\CarrierPickupPackageInformation
     */
    public function getPackageInformation() : ?\Knightar\StampsSoapClient\Type\CarrierPickupPackageInformation
    {
        return $this->PackageInformation;
    }

    /**
     * @param null | \Knightar\StampsSoapClient\Type\CarrierPickupPackageInformation $PackageInformation
     * @return static
     */
    public function withPackageInformation(?\Knightar\StampsSoapClient\Type\CarrierPickupPackageInformation $PackageInformation) : static
    {
        $new = clone $this;
        $new->PackageInformation = $PackageInformation;

        return $new;
    }

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

