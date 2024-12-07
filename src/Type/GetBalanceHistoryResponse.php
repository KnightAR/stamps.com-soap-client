<?php

namespace Knightar\StampsSoapClient\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetBalanceHistoryResponse implements ResultInterface
{
    /**
     * @var string
     */
    private string $Authenticator;

    /**
     * @var string
     */
    private string $BalanceHistoryToken;

    /**
     * @var int
     */
    private int $TotalTransactions;

    /**
     * @var int
     */
    private int $TotalPages;

    /**
     * @var null | \Knightar\StampsSoapClient\Type\ArrayOfTransaction
     */
    private ?\Knightar\StampsSoapClient\Type\ArrayOfTransaction $Transactions = null;

    /**
     * @return string
     */
    public function getAuthenticator() : string
    {
        return $this->Authenticator;
    }

    /**
     * @param string $Authenticator
     * @return static
     */
    public function withAuthenticator(string $Authenticator) : static
    {
        $new = clone $this;
        $new->Authenticator = $Authenticator;

        return $new;
    }

    /**
     * @return string
     */
    public function getBalanceHistoryToken() : string
    {
        return $this->BalanceHistoryToken;
    }

    /**
     * @param string $BalanceHistoryToken
     * @return static
     */
    public function withBalanceHistoryToken(string $BalanceHistoryToken) : static
    {
        $new = clone $this;
        $new->BalanceHistoryToken = $BalanceHistoryToken;

        return $new;
    }

    /**
     * @return int
     */
    public function getTotalTransactions() : int
    {
        return $this->TotalTransactions;
    }

    /**
     * @param int $TotalTransactions
     * @return static
     */
    public function withTotalTransactions(int $TotalTransactions) : static
    {
        $new = clone $this;
        $new->TotalTransactions = $TotalTransactions;

        return $new;
    }

    /**
     * @return int
     */
    public function getTotalPages() : int
    {
        return $this->TotalPages;
    }

    /**
     * @param int $TotalPages
     * @return static
     */
    public function withTotalPages(int $TotalPages) : static
    {
        $new = clone $this;
        $new->TotalPages = $TotalPages;

        return $new;
    }

    /**
     * @return null | \Knightar\StampsSoapClient\Type\ArrayOfTransaction
     */
    public function getTransactions() : ?\Knightar\StampsSoapClient\Type\ArrayOfTransaction
    {
        return $this->Transactions;
    }

    /**
     * @param null | \Knightar\StampsSoapClient\Type\ArrayOfTransaction $Transactions
     * @return static
     */
    public function withTransactions(?\Knightar\StampsSoapClient\Type\ArrayOfTransaction $Transactions) : static
    {
        $new = clone $this;
        $new->Transactions = $Transactions;

        return $new;
    }
}

