<?php

namespace Knightar\StampsSoapClient\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetNotificationSettingsResponse implements ResultInterface
{
    /**
     * @var string
     */
    private string $Authenticator;

    /**
     * @var null | string
     */
    private ?string $DefaultNotificationSettingId = null;

    /**
     * @var \Knightar\StampsSoapClient\Type\ArrayOfNotificationSetting
     */
    private \Knightar\StampsSoapClient\Type\ArrayOfNotificationSetting $NotificationSettings;

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
     * @return null | string
     */
    public function getDefaultNotificationSettingId() : ?string
    {
        return $this->DefaultNotificationSettingId;
    }

    /**
     * @param null | string $DefaultNotificationSettingId
     * @return static
     */
    public function withDefaultNotificationSettingId(?string $DefaultNotificationSettingId) : static
    {
        $new = clone $this;
        $new->DefaultNotificationSettingId = $DefaultNotificationSettingId;

        return $new;
    }

    /**
     * @return \Knightar\StampsSoapClient\Type\ArrayOfNotificationSetting
     */
    public function getNotificationSettings() : \Knightar\StampsSoapClient\Type\ArrayOfNotificationSetting
    {
        return $this->NotificationSettings;
    }

    /**
     * @param \Knightar\StampsSoapClient\Type\ArrayOfNotificationSetting $NotificationSettings
     * @return static
     */
    public function withNotificationSettings(\Knightar\StampsSoapClient\Type\ArrayOfNotificationSetting $NotificationSettings) : static
    {
        $new = clone $this;
        $new->NotificationSettings = $NotificationSettings;

        return $new;
    }
}

