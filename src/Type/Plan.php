<?php

namespace Knightar\StampsSoapClient\Type;

class Plan
{
    /**
     * @var int
     */
    private int $PlanId;

    /**
     * @var string
     */
    private string $PlanName;

    /**
     * @var float
     */
    private float $MonthlyBaseFee;

    /**
     * @return int
     */
    public function getPlanId() : int
    {
        return $this->PlanId;
    }

    /**
     * @param int $PlanId
     * @return static
     */
    public function withPlanId(int $PlanId) : static
    {
        $new = clone $this;
        $new->PlanId = $PlanId;

        return $new;
    }

    /**
     * @return string
     */
    public function getPlanName() : string
    {
        return $this->PlanName;
    }

    /**
     * @param string $PlanName
     * @return static
     */
    public function withPlanName(string $PlanName) : static
    {
        $new = clone $this;
        $new->PlanName = $PlanName;

        return $new;
    }

    /**
     * @return float
     */
    public function getMonthlyBaseFee() : float
    {
        return $this->MonthlyBaseFee;
    }

    /**
     * @param float $MonthlyBaseFee
     * @return static
     */
    public function withMonthlyBaseFee(float $MonthlyBaseFee) : static
    {
        $new = clone $this;
        $new->MonthlyBaseFee = $MonthlyBaseFee;

        return $new;
    }
}

