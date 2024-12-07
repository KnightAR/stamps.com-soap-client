<?php

namespace Knightar\StampsSoapClient\Type;

class RegisterShippingProviderAccountRequest
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
     * @var null | \Knightar\StampsSoapClient\Type\Zorbit
     */
    private ?\Knightar\StampsSoapClient\Type\Zorbit $Zorbit = null;

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
     * @return null | \Knightar\StampsSoapClient\Type\Zorbit
     */
    public function getZorbit() : ?\Knightar\StampsSoapClient\Type\Zorbit
    {
        return $this->Zorbit;
    }

    /**
     * @param null | \Knightar\StampsSoapClient\Type\Zorbit $Zorbit
     * @return static
     */
    public function withZorbit(?\Knightar\StampsSoapClient\Type\Zorbit $Zorbit) : static
    {
        $new = clone $this;
        $new->Zorbit = $Zorbit;

        return $new;
    }
}

