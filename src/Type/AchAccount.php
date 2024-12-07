<?php

namespace Knightar\StampsSoapClient\Type;

class AchAccount
{
    /**
     * @var 'Checking' | 'Savings'
     */
    private string $AchAccountType;

    /**
     * @var null | string
     */
    private ?string $BankName = null;

    /**
     * @var null | string
     */
    private ?string $AccountNumber = null;

    /**
     * @var null | string
     */
    private ?string $RouteID = null;

    /**
     * @var null | string
     */
    private ?string $AccountHolderName = null;

    /**
     * @return 'Checking' | 'Savings'
     */
    public function getAchAccountType() : string
    {
        return $this->AchAccountType;
    }

    /**
     * @param 'Checking' | 'Savings' $AchAccountType
     * @return static
     */
    public function withAchAccountType(string $AchAccountType) : static
    {
        $new = clone $this;
        $new->AchAccountType = $AchAccountType;

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
    public function getRouteID() : ?string
    {
        return $this->RouteID;
    }

    /**
     * @param null | string $RouteID
     * @return static
     */
    public function withRouteID(?string $RouteID) : static
    {
        $new = clone $this;
        $new->RouteID = $RouteID;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getAccountHolderName() : ?string
    {
        return $this->AccountHolderName;
    }

    /**
     * @param null | string $AccountHolderName
     * @return static
     */
    public function withAccountHolderName(?string $AccountHolderName) : static
    {
        $new = clone $this;
        $new->AccountHolderName = $AccountHolderName;

        return $new;
    }
}

