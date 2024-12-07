<?php

namespace Knightar\StampsSoapClient\Type;

use Phpro\SoapClient\Type\ResultInterface;

class AuthenticateBridgeAuthenticatorResponse implements ResultInterface
{
    /**
     * @var string
     */
    private string $Authenticator;

    /**
     * @var bool
     */
    private bool $Authenticated;

    /**
     * @var \Knightar\StampsSoapClient\Type\UserInfo
     */
    private \Knightar\StampsSoapClient\Type\UserInfo $AccountInfo;

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
     * @return bool
     */
    public function getAuthenticated() : bool
    {
        return $this->Authenticated;
    }

    /**
     * @param bool $Authenticated
     * @return static
     */
    public function withAuthenticated(bool $Authenticated) : static
    {
        $new = clone $this;
        $new->Authenticated = $Authenticated;

        return $new;
    }

    /**
     * @return \Knightar\StampsSoapClient\Type\UserInfo
     */
    public function getAccountInfo() : \Knightar\StampsSoapClient\Type\UserInfo
    {
        return $this->AccountInfo;
    }

    /**
     * @param \Knightar\StampsSoapClient\Type\UserInfo $AccountInfo
     * @return static
     */
    public function withAccountInfo(\Knightar\StampsSoapClient\Type\UserInfo $AccountInfo) : static
    {
        $new = clone $this;
        $new->AccountInfo = $AccountInfo;

        return $new;
    }
}

