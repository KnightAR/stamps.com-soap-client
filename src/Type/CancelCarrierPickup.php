<?php

namespace Knightar\StampsSoapClient\Type;

use Phpro\SoapClient\Type\RequestInterface;

class CancelCarrierPickup implements RequestInterface
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
     * Available Carriers
     */
    const CARRIER_ALL = 'All';
    const CARRIER_USPS = 'USPS';
    const CARRIER_FEDEX = 'FedEx';
    const CARRIER_DHL_EXPRESS = 'DHLExpress';
    const CARRIER_UPS = 'UPS';
    const CARRIER_CANADA_POST = 'CanadaPost';
    const CARRIER_DHL_ECOMMERCE = 'DhlECommerce';
    const CARRIER_ZORBIT = 'Zorbit';

    /**
     * Available PickupTypes
     */
    const PICKUP_TYPE_DEFAULT = 'Default';
    const PICKUP_TYPE_AUTO_PICKUP = 'AutoPickup';

    /**
     * Constructor
     *
     * @param string $ConfirmationNumber
     * @param null | string $Carrier
     * @param null | 'All' | 'USPS' | 'FedEx' | 'DHLExpress' | 'UPS' | 'CanadaPost' | 'DhlECommerce' | 'Zorbit' $Carrier
     * @param null | 'Default' | 'AutoPickup' $PickupType
     * @param null | string $Authenticator
     * @param null | \Knightar\StampsSoapClient\Type\Credentials $Credentials
     */
    public function __construct(
        string                                       $ConfirmationNumber,
        ?string                                      $Carrier = null,
        ?string                                      $PickupType = null,
        ?string                                      $Authenticator = null,
        ?\Knightar\StampsSoapClient\Type\Credentials $Credentials = null
    )
    {
        $this->ConfirmationNumber = $ConfirmationNumber;
        $this->Carrier = $Carrier;
        $this->PickupType = $PickupType;
        $this->Authenticator = $Authenticator;
        $this->Credentials = $Credentials;
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

