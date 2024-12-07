<?php

namespace Knightar\StampsSoapClient\Type;

class ArrayOfTransactionType
{
    /**
     * @var array<int<0,max>, 'All' | 'Purchase' | 'Credit' | 'Print' | 'Adjustment' | 'Refund'>
     */
    private array $TransactionType;

    /**
     * @return array<int<0,max>, 'All' | 'Purchase' | 'Credit' | 'Print' | 'Adjustment' | 'Refund'>
     */
    public function getTransactionType() : array
    {
        return $this->TransactionType;
    }

    /**
     * @param array<int<0,max>, 'All' | 'Purchase' | 'Credit' | 'Print' | 'Adjustment' | 'Refund'> $TransactionType
     * @return static
     */
    public function withTransactionType(array $TransactionType) : static
    {
        $new = clone $this;
        $new->TransactionType = $TransactionType;

        return $new;
    }
}

