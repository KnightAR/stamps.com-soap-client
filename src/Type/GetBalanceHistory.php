<?php

namespace Knightar\StampsSoapClient\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetBalanceHistory implements RequestInterface
{
    /**
     * @var null | string
     */
    private ?string $Authenticator = null;

    /**
     * @var null | \Knightar\StampsSoapClient\Type\Credentials
     */
    private ?\Knightar\StampsSoapClient\Type\Credentials $Credentials = null;

    /**
     * @var null | int
     */
    private ?int $TransactionsPerPage = null;

    /**
     * @var \DateTimeInterface
     */
    private \DateTimeInterface $TransactionDateMin;

    /**
     * @var null | \DateTimeInterface
     */
    private ?\DateTimeInterface $TransactionDateMax = null;

    /**
     * @var \Knightar\StampsSoapClient\Type\ArrayOfTransactionType
     */
    private \Knightar\StampsSoapClient\Type\ArrayOfTransactionType $Filters;

    /**
     * Constructor
     *
     * @param \DateTimeInterface $TransactionDateMin
     * @param null | int $TransactionsPerPage
     * @param null | \DateTimeInterface $TransactionDateMax
     * @param \Knightar\StampsSoapClient\Type\ArrayOfTransactionType $Filters
     * @param null | string $Authenticator
     * @param null | \Knightar\StampsSoapClient\Type\Credentials $Credentials
     */
    public function __construct(
        \Knightar\StampsSoapClient\Type\ArrayOfTransactionType $Filters,
        \DateTimeInterface                                     $TransactionDateMin,
        ?\DateTimeInterface                                    $TransactionDateMax = null,
        ?int                                                   $TransactionsPerPage = null,
        ?string                                                $Authenticator = null,
        ?\Knightar\StampsSoapClient\Type\Credentials           $Credentials = null
    )
    {
        $this->TransactionDateMin = $TransactionDateMin;
        $this->TransactionDateMax = $TransactionDateMax;
        $this->TransactionsPerPage = $TransactionsPerPage;
        $this->Authenticator = $Authenticator;
        $this->Credentials = $Credentials;
    }

    /**
     * @return null | string
     */
    public function getAuthenticator() : ?string
    {
        return $this->Authenticator;
    }

    /**
     * @param null | string $Authenticator
     * @return static
     */
    public function withAuthenticator(?string $Authenticator) : static
    {
        $new = clone $this;
        $new->Authenticator = $Authenticator;

        return $new;
    }

    /**
     * @return null | \Knightar\StampsSoapClient\Type\Credentials
     */
    public function getCredentials() : ?\Knightar\StampsSoapClient\Type\Credentials
    {
        return $this->Credentials;
    }

    /**
     * @param null | \Knightar\StampsSoapClient\Type\Credentials $Credentials
     * @return static
     */
    public function withCredentials(?\Knightar\StampsSoapClient\Type\Credentials $Credentials) : static
    {
        $new = clone $this;
        $new->Credentials = $Credentials;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getTransactionsPerPage() : ?int
    {
        return $this->TransactionsPerPage;
    }

    /**
     * @param null | int $TransactionsPerPage
     * @return static
     */
    public function withTransactionsPerPage(?int $TransactionsPerPage) : static
    {
        $new = clone $this;
        $new->TransactionsPerPage = $TransactionsPerPage;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getTransactionDateMin() : \DateTimeInterface
    {
        return $this->TransactionDateMin;
    }

    /**
     * @param \DateTimeInterface $TransactionDateMin
     * @return static
     */
    public function withTransactionDateMin(\DateTimeInterface $TransactionDateMin) : static
    {
        $new = clone $this;
        $new->TransactionDateMin = $TransactionDateMin;

        return $new;
    }

    /**
     * @return null | \DateTimeInterface
     */
    public function getTransactionDateMax() : ?\DateTimeInterface
    {
        return $this->TransactionDateMax;
    }

    /**
     * @param null | \DateTimeInterface $TransactionDateMax
     * @return static
     */
    public function withTransactionDateMax(?\DateTimeInterface $TransactionDateMax) : static
    {
        $new = clone $this;
        $new->TransactionDateMax = $TransactionDateMax;

        return $new;
    }

    /**
     * @return \Knightar\StampsSoapClient\Type\ArrayOfTransactionType
     */
    public function getFilters() : \Knightar\StampsSoapClient\Type\ArrayOfTransactionType
    {
        return $this->Filters;
    }

    /**
     * @param \Knightar\StampsSoapClient\Type\ArrayOfTransactionType $Filters
     * @return static
     */
    public function withFilters(\Knightar\StampsSoapClient\Type\ArrayOfTransactionType $Filters) : static
    {
        $new = clone $this;
        $new->Filters = $Filters;

        return $new;
    }
}

