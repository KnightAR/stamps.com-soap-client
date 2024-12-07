<?php

namespace Knightar\StampsSoapClient\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetBalanceHistoryByToken implements RequestInterface
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
     * @var string
     */
    private string $BalanceHistoryToken;

    /**
     * @var null | int
     */
    private ?int $PageNumber = null;

    /**
     * Constructor
     *
     * @param null | string $Authenticator
     * @param null | \Knightar\StampsSoapClient\Type\Credentials $Credentials
     * @param string $BalanceHistoryToken
     * @param null | int $PageNumber
     */
    public function __construct(?string $Authenticator = null, ?\Knightar\StampsSoapClient\Type\Credentials $Credentials = null, string $BalanceHistoryToken, ?int $PageNumber)
    {
        $this->Authenticator = $Authenticator;
        $this->Credentials = $Credentials;
        $this->BalanceHistoryToken = $BalanceHistoryToken;
        $this->PageNumber = $PageNumber;
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
     * @return null | int
     */
    public function getPageNumber() : ?int
    {
        return $this->PageNumber;
    }

    /**
     * @param null | int $PageNumber
     * @return static
     */
    public function withPageNumber(?int $PageNumber) : static
    {
        $new = clone $this;
        $new->PageNumber = $PageNumber;

        return $new;
    }
}

