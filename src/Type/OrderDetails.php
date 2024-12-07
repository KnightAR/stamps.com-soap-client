<?php

namespace Knightar\StampsSoapClient\Type;

class OrderDetails
{
    /**
     * @var \DateTimeInterface
     */
    private \DateTimeInterface $OrderDate;

    /**
     * @var string
     */
    private string $OrderNumber;

    /**
     * @var null | float
     */
    private ?float $ShippingAndHandlingPrice = null;

    /**
     * @var null | float
     */
    private ?float $TotalDiscountAmount = null;

    /**
     * @var null | float
     */
    private ?float $TotalTaxAmount = null;

    /**
     * @var null | \Knightar\StampsSoapClient\Type\ArrayOfOrderItem
     */
    private ?\Knightar\StampsSoapClient\Type\ArrayOfOrderItem $OrderItems = null;

    /**
     * @var null | string
     */
    private ?string $OrderCurrency = null;

    /**
     * @return \DateTimeInterface
     */
    public function getOrderDate() : \DateTimeInterface
    {
        return $this->OrderDate;
    }

    /**
     * @param \DateTimeInterface $OrderDate
     * @return static
     */
    public function withOrderDate(\DateTimeInterface $OrderDate) : static
    {
        $new = clone $this;
        $new->OrderDate = $OrderDate;

        return $new;
    }

    /**
     * @return string
     */
    public function getOrderNumber() : string
    {
        return $this->OrderNumber;
    }

    /**
     * @param string $OrderNumber
     * @return static
     */
    public function withOrderNumber(string $OrderNumber) : static
    {
        $new = clone $this;
        $new->OrderNumber = $OrderNumber;

        return $new;
    }

    /**
     * @return null | float
     */
    public function getShippingAndHandlingPrice() : ?float
    {
        return $this->ShippingAndHandlingPrice;
    }

    /**
     * @param null | float $ShippingAndHandlingPrice
     * @return static
     */
    public function withShippingAndHandlingPrice(?float $ShippingAndHandlingPrice) : static
    {
        $new = clone $this;
        $new->ShippingAndHandlingPrice = $ShippingAndHandlingPrice;

        return $new;
    }

    /**
     * @return null | float
     */
    public function getTotalDiscountAmount() : ?float
    {
        return $this->TotalDiscountAmount;
    }

    /**
     * @param null | float $TotalDiscountAmount
     * @return static
     */
    public function withTotalDiscountAmount(?float $TotalDiscountAmount) : static
    {
        $new = clone $this;
        $new->TotalDiscountAmount = $TotalDiscountAmount;

        return $new;
    }

    /**
     * @return null | float
     */
    public function getTotalTaxAmount() : ?float
    {
        return $this->TotalTaxAmount;
    }

    /**
     * @param null | float $TotalTaxAmount
     * @return static
     */
    public function withTotalTaxAmount(?float $TotalTaxAmount) : static
    {
        $new = clone $this;
        $new->TotalTaxAmount = $TotalTaxAmount;

        return $new;
    }

    /**
     * @return null | \Knightar\StampsSoapClient\Type\ArrayOfOrderItem
     */
    public function getOrderItems() : ?\Knightar\StampsSoapClient\Type\ArrayOfOrderItem
    {
        return $this->OrderItems;
    }

    /**
     * @param null | \Knightar\StampsSoapClient\Type\ArrayOfOrderItem $OrderItems
     * @return static
     */
    public function withOrderItems(?\Knightar\StampsSoapClient\Type\ArrayOfOrderItem $OrderItems) : static
    {
        $new = clone $this;
        $new->OrderItems = $OrderItems;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getOrderCurrency() : ?string
    {
        return $this->OrderCurrency;
    }

    /**
     * @param null | string $OrderCurrency
     * @return static
     */
    public function withOrderCurrency(?string $OrderCurrency) : static
    {
        $new = clone $this;
        $new->OrderCurrency = $OrderCurrency;

        return $new;
    }
}

