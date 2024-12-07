<?php

namespace Knightar\StampsSoapClient\Type;

class Transaction
{
    /**
     * @var \DateTimeInterface
     */
    private \DateTimeInterface $Date;

    /**
     * @var float
     */
    private float $Cost;

    /**
     * @var float
     */
    private float $Credit;

    /**
     * @var float
     */
    private float $Balance;

    /**
     * @var 'All' | 'Purchase' | 'Credit' | 'Print' | 'Adjustment' | 'Refund'
     */
    private string $Type;

    /**
     * @var string
     */
    private string $Brand;

    /**
     * @var null | string
     */
    private ?string $PurchaseType = null;

    /**
     * @return \DateTimeInterface
     */
    public function getDate() : \DateTimeInterface
    {
        return $this->Date;
    }

    /**
     * @param \DateTimeInterface $Date
     * @return static
     */
    public function withDate(\DateTimeInterface $Date) : static
    {
        $new = clone $this;
        $new->Date = $Date;

        return $new;
    }

    /**
     * @return float
     */
    public function getCost() : float
    {
        return $this->Cost;
    }

    /**
     * @param float $Cost
     * @return static
     */
    public function withCost(float $Cost) : static
    {
        $new = clone $this;
        $new->Cost = $Cost;

        return $new;
    }

    /**
     * @return float
     */
    public function getCredit() : float
    {
        return $this->Credit;
    }

    /**
     * @param float $Credit
     * @return static
     */
    public function withCredit(float $Credit) : static
    {
        $new = clone $this;
        $new->Credit = $Credit;

        return $new;
    }

    /**
     * @return float
     */
    public function getBalance() : float
    {
        return $this->Balance;
    }

    /**
     * @param float $Balance
     * @return static
     */
    public function withBalance(float $Balance) : static
    {
        $new = clone $this;
        $new->Balance = $Balance;

        return $new;
    }

    /**
     * @return 'All' | 'Purchase' | 'Credit' | 'Print' | 'Adjustment' | 'Refund'
     */
    public function getType() : string
    {
        return $this->Type;
    }

    /**
     * @param 'All' | 'Purchase' | 'Credit' | 'Print' | 'Adjustment' | 'Refund' $Type
     * @return static
     */
    public function withType(string $Type) : static
    {
        $new = clone $this;
        $new->Type = $Type;

        return $new;
    }

    /**
     * @return string
     */
    public function getBrand() : string
    {
        return $this->Brand;
    }

    /**
     * @param string $Brand
     * @return static
     */
    public function withBrand(string $Brand) : static
    {
        $new = clone $this;
        $new->Brand = $Brand;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getPurchaseType() : ?string
    {
        return $this->PurchaseType;
    }

    /**
     * @param null | string $PurchaseType
     * @return static
     */
    public function withPurchaseType(?string $PurchaseType) : static
    {
        $new = clone $this;
        $new->PurchaseType = $PurchaseType;

        return $new;
    }
}

