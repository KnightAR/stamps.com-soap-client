<?php

namespace Knightar\StampsSoapClient\Type;

use Phpro\SoapClient\Type\RequestInterface;

class StartAccountVerification implements RequestInterface
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
     * @var null | string
     */
    private ?string $PhoneNumber = null;

    /**
     * @var null | string
     */
    private ?string $Extension = null;

    /**
     * @var 'SMS' | 'Voice'
     */
    private string $PhoneVerificationOption;

// Defining constants for phone verification options
    const PHONE_VERIFICATION_OPTION_SMS = 'SMS';
    const PHONE_VERIFICATION_OPTION_VOICE = 'Voice';

    /**
     * Constructor
     *
     * @param string | 'SMS' | 'Voice' $PhoneVerificationOption
     * @param null | string $PhoneNumber
     * @param null | string $Extension
     * @param null | string $Authenticator
     * @param null | \Knightar\StampsSoapClient\Type\Credentials $Credentials
     */
    public function __construct(
        string                                       $PhoneVerificationOption,
        ?string                                      $PhoneNumber = null,
        ?string                                      $Extension = null,
        ?string                                      $Authenticator = null,
        ?\Knightar\StampsSoapClient\Type\Credentials $Credentials = null
    )
    {
        $this->Authenticator = $Authenticator;
        $this->Credentials = $Credentials;
        $this->PhoneNumber = $PhoneNumber;
        $this->Extension = $Extension;
        $this->PhoneVerificationOption = $PhoneVerificationOption;
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
     * @return null | string
     */
    public function getPhoneNumber() : ?string
    {
        return $this->PhoneNumber;
    }

    /**
     * @param null | string $PhoneNumber
     * @return static
     */
    public function withPhoneNumber(?string $PhoneNumber) : static
    {
        $new = clone $this;
        $new->PhoneNumber = $PhoneNumber;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getExtension() : ?string
    {
        return $this->Extension;
    }

    /**
     * @param null | string $Extension
     * @return static
     */
    public function withExtension(?string $Extension) : static
    {
        $new = clone $this;
        $new->Extension = $Extension;

        return $new;
    }

    /**
     * @return 'SMS' | 'Voice'
     */
    public function getPhoneVerificationOption() : string
    {
        return $this->PhoneVerificationOption;
    }

    /**
     * @param 'SMS' | 'Voice' $PhoneVerificationOption
     * @return static
     */
    public function withPhoneVerificationOption(string $PhoneVerificationOption) : static
    {
        $new = clone $this;
        $new->PhoneVerificationOption = $PhoneVerificationOption;

        return $new;
    }
}

