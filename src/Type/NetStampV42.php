<?php

namespace Knightar\StampsSoapClient\Type;

class NetStampV42
{
    /**
     * @var int
     */
    private int $Row;

    /**
     * @var int
     */
    private int $Column;

    /**
     * @var \Knightar\StampsSoapClient\Type\RateV46
     */
    private \Knightar\StampsSoapClient\Type\RateV46 $Rate;

    /**
     * @return int
     */
    public function getRow() : int
    {
        return $this->Row;
    }

    /**
     * @param int $Row
     * @return static
     */
    public function withRow(int $Row) : static
    {
        $new = clone $this;
        $new->Row = $Row;

        return $new;
    }

    /**
     * @return int
     */
    public function getColumn() : int
    {
        return $this->Column;
    }

    /**
     * @param int $Column
     * @return static
     */
    public function withColumn(int $Column) : static
    {
        $new = clone $this;
        $new->Column = $Column;

        return $new;
    }

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
}

