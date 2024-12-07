<?php

namespace Knightar\StampsSoapClient\Type;

use Phpro\SoapClient\Type\RequestInterface;

class ResubmitPurchase implements RequestInterface
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
    private string $ResubmitCookie;

    /**
     * Constructor
     *
     * @param null | string $Authenticator
     * @param null | \Knightar\StampsSoapClient\Type\Credentials $Credentials
     * @param string $ResubmitCookie
     */
    public function __construct(?string $Authenticator = null, ?\Knightar\StampsSoapClient\Type\Credentials $Credentials = null, string $ResubmitCookie)
    {
        $this->Authenticator = $Authenticator;
        $this->Credentials = $Credentials;
        $this->ResubmitCookie = $ResubmitCookie;
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
    public function getResubmitCookie() : string
    {
        return $this->ResubmitCookie;
    }

    /**
     * @param string $ResubmitCookie
     * @return static
     */
    public function withResubmitCookie(string $ResubmitCookie) : static
    {
        $new = clone $this;
        $new->ResubmitCookie = $ResubmitCookie;

        return $new;
    }
}

