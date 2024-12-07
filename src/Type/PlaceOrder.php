<?php

namespace Knightar\StampsSoapClient\Type;

use Phpro\SoapClient\Type\RequestInterface;

class PlaceOrder implements RequestInterface
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
     * @var \Knightar\StampsSoapClient\Type\ArrayOfSku
     */
    private \Knightar\StampsSoapClient\Type\ArrayOfSku $Skus;

    /**
     * @var null | string
     */
    private ?string $PromoCode = null;

    /**
     * @var \Knightar\StampsSoapClient\Type\Address
     */
    private \Knightar\StampsSoapClient\Type\Address $ShippingAddress;

    /**
     * @var 'Basic' | 'Normal' | 'Expedited' | 'Rush'
     */
    private string $StoreShippingMethod;

    /**
     * Constructor
     *
     * @param null | string $Authenticator
     * @param null | \Knightar\StampsSoapClient\Type\Credentials $Credentials
     * @param \Knightar\StampsSoapClient\Type\ArrayOfSku $Skus
     * @param null | string $PromoCode
     * @param \Knightar\StampsSoapClient\Type\Address $ShippingAddress
     * @param 'Basic' | 'Normal' | 'Expedited' | 'Rush' $StoreShippingMethod
     */
    public function __construct(?string $Authenticator = null, ?\Knightar\StampsSoapClient\Type\Credentials $Credentials = null, \Knightar\StampsSoapClient\Type\ArrayOfSku $Skus, ?string $PromoCode, \Knightar\StampsSoapClient\Type\Address $ShippingAddress, string $StoreShippingMethod)
    {
        $this->Authenticator = $Authenticator;
        $this->Credentials = $Credentials;
        $this->Skus = $Skus;
        $this->PromoCode = $PromoCode;
        $this->ShippingAddress = $ShippingAddress;
        $this->StoreShippingMethod = $StoreShippingMethod;
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
     * @return \Knightar\StampsSoapClient\Type\ArrayOfSku
     */
    public function getSkus() : \Knightar\StampsSoapClient\Type\ArrayOfSku
    {
        return $this->Skus;
    }

    /**
     * @param \Knightar\StampsSoapClient\Type\ArrayOfSku $Skus
     * @return static
     */
    public function withSkus(\Knightar\StampsSoapClient\Type\ArrayOfSku $Skus) : static
    {
        $new = clone $this;
        $new->Skus = $Skus;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getPromoCode() : ?string
    {
        return $this->PromoCode;
    }

    /**
     * @param null | string $PromoCode
     * @return static
     */
    public function withPromoCode(?string $PromoCode) : static
    {
        $new = clone $this;
        $new->PromoCode = $PromoCode;

        return $new;
    }

    /**
     * @return \Knightar\StampsSoapClient\Type\Address
     */
    public function getShippingAddress() : \Knightar\StampsSoapClient\Type\Address
    {
        return $this->ShippingAddress;
    }

    /**
     * @param \Knightar\StampsSoapClient\Type\Address $ShippingAddress
     * @return static
     */
    public function withShippingAddress(\Knightar\StampsSoapClient\Type\Address $ShippingAddress) : static
    {
        $new = clone $this;
        $new->ShippingAddress = $ShippingAddress;

        return $new;
    }

    /**
     * @return 'Basic' | 'Normal' | 'Expedited' | 'Rush'
     */
    public function getStoreShippingMethod() : string
    {
        return $this->StoreShippingMethod;
    }

    /**
     * @param 'Basic' | 'Normal' | 'Expedited' | 'Rush' $StoreShippingMethod
     * @return static
     */
    public function withStoreShippingMethod(string $StoreShippingMethod) : static
    {
        $new = clone $this;
        $new->StoreShippingMethod = $StoreShippingMethod;

        return $new;
    }
}
