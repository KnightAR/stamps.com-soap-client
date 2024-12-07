<?php

namespace Knightar\StampsSoapClient\Type;

class PostageBalance
{
    /**
     * @var float
     */
    private float $AvailablePostage;

    /**
     * @var float
     */
    private float $ControlTotal;

    /**
     * @return float
     */
    public function getAvailablePostage() : float
    {
        return $this->AvailablePostage;
    }

    /**
     * @param float $AvailablePostage
     * @return static
     */
    public function withAvailablePostage(float $AvailablePostage) : static
    {
        $new = clone $this;
        $new->AvailablePostage = $AvailablePostage;

        return $new;
    }

    /**
     * @return float
     */
    public function getControlTotal() : float
    {
        return $this->ControlTotal;
    }

    /**
     * @param float $ControlTotal
     * @return static
     */
    public function withControlTotal(float $ControlTotal) : static
    {
        $new = clone $this;
        $new->ControlTotal = $ControlTotal;

        return $new;
    }
}

