<?php

namespace Knightar\StampsSoapClient\Type;

use Phpro\SoapClient\Type\RequestInterface;

class ChangePassword implements RequestInterface
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
    private ?string $OldPassword = null;

    /**
     * @var string
     */
    private string $NewPassword;

    /**
     * Constructor
     *
     * @param null | string $Authenticator
     * @param null | \Knightar\StampsSoapClient\Type\Credentials $Credentials
     * @param null | string $OldPassword
     * @param string $NewPassword
     */
    public function __construct(?string $Authenticator = null, ?\Knightar\StampsSoapClient\Type\Credentials $Credentials = null, ?string $OldPassword, string $NewPassword)
    {
        $this->Authenticator = $Authenticator;
        $this->Credentials = $Credentials;
        $this->OldPassword = $OldPassword;
        $this->NewPassword = $NewPassword;
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
    public function getOldPassword() : ?string
    {
        return $this->OldPassword;
    }

    /**
     * @param null | string $OldPassword
     * @return static
     */
    public function withOldPassword(?string $OldPassword) : static
    {
        $new = clone $this;
        $new->OldPassword = $OldPassword;

        return $new;
    }

    /**
     * @return string
     */
    public function getNewPassword() : string
    {
        return $this->NewPassword;
    }

    /**
     * @param string $NewPassword
     * @return static
     */
    public function withNewPassword(string $NewPassword) : static
    {
        $new = clone $this;
        $new->NewPassword = $NewPassword;

        return $new;
    }
}

