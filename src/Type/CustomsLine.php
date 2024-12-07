<?php

namespace Knightar\StampsSoapClient\Type;

class CustomsLine
{
    /**
     * @var string
     */
    private string $Description;

    /**
     * @var float
     */
    private float $Quantity;

    /**
     * @var float
     */
    private float $Value;

    /**
     * @var null | float
     */
    private ?float $WeightLb = null;

    /**
     * @var null | float
     */
    private ?float $WeightOz = null;

    /**
     * @var null | string
     */
    private ?string $HSTariffNumber = null;

    /**
     * @var null | string
     */
    private ?string $CountryOfOrigin = null;

    /**
     * @var null | string
     */
    private ?string $sku = null;

    /**
     * @return string
     */
    public function getDescription() : string
    {
        return $this->Description;
    }

    /**
     * @param string $Description
     * @return static
     */
    public function withDescription(string $Description) : static
    {
        $new = clone $this;
        $new->Description = $Description;

        return $new;
    }

    /**
     * @return float
     */
    public function getQuantity() : float
    {
        return $this->Quantity;
    }

    /**
     * @param float $Quantity
     * @return static
     */
    public function withQuantity(float $Quantity) : static
    {
        $new = clone $this;
        $new->Quantity = $Quantity;

        return $new;
    }

    /**
     * @return float
     */
    public function getValue() : float
    {
        return $this->Value;
    }

    /**
     * @param float $Value
     * @return static
     */
    public function withValue(float $Value) : static
    {
        $new = clone $this;
        $new->Value = $Value;

        return $new;
    }

    /**
     * @return null | float
     */
    public function getWeightLb() : ?float
    {
        return $this->WeightLb;
    }

    /**
     * @param null | float $WeightLb
     * @return static
     */
    public function withWeightLb(?float $WeightLb) : static
    {
        $new = clone $this;
        $new->WeightLb = $WeightLb;

        return $new;
    }

    /**
     * @return null | float
     */
    public function getWeightOz() : ?float
    {
        return $this->WeightOz;
    }

    /**
     * @param null | float $WeightOz
     * @return static
     */
    public function withWeightOz(?float $WeightOz) : static
    {
        $new = clone $this;
        $new->WeightOz = $WeightOz;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getHSTariffNumber() : ?string
    {
        return $this->HSTariffNumber;
    }

    /**
     * @param null | string $HSTariffNumber
     * @return static
     */
    public function withHSTariffNumber(?string $HSTariffNumber) : static
    {
        $new = clone $this;
        $new->HSTariffNumber = $HSTariffNumber;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getCountryOfOrigin() : ?string
    {
        return $this->CountryOfOrigin;
    }

    /**
     * @param null | string $CountryOfOrigin
     * @return static
     */
    public function withCountryOfOrigin(?string $CountryOfOrigin) : static
    {
        $new = clone $this;
        $new->CountryOfOrigin = $CountryOfOrigin;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getSku() : ?string
    {
        return $this->sku;
    }

    /**
     * @param null | string $sku
     * @return static
     */
    public function withSku(?string $sku) : static
    {
        $new = clone $this;
        $new->sku = $sku;

        return $new;
    }
}

