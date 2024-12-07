<?php

namespace Knightar\StampsSoapClient\Type;

use Phpro\SoapClient\Type\ResultInterface;

class PlaceOrderResponse implements ResultInterface
{
    /**
     * @var string
     */
    private string $Authenticator;

    /**
     * @var null | string
     */
    private ?string $StoreOrderId = null;

    /**
     * @var null | float
     */
    private ?float $StoreOrderTotal = null;

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
     * @return null | string
     */
    public function getStoreOrderId() : ?string
    {
        return $this->StoreOrderId;
    }

    /**
     * @param null | string $StoreOrderId
     * @return static
     */
    public function withStoreOrderId(?string $StoreOrderId) : static
    {
        $new = clone $this;
        $new->StoreOrderId = $StoreOrderId;

        return $new;
    }

    /**
     * @return null | float
     */
    public function getStoreOrderTotal() : ?float
    {
        return $this->StoreOrderTotal;
    }

    /**
     * @param null | float $StoreOrderTotal
     * @return static
     */
    public function withStoreOrderTotal(?float $StoreOrderTotal) : static
    {
        $new = clone $this;
        $new->StoreOrderTotal = $StoreOrderTotal;

        return $new;
    }
}

