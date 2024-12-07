<?php

namespace Knightar\StampsSoapClient\Type;

use Phpro\SoapClient\Type\RequestInterface;

class FinishAccountVerification implements RequestInterface
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
    private string $PhoneVerificationCode;

    /**
     * Constructor
     *
     * @param string $PhoneVerificationCode
     * @param null | string $Authenticator
     * @param null | \Knightar\StampsSoapClient\Type\Credentials $Credentials
     */
    public function __construct(
        string                                       $PhoneVerificationCode,
        ?string                                      $Authenticator = null,
        ?\Knightar\StampsSoapClient\Type\Credentials $Credentials = null
    )
    {
        $this->PhoneVerificationCode = $PhoneVerificationCode;
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
     * @return string
     */
    public function getPhoneVerificationCode() : string
    {
        return $this->PhoneVerificationCode;
    }

    /**
     * @param string $PhoneVerificationCode
     * @return static
     */
    public function withPhoneVerificationCode(string $PhoneVerificationCode) : static
    {
        $new = clone $this;
        $new->PhoneVerificationCode = $PhoneVerificationCode;

        return $new;
    }
}

