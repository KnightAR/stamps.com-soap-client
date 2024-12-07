<?php

namespace Knightar\StampsSoapClient\Type;

class CreditCard
{
    /**
     * @var 'Visa' | 'MasterCard' | 'AmericanExpress' | 'Discover'
     */
    private string $CreditCardType;

    /**
     * @var null | string
     */
    private ?string $AccountNumber = null;

    /**
     * @var null | string
     */
    private ?string $CVN = null;

    /**
     * @var \DateTimeInterface
     */
    private \DateTimeInterface $ExpirationDate;

    /**
     * @var null | \Knightar\StampsSoapClient\Type\Address
     */
    private ?\Knightar\StampsSoapClient\Type\Address $BillingAddress = null;

    /**
     * @return 'Visa' | 'MasterCard' | 'AmericanExpress' | 'Discover'
     */
    public function getCreditCardType() : string
    {
        return $this->CreditCardType;
    }

    /**
     * @param 'Visa' | 'MasterCard' | 'AmericanExpress' | 'Discover' $CreditCardType
     * @return static
     */
    public function withCreditCardType(string $CreditCardType) : static
    {
        $new = clone $this;
        $new->CreditCardType = $CreditCardType;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getAccountNumber() : ?string
    {
        return $this->AccountNumber;
    }

    /**
     * @param null | string $AccountNumber
     * @return static
     */
    public function withAccountNumber(?string $AccountNumber) : static
    {
        $new = clone $this;
        $new->AccountNumber = $AccountNumber;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getCVN() : ?string
    {
        return $this->CVN;
    }

    /**
     * @param null | string $CVN
     * @return static
     */
    public function withCVN(?string $CVN) : static
    {
        $new = clone $this;
        $new->CVN = $CVN;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getExpirationDate() : \DateTimeInterface
    {
        return $this->ExpirationDate;
    }

    /**
     * @param \DateTimeInterface $ExpirationDate
     * @return static
     */
    public function withExpirationDate(\DateTimeInterface $ExpirationDate) : static
    {
        $new = clone $this;
        $new->ExpirationDate = $ExpirationDate;

        return $new;
    }

    /**
     * @return null | \Knightar\StampsSoapClient\Type\Address
     */
    public function getBillingAddress() : ?\Knightar\StampsSoapClient\Type\Address
    {
        return $this->BillingAddress;
    }

    /**
     * @param null | \Knightar\StampsSoapClient\Type\Address $BillingAddress
     * @return static
     */
    public function withBillingAddress(?\Knightar\StampsSoapClient\Type\Address $BillingAddress) : static
    {
        $new = clone $this;
        $new->BillingAddress = $BillingAddress;

        return $new;
    }
}

