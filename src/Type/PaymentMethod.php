<?php

namespace Knightar\StampsSoapClient\Type;

class PaymentMethod
{
    /**
     * @var null | \Knightar\StampsSoapClient\Type\ArrayOfDefaultPaymentMethodTypeOptions
     */
    private ?\Knightar\StampsSoapClient\Type\ArrayOfDefaultPaymentMethodTypeOptions $DefaultPayment = null;

    /**
     * @var null | 'ACH' | 'CreditCard' | 'OMAS' | 'Invoice' | 'EnterprisePaymentAccount' | 'PPL'
     */
    private ?string $BillingMethod = null;

    /**
     * @var null | string
     */
    private ?string $BankName = null;

    /**
     * @var null | 'Visa' | 'MasterCard' | 'AmericanExpress' | 'Discover'
     */
    private ?string $CreditCardType = null;

    /**
     * @var null | string
     */
    private ?string $Last4 = null;

    /**
     * @var null | string
     */
    private ?string $PaymentMethodId = null;

    /**
     * @return null | \Knightar\StampsSoapClient\Type\ArrayOfDefaultPaymentMethodTypeOptions
     */
    public function getDefaultPayment() : ?\Knightar\StampsSoapClient\Type\ArrayOfDefaultPaymentMethodTypeOptions
    {
        return $this->DefaultPayment;
    }

    /**
     * @param null | \Knightar\StampsSoapClient\Type\ArrayOfDefaultPaymentMethodTypeOptions $DefaultPayment
     * @return static
     */
    public function withDefaultPayment(?\Knightar\StampsSoapClient\Type\ArrayOfDefaultPaymentMethodTypeOptions $DefaultPayment) : static
    {
        $new = clone $this;
        $new->DefaultPayment = $DefaultPayment;

        return $new;
    }

    /**
     * @return null | 'ACH' | 'CreditCard' | 'OMAS' | 'Invoice' | 'EnterprisePaymentAccount' | 'PPL'
     */
    public function getBillingMethod() : ?string
    {
        return $this->BillingMethod;
    }

    /**
     * @param null | 'ACH' | 'CreditCard' | 'OMAS' | 'Invoice' | 'EnterprisePaymentAccount' | 'PPL' $BillingMethod
     * @return static
     */
    public function withBillingMethod(?string $BillingMethod) : static
    {
        $new = clone $this;
        $new->BillingMethod = $BillingMethod;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getBankName() : ?string
    {
        return $this->BankName;
    }

    /**
     * @param null | string $BankName
     * @return static
     */
    public function withBankName(?string $BankName) : static
    {
        $new = clone $this;
        $new->BankName = $BankName;

        return $new;
    }

    /**
     * @return null | 'Visa' | 'MasterCard' | 'AmericanExpress' | 'Discover'
     */
    public function getCreditCardType() : ?string
    {
        return $this->CreditCardType;
    }

    /**
     * @param null | 'Visa' | 'MasterCard' | 'AmericanExpress' | 'Discover' $CreditCardType
     * @return static
     */
    public function withCreditCardType(?string $CreditCardType) : static
    {
        $new = clone $this;
        $new->CreditCardType = $CreditCardType;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getLast4() : ?string
    {
        return $this->Last4;
    }

    /**
     * @param null | string $Last4
     * @return static
     */
    public function withLast4(?string $Last4) : static
    {
        $new = clone $this;
        $new->Last4 = $Last4;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getPaymentMethodId() : ?string
    {
        return $this->PaymentMethodId;
    }

    /**
     * @param null | string $PaymentMethodId
     * @return static
     */
    public function withPaymentMethodId(?string $PaymentMethodId) : static
    {
        $new = clone $this;
        $new->PaymentMethodId = $PaymentMethodId;

        return $new;
    }
}

