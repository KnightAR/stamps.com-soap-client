<?php

namespace Knightar\StampsSoapClient\Type;

class OrderItem
{
    /**
     * @var int
     */
    private int $Quantity;

    /**
     * @var null | string
     */
    private ?string $ItemID = null;

    /**
     * @var null | string
     */
    private ?string $Description = null;

    /**
     * @var null | float
     */
    private ?float $UnitPrice = null;

    /**
     * @var null | string
     */
    private ?string $ImageUrl = null;

    /**
     * @var null | \Knightar\StampsSoapClient\Type\ArrayOfOption
     */
    private ?\Knightar\StampsSoapClient\Type\ArrayOfOption $Options = null;

    /**
     * @return int
     */
    public function getQuantity() : int
    {
        return $this->Quantity;
    }

    /**
     * @param int $Quantity
     * @return static
     */
    public function withQuantity(int $Quantity) : static
    {
        $new = clone $this;
        $new->Quantity = $Quantity;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getItemID() : ?string
    {
        return $this->ItemID;
    }

    /**
     * @param null | string $ItemID
     * @return static
     */
    public function withItemID(?string $ItemID) : static
    {
        $new = clone $this;
        $new->ItemID = $ItemID;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getDescription() : ?string
    {
        return $this->Description;
    }

    /**
     * @param null | string $Description
     * @return static
     */
    public function withDescription(?string $Description) : static
    {
        $new = clone $this;
        $new->Description = $Description;

        return $new;
    }

    /**
     * @return null | float
     */
    public function getUnitPrice() : ?float
    {
        return $this->UnitPrice;
    }

    /**
     * @param null | float $UnitPrice
     * @return static
     */
    public function withUnitPrice(?float $UnitPrice) : static
    {
        $new = clone $this;
        $new->UnitPrice = $UnitPrice;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getImageUrl() : ?string
    {
        return $this->ImageUrl;
    }

    /**
     * @param null | string $ImageUrl
     * @return static
     */
    public function withImageUrl(?string $ImageUrl) : static
    {
        $new = clone $this;
        $new->ImageUrl = $ImageUrl;

        return $new;
    }

    /**
     * @return null | \Knightar\StampsSoapClient\Type\ArrayOfOption
     */
    public function getOptions() : ?\Knightar\StampsSoapClient\Type\ArrayOfOption
    {
        return $this->Options;
    }

    /**
     * @param null | \Knightar\StampsSoapClient\Type\ArrayOfOption $Options
     * @return static
     */
    public function withOptions(?\Knightar\StampsSoapClient\Type\ArrayOfOption $Options) : static
    {
        $new = clone $this;
        $new->Options = $Options;

        return $new;
    }
}

