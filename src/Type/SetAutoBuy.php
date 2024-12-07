<?php

namespace Knightar\StampsSoapClient\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SetAutoBuy implements RequestInterface
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
     * @var \Knightar\StampsSoapClient\Type\AutoBuySettings
     */
    private \Knightar\StampsSoapClient\Type\AutoBuySettings $AutoBuySettings;

    /**
     * Constructor
     *
     * @param null | string $Authenticator
     * @param null | \Knightar\StampsSoapClient\Type\Credentials $Credentials
     * @param \Knightar\StampsSoapClient\Type\AutoBuySettings $AutoBuySettings
     */
    public function __construct(?string $Authenticator = null, ?\Knightar\StampsSoapClient\Type\Credentials $Credentials = null, \Knightar\StampsSoapClient\Type\AutoBuySettings $AutoBuySettings)
    {
        $this->Authenticator = $Authenticator;
        $this->Credentials = $Credentials;
        $this->AutoBuySettings = $AutoBuySettings;
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
     * @return \Knightar\StampsSoapClient\Type\AutoBuySettings
     */
    public function getAutoBuySettings() : \Knightar\StampsSoapClient\Type\AutoBuySettings
    {
        return $this->AutoBuySettings;
    }

    /**
     * @param \Knightar\StampsSoapClient\Type\AutoBuySettings $AutoBuySettings
     * @return static
     */
    public function withAutoBuySettings(\Knightar\StampsSoapClient\Type\AutoBuySettings $AutoBuySettings) : static
    {
        $new = clone $this;
        $new->AutoBuySettings = $AutoBuySettings;

        return $new;
    }
}

