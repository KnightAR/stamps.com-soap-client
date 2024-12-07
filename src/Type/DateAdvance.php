<?php

namespace Knightar\StampsSoapClient\Type;

class DateAdvance
{
    /**
     * @var int
     */
    private int $MaxDateAdvanceEnvelope;

    /**
     * @var int
     */
    private int $MaxDateAdvanceMailingLabel;

    /**
     * @var int
     */
    private int $MaxDateAdvanceShippingLabel;

    /**
     * @return int
     */
    public function getMaxDateAdvanceEnvelope() : int
    {
        return $this->MaxDateAdvanceEnvelope;
    }

    /**
     * @param int $MaxDateAdvanceEnvelope
     * @return static
     */
    public function withMaxDateAdvanceEnvelope(int $MaxDateAdvanceEnvelope) : static
    {
        $new = clone $this;
        $new->MaxDateAdvanceEnvelope = $MaxDateAdvanceEnvelope;

        return $new;
    }

    /**
     * @return int
     */
    public function getMaxDateAdvanceMailingLabel() : int
    {
        return $this->MaxDateAdvanceMailingLabel;
    }

    /**
     * @param int $MaxDateAdvanceMailingLabel
     * @return static
     */
    public function withMaxDateAdvanceMailingLabel(int $MaxDateAdvanceMailingLabel) : static
    {
        $new = clone $this;
        $new->MaxDateAdvanceMailingLabel = $MaxDateAdvanceMailingLabel;

        return $new;
    }

    /**
     * @return int
     */
    public function getMaxDateAdvanceShippingLabel() : int
    {
        return $this->MaxDateAdvanceShippingLabel;
    }

    /**
     * @param int $MaxDateAdvanceShippingLabel
     * @return static
     */
    public function withMaxDateAdvanceShippingLabel(int $MaxDateAdvanceShippingLabel) : static
    {
        $new = clone $this;
        $new->MaxDateAdvanceShippingLabel = $MaxDateAdvanceShippingLabel;

        return $new;
    }
}

