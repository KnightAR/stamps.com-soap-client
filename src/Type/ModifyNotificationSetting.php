<?php

namespace Knightar\StampsSoapClient\Type;

use Phpro\SoapClient\Type\RequestInterface;

class ModifyNotificationSetting implements RequestInterface
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
     * @var null | \Knightar\StampsSoapClient\Type\NotificationSetting
     */
    private ?\Knightar\StampsSoapClient\Type\NotificationSetting $NotificationSetting = null;

    /**
     * @var null | bool
     */
    private ?bool $SetAsDefault = null;

    /**
     * Constructor
     *
     * @param \Knightar\StampsSoapClient\Type\NotificationSetting|null $NotificationSetting
     * @param bool|null $SetAsDefault
     * @param string|null $Authenticator
     * @param \Knightar\StampsSoapClient\Type\Credentials|null $Credentials
     */
    public function __construct(
        ?\Knightar\StampsSoapClient\Type\NotificationSetting $NotificationSetting = null,
        ?bool                                                $SetAsDefault = null,
        ?string                                              $Authenticator = null,
        ?\Knightar\StampsSoapClient\Type\Credentials         $Credentials = null
    )
    {
        $this->Authenticator = $Authenticator;
        $this->Credentials = $Credentials;
        $this->NotificationSetting = $NotificationSetting;
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
     * @return null | \Knightar\StampsSoapClient\Type\NotificationSetting
     */
    public function getNotificationSetting() : ?\Knightar\StampsSoapClient\Type\NotificationSetting
    {
        return $this->NotificationSetting;
    }

    /**
     * @param null | \Knightar\StampsSoapClient\Type\NotificationSetting $NotificationSetting
     * @return static
     */
    public function withNotificationSetting(?\Knightar\StampsSoapClient\Type\NotificationSetting $NotificationSetting) : static
    {
        $new = clone $this;
        $new->NotificationSetting = $NotificationSetting;

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

