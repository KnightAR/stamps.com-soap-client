<?php

namespace Knightar\StampsSoapClient\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetBalanceHistoryByTokenResponse implements ResultInterface
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
    private int $TransactionsPerPage;

    /**
     * @var int
     */
    private int $TotalTransactions;

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
    public function getTransactionsPerPage() : int
    {
        return $this->TransactionsPerPage;
    }

    /**
     * @param int $TransactionsPerPage
     * @return static
     */
    public function withTransactionsPerPage(int $TransactionsPerPage) : static
    {
        $new = clone $this;
        $new->TransactionsPerPage = $TransactionsPerPage;

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

