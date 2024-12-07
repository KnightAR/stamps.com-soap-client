<?php

namespace Knightar\StampsSoapClient\Type;

class StoreShippingMethodOption
{
    /**
     * @var 'Basic' | 'Normal' | 'Expedited' | 'Rush'
     */
    private string $StoreShippingMethod;

    /**
     * @var int
     */
    private int $StoreDeliveryTimeMinimum;

    /**
     * @var int
     */
    private int $StoreDeliveryTimeMaximum;

    /**
     * @var \Knightar\StampsSoapClient\Type\ArrayOfSku
     */
    private \Knightar\StampsSoapClient\Type\ArrayOfSku $Skus;

    /**
     * @var null | float
     */
    private ?float $StoreProductTotal = null;

    /**
     * @var null | float
     */
    private ?float $StoreProductDiscount = null;

    /**
     * @var null | float
     */
    private ?float $StoreShippingAmount = null;

    /**
     * @var null | float
     */
    private ?float $StoreTaxTotal = null;

    /**
     * @var null | float
     */
    private ?float $StoreOrderTotal = null;

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

    /**
     * @return int
     */
    public function getStoreDeliveryTimeMinimum() : int
    {
        return $this->StoreDeliveryTimeMinimum;
    }

    /**
     * @param int $StoreDeliveryTimeMinimum
     * @return static
     */
    public function withStoreDeliveryTimeMinimum(int $StoreDeliveryTimeMinimum) : static
    {
        $new = clone $this;
        $new->StoreDeliveryTimeMinimum = $StoreDeliveryTimeMinimum;

        return $new;
    }

    /**
     * @return int
     */
    public function getStoreDeliveryTimeMaximum() : int
    {
        return $this->StoreDeliveryTimeMaximum;
    }

    /**
     * @param int $StoreDeliveryTimeMaximum
     * @return static
     */
    public function withStoreDeliveryTimeMaximum(int $StoreDeliveryTimeMaximum) : static
    {
        $new = clone $this;
        $new->StoreDeliveryTimeMaximum = $StoreDeliveryTimeMaximum;

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
     * @return null | float
     */
    public function getStoreProductTotal() : ?float
    {
        return $this->StoreProductTotal;
    }

    /**
     * @param null | float $StoreProductTotal
     * @return static
     */
    public function withStoreProductTotal(?float $StoreProductTotal) : static
    {
        $new = clone $this;
        $new->StoreProductTotal = $StoreProductTotal;

        return $new;
    }

    /**
     * @return null | float
     */
    public function getStoreProductDiscount() : ?float
    {
        return $this->StoreProductDiscount;
    }

    /**
     * @param null | float $StoreProductDiscount
     * @return static
     */
    public function withStoreProductDiscount(?float $StoreProductDiscount) : static
    {
        $new = clone $this;
        $new->StoreProductDiscount = $StoreProductDiscount;

        return $new;
    }

    /**
     * @return null | float
     */
    public function getStoreShippingAmount() : ?float
    {
        return $this->StoreShippingAmount;
    }

    /**
     * @param null | float $StoreShippingAmount
     * @return static
     */
    public function withStoreShippingAmount(?float $StoreShippingAmount) : static
    {
        $new = clone $this;
        $new->StoreShippingAmount = $StoreShippingAmount;

        return $new;
    }

    /**
     * @return null | float
     */
    public function getStoreTaxTotal() : ?float
    {
        return $this->StoreTaxTotal;
    }

    /**
     * @param null | float $StoreTaxTotal
     * @return static
     */
    public function withStoreTaxTotal(?float $StoreTaxTotal) : static
    {
        $new = clone $this;
        $new->StoreTaxTotal = $StoreTaxTotal;

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

