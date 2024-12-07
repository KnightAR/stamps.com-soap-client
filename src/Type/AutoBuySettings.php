<?php

namespace Knightar\StampsSoapClient\Type;

class AutoBuySettings
{
    /**
     * @var bool
     */
    private bool $AutoBuyEnabled;

    /**
     * @var null | float
     */
    private ?float $PurchaseAmount = null;

    /**
     * @var null | float
     */
    private ?float $TriggerAmount = null;

    /**
     * @return bool
     */
    public function getAutoBuyEnabled() : bool
    {
        return $this->AutoBuyEnabled;
    }

    /**
     * @param bool $AutoBuyEnabled
     * @return static
     */
    public function withAutoBuyEnabled(bool $AutoBuyEnabled) : static
    {
        $new = clone $this;
        $new->AutoBuyEnabled = $AutoBuyEnabled;

        return $new;
    }

    /**
     * @return null | float
     */
    public function getPurchaseAmount() : ?float
    {
        return $this->PurchaseAmount;
    }

    /**
     * @param null | float $PurchaseAmount
     * @return static
     */
    public function withPurchaseAmount(?float $PurchaseAmount) : static
    {
        $new = clone $this;
        $new->PurchaseAmount = $PurchaseAmount;

        return $new;
    }

    /**
     * @return null | float
     */
    public function getTriggerAmount() : ?float
    {
        return $this->TriggerAmount;
    }

    /**
     * @param null | float $TriggerAmount
     * @return static
     */
    public function withTriggerAmount(?float $TriggerAmount) : static
    {
        $new = clone $this;
        $new->TriggerAmount = $TriggerAmount;

        return $new;
    }
}

