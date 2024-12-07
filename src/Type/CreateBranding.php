<?php

namespace Knightar\StampsSoapClient\Type;

use Phpro\SoapClient\Type\RequestInterface;

class CreateBranding implements RequestInterface
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
     * @var null | \Knightar\StampsSoapClient\Type\BrandingProperties
     */
    private ?\Knightar\StampsSoapClient\Type\BrandingProperties $BrandingProperties = null;

    /**
     * @var null | string
     */
    private ?string $Reference = null;

    /**
     * @var null | bool
     */
    private ?bool $SetAsDefault = null;

    /**
     * Constructor
     *
     * @param null | string $Authenticator
     * @param null | \Knightar\StampsSoapClient\Type\Credentials $Credentials
     * @param null | \Knightar\StampsSoapClient\Type\BrandingProperties $BrandingProperties
     * @param null | string $Reference
     * @param null | bool $SetAsDefault
     */
    public function __construct(?string $Authenticator = null, ?\Knightar\StampsSoapClient\Type\Credentials $Credentials = null, ?\Knightar\StampsSoapClient\Type\BrandingProperties $BrandingProperties, ?string $Reference, ?bool $SetAsDefault)
    {
        $this->Authenticator = $Authenticator;
        $this->Credentials = $Credentials;
        $this->BrandingProperties = $BrandingProperties;
        $this->Reference = $Reference;
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
     * @return null | \Knightar\StampsSoapClient\Type\BrandingProperties
     */
    public function getBrandingProperties() : ?\Knightar\StampsSoapClient\Type\BrandingProperties
    {
        return $this->BrandingProperties;
    }

    /**
     * @param null | \Knightar\StampsSoapClient\Type\BrandingProperties $BrandingProperties
     * @return static
     */
    public function withBrandingProperties(?\Knightar\StampsSoapClient\Type\BrandingProperties $BrandingProperties) : static
    {
        $new = clone $this;
        $new->BrandingProperties = $BrandingProperties;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getReference() : ?string
    {
        return $this->Reference;
    }

    /**
     * @param null | string $Reference
     * @return static
     */
    public function withReference(?string $Reference) : static
    {
        $new = clone $this;
        $new->Reference = $Reference;

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

