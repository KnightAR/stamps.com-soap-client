<?php

namespace Knightar\StampsSoapClient\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetRates implements RequestInterface
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
     * @var \Knightar\StampsSoapClient\Type\RateV46
     */
    private \Knightar\StampsSoapClient\Type\RateV46 $Rate;

    /**
     * @var null | 'All' | 'USPS' | 'FedEx' | 'DHLExpress' | 'UPS' | 'CanadaPost' | 'DhlECommerce' | 'Zorbit'
     */
    private ?string $Carrier = null;

    /**
     * @param \Knightar\StampsSoapClient\Type\RateV46 $Rate
     * @param null | 'All' | 'USPS' | 'FedEx' | 'DHLExpress' | 'UPS' | 'CanadaPost' | 'DhlECommerce' | 'Zorbit' $Carrier
     * @param null | string $Authenticator
     * @param null | \Knightar\StampsSoapClient\Type\Credentials $Credentials
     */
    public function __construct(
        \Knightar\StampsSoapClient\Type\RateV46      $Rate,
        ?string                                      $Carrier = null,
        ?string                                      $Authenticator = null,
        ?\Knightar\StampsSoapClient\Type\Credentials $Credentials = null
    )
    {
        $this->Rate = $Rate;
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
     * @return \Knightar\StampsSoapClient\Type\RateV46
     */
    public function getRate() : \Knightar\StampsSoapClient\Type\RateV46
    {
        return $this->Rate;
    }

    /**
     * @param \Knightar\StampsSoapClient\Type\RateV46 $Rate
     * @return static
     */
    public function withRate(\Knightar\StampsSoapClient\Type\RateV46 $Rate) : static
    {
        $new = clone $this;
        $new->Rate = $Rate;

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

