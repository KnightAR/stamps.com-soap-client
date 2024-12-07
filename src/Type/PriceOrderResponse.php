<?php

namespace Knightar\StampsSoapClient\Type;

use Phpro\SoapClient\Type\ResultInterface;

class PriceOrderResponse implements ResultInterface
{
    /**
     * @var string
     */
    private string $Authenticator;

    /**
     * @var \Knightar\StampsSoapClient\Type\ArrayOfStoreShippingMethodOption
     */
    private \Knightar\StampsSoapClient\Type\ArrayOfStoreShippingMethodOption $StoreShippingMethodOptions;

    /**
     * @return string
     */
    public function getAuthenticator() : string
    {
        return $this->Authenticator;
    }

    /**
     * @param string $Authenticator
     * @return static
     */
    public function withAuthenticator(string $Authenticator) : static
    {
        $new = clone $this;
        $new->Authenticator = $Authenticator;

        return $new;
    }

    /**
     * @return \Knightar\StampsSoapClient\Type\ArrayOfStoreShippingMethodOption
     */
    public function getStoreShippingMethodOptions() : \Knightar\StampsSoapClient\Type\ArrayOfStoreShippingMethodOption
    {
        return $this->StoreShippingMethodOptions;
    }

    /**
     * @param \Knightar\StampsSoapClient\Type\ArrayOfStoreShippingMethodOption $StoreShippingMethodOptions
     * @return static
     */
    public function withStoreShippingMethodOptions(\Knightar\StampsSoapClient\Type\ArrayOfStoreShippingMethodOption $StoreShippingMethodOptions) : static
    {
        $new = clone $this;
        $new->StoreShippingMethodOptions = $StoreShippingMethodOptions;

        return $new;
    }
}

