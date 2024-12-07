<?php

namespace Knightar\StampsSoapClient\Type;

class ArrayOfDefaultPaymentMethodTypeOptions
{
    /**
     * @var array<int<0,max>, 'AllDefaultPaymentMethods' | 'DefaultServiceFeePaymentMethod' | 'DefaultPostalPurchasePaymentMethod' | 'DefaultStorePaymentMethod'>
     */
    private array $DefaultPaymentMethodTypeOptions;

    /**
     * @return array<int<0,max>, 'AllDefaultPaymentMethods' | 'DefaultServiceFeePaymentMethod' | 'DefaultPostalPurchasePaymentMethod' | 'DefaultStorePaymentMethod'>
     */
    public function getDefaultPaymentMethodTypeOptions() : array
    {
        return $this->DefaultPaymentMethodTypeOptions;
    }

    /**
     * @param array<int<0,max>, 'AllDefaultPaymentMethods' | 'DefaultServiceFeePaymentMethod' | 'DefaultPostalPurchasePaymentMethod' | 'DefaultStorePaymentMethod'> $DefaultPaymentMethodTypeOptions
     * @return static
     */
    public function withDefaultPaymentMethodTypeOptions(array $DefaultPaymentMethodTypeOptions) : static
    {
        $new = clone $this;
        $new->DefaultPaymentMethodTypeOptions = $DefaultPaymentMethodTypeOptions;

        return $new;
    }
}

