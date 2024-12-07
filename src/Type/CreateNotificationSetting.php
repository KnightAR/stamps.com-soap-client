<?php

namespace Knightar\StampsSoapClient\Type;

use Phpro\SoapClient\Type\RequestInterface;

class CreateNotificationSetting implements RequestInterface
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
     * @var null | \Knightar\StampsSoapClient\Type\NotificationSettingProperties
     */
    private ?\Knightar\StampsSoapClient\Type\NotificationSettingProperties $NotificationSettingProperties = null;

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
     * @param \Knightar\StampsSoapClient\Type\NotificationSettingProperties|null $NotificationSettingProperties
     * @param string|null $Reference
     * @param bool|null $SetAsDefault
     * @param null|string $Authenticator
     * @param null|\Knightar\StampsSoapClient\Type\Credentials $Credentials
     */
    public function __construct(
        ?\Knightar\StampsSoapClient\Type\NotificationSettingProperties $NotificationSettingProperties = null,
        ?string                                                        $Reference = null,
        ?bool                                                          $SetAsDefault = null,
        ?string                                                        $Authenticator = null,
        ?\Knightar\StampsSoapClient\Type\Credentials                   $Credentials = null
    )
    {
        $this->NotificationSettingProperties = $NotificationSettingProperties;
        $this->Reference = $Reference;
        $this->SetAsDefault = $SetAsDefault;
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
     * @return null | \Knightar\StampsSoapClient\Type\NotificationSettingProperties
     */
    public function getNotificationSettingProperties() : ?\Knightar\StampsSoapClient\Type\NotificationSettingProperties
    {
        return $this->NotificationSettingProperties;
    }

    /**
     * @param null | \Knightar\StampsSoapClient\Type\NotificationSettingProperties $NotificationSettingProperties
     * @return static
     */
    public function withNotificationSettingProperties(?\Knightar\StampsSoapClient\Type\NotificationSettingProperties $NotificationSettingProperties) : static
    {
        $new = clone $this;
        $new->NotificationSettingProperties = $NotificationSettingProperties;

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

