<?php

namespace Knightar\StampsSoapClient\Type;

class IndiciumInfoV39
{
    /**
     * @var \Knightar\StampsSoapClient\Type\RateV46
     */
    private \Knightar\StampsSoapClient\Type\RateV46 $Rate;

    /**
     * @var null | \Knightar\StampsSoapClient\Type\Address
     */
    private ?\Knightar\StampsSoapClient\Type\Address $ReturnAddress = null;

    /**
     * @var null | int
     */
    private ?int $CostCodeId = null;

    /**
     * @return \Knightar\StampsSoapClient\Type\RateV46
     */
    public function getRate() : \Knightar\StampsSoapClient\Type\RateV46
    {
        return $this->Rate;
    }

    /**
     * @param \Knightar\StampsSoapClient\Type\RateV46 $Rate
     * @return static
     */
    public function withRate(\Knightar\StampsSoapClient\Type\RateV46 $Rate) : static
    {
        $new = clone $this;
        $new->Rate = $Rate;

        return $new;
    }

    /**
     * @return null | \Knightar\StampsSoapClient\Type\Address
     */
    public function getReturnAddress() : ?\Knightar\StampsSoapClient\Type\Address
    {
        return $this->ReturnAddress;
    }

    /**
     * @param null | \Knightar\StampsSoapClient\Type\Address $ReturnAddress
     * @return static
     */
    public function withReturnAddress(?\Knightar\StampsSoapClient\Type\Address $ReturnAddress) : static
    {
        $new = clone $this;
        $new->ReturnAddress = $ReturnAddress;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getCostCodeId() : ?int
    {
        return $this->CostCodeId;
    }

    /**
     * @param null | int $CostCodeId
     * @return static
     */
    public function withCostCodeId(?int $CostCodeId) : static
    {
        $new = clone $this;
        $new->CostCodeId = $CostCodeId;

        return $new;
    }
}

