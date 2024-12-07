<?php

namespace Knightar\StampsSoapClient\Type;

use Phpro\SoapClient\Type\RequestInterface;

class CheckCarrierPickupAvailability implements RequestInterface
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
     * @var null | \DateTimeInterface
     */
    private ?\DateTimeInterface $Date = null;

    /**
     * @var \Knightar\StampsSoapClient\Type\CarrierPickupAddress
     */
    private \Knightar\StampsSoapClient\Type\CarrierPickupAddress $Address;

    /**
     * @var null | 'All' | 'USPS' | 'FedEx' | 'DHLExpress' | 'UPS' | 'CanadaPost' | 'DhlECommerce' | 'Zorbit'
     */
    private ?string $Carrier = null;

    /**
     * Constructor
     *
     * @param \Knightar\StampsSoapClient\Type\CarrierPickupAddress $Address
     * @param null | \DateTimeInterface $Date
     * @param null | 'All' | 'USPS' | 'FedEx' | 'DHLExpress' | 'UPS' | 'CanadaPost' | 'DhlECommerce' | 'Zorbit' $Carrier
     * @param null | string $Authenticator
     * @param null | \Knightar\StampsSoapClient\Type\Credentials $Credentials
     */
    public function __construct(
        \Knightar\StampsSoapClient\Type\CarrierPickupAddress $Address,
        ?\DateTimeInterface                                  $Date = null,
        ?string                                              $Carrier = null,
        ?string                                              $Authenticator = null,
        ?\Knightar\StampsSoapClient\Type\Credentials         $Credentials = null
    )
    {
        $this->Address = $Address;
        $this->Date = $Date;
        $this->Carrier = $Carrier;
        $this->Authenticator = $Authenticator;
        $this->Credentials = $Credentials;
    }

    public const CARRIER_ALL = 'All';
    public const CARRIER_USPS = 'USPS';
    public const CARRIER_FEDEX = 'FedEx';
    public const CARRIER_DHL_EXPRESS = 'DHLExpress';
    public const CARRIER_UPS = 'UPS';
    public const CARRIER_CANADA_POST = 'CanadaPost';
    public const CARRIER_DHL_ECOMMERCE = 'DhlECommerce';
    public const CARRIER_ZORBIT = 'Zorbit';

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
     * @return null | \DateTimeInterface
     */
    public function getDate() : ?\DateTimeInterface
    {
        return $this->Date;
    }

    /**
     * @param null | \DateTimeInterface $Date
     * @return static
     */
    public function withDate(?\DateTimeInterface $Date) : static
    {
        $new = clone $this;
        $new->Date = $Date;

        return $new;
    }

    /**
     * @return \Knightar\StampsSoapClient\Type\CarrierPickupAddress
     */
    public function getAddress() : \Knightar\StampsSoapClient\Type\CarrierPickupAddress
    {
        return $this->Address;
    }

    /**
     * @param \Knightar\StampsSoapClient\Type\CarrierPickupAddress $Address
     * @return static
     */
    public function withAddress(\Knightar\StampsSoapClient\Type\CarrierPickupAddress $Address) : static
    {
        $new = clone $this;
        $new->Address = $Address;

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
}

