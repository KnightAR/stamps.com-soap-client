<?php

namespace Knightar\StampsSoapClient\Type;

use Phpro\SoapClient\Type\RequestInterface;

class ModifyBranding implements RequestInterface
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
     * @var \Knightar\StampsSoapClient\Type\Branding
     */
    private \Knightar\StampsSoapClient\Type\Branding $Branding;

    /**
     * @var null | bool
     */
    private ?bool $SetAsDefault = null;

    /**
     * Constructor
     *
     * @param \Knightar\StampsSoapClient\Type\Branding $Branding
     * @param null | bool $SetAsDefault
     * @param null | string $Authenticator
     * @param null | \Knightar\StampsSoapClient\Type\Credentials $Credentials
     */
    public function __construct(
        \Knightar\StampsSoapClient\Type\Branding     $Branding,
        ?bool                                        $SetAsDefault = null,
        ?string                                      $Authenticator = null,
        ?\Knightar\StampsSoapClient\Type\Credentials $Credentials = null
    )
    {
        $this->Authenticator = $Authenticator;
        $this->Credentials = $Credentials;
        $this->Branding = $Branding;
        $this->SetAsDefault = $SetAsDefault;
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
     * @return \Knightar\StampsSoapClient\Type\Branding
     */
    public function getBranding() : \Knightar\StampsSoapClient\Type\Branding
    {
        return $this->Branding;
    }

    /**
     * @param \Knightar\StampsSoapClient\Type\Branding $Branding
     * @return static
     */
    public function withBranding(\Knightar\StampsSoapClient\Type\Branding $Branding) : static
    {
        $new = clone $this;
        $new->Branding = $Branding;

        return $new;
    }

    /**
     * @return null | bool
     */
    public function getSetAsDefault() : ?bool
    {
        return $this->SetAsDefault;
    }

    /**
     * @param null | bool $SetAsDefault
     * @return static
     */
    public function withSetAsDefault(?bool $SetAsDefault) : static
    {
        $new = clone $this;
        $new->SetAsDefault = $SetAsDefault;

        return $new;
    }
}

