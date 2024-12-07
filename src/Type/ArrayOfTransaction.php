<?php

namespace Knightar\StampsSoapClient\Type;

class ArrayOfTransaction
{
    /**
     * @var null | array<int<0,max>, \Knightar\StampsSoapClient\Type\Transaction>
     */
    private ?array $Transaction = null;

    /**
     * @return null | array<int<0,max>, \Knightar\StampsSoapClient\Type\Transaction>
     */
    public function getTransaction() : ?array
    {
        return $this->Transaction;
    }

    /**
     * @param null | array<int<0,max>, \Knightar\StampsSoapClient\Type\Transaction> $Transaction
     * @return static
     */
    public function withTransaction(?array $Transaction) : static
    {
        $new = clone $this;
        $new->Transaction = $Transaction;

        return $new;
    }
}

