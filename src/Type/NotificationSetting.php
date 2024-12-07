<?php

namespace Knightar\StampsSoapClient\Type;

class NotificationSetting
{
    /**
     * @var string
     */
    private string $NotificationSettingId;

    /**
     * @var null | \Knightar\StampsSoapClient\Type\NotificationSettingProperties
     */
    private ?\Knightar\StampsSoapClient\Type\NotificationSettingProperties $NotificationSettingProperties = null;

    /**
     * @var null | string
     */
    private ?string $Reference = null;

    /**
     * @return string
     */
    public function getNotificationSettingId() : string
    {
        return $this->NotificationSettingId;
    }

    /**
     * @param string $NotificationSettingId
     * @return static
     */
    public function withNotificationSettingId(string $NotificationSettingId) : static
    {
        $new = clone $this;
        $new->NotificationSettingId = $NotificationSettingId;

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
}

