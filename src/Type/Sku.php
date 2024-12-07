<?php

namespace Knightar\StampsSoapClient\Type;

class Sku
{
    /**
     * @var string
     */
    private string $Id;

    /**
     * @var null | int
     */
    private ?int $Quantity = null;

    /**
     * @var null | float
     */
    private ?float $SkuSubTotal = null;

    /**
     * @return string
     */
    public function getId() : string
    {
        return $this->Id;
    }

    /**
     * @param string $Id
     * @return static
     */
    public function withId(string $Id) : static
    {
        $new = clone $this;
        $new->Id = $Id;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getQuantity() : ?int
    {
        return $this->Quantity;
    }

    /**
     * @param null | int $Quantity
     * @return static
     */
    public function withQuantity(?int $Quantity) : static
    {
        $new = clone $this;
        $new->Quantity = $Quantity;

        return $new;
    }

    /**
     * @return null | float
     */
    public function getSkuSubTotal() : ?float
    {
        return $this->SkuSubTotal;
    }

    /**
     * @param null | float $SkuSubTotal
     * @return static
     */
    public function withSkuSubTotal(?float $SkuSubTotal) : static
    {
        $new = clone $this;
        $new->SkuSubTotal = $SkuSubTotal;

        return $new;
    }
}

