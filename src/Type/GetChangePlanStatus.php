<?php

namespace Knightar\StampsSoapClient\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetChangePlanStatus implements RequestInterface
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
     * @var int
     */
    private int $TransactionID;

    /**
     * Constructor
     *
     * @param null | string $Authenticator
     * @param null | \Knightar\StampsSoapClient\Type\Credentials $Credentials
     * @param int $TransactionID
     */
    public function __construct(?string $Authenticator = null, ?\Knightar\StampsSoapClient\Type\Credentials $Credentials = null, int $TransactionID)
    {
        $this->Authenticator = $Authenticator;
        $this->Credentials = $Credentials;
        $this->TransactionID = $TransactionID;
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
     * @return int
     */
    public function getTransactionID() : int
    {
        return $this->TransactionID;
    }

    /**
     * @param int $TransactionID
     * @return static
     */
    public function withTransactionID(int $TransactionID) : static
    {
        $new = clone $this;
        $new->TransactionID = $TransactionID;

        return $new;
    }
}

