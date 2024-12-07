<?php

namespace Knightar\StampsSoapClient\Type;

class ArrayOfNotificationSetting
{
    /**
     * @var null | array<int<0,max>, \Knightar\StampsSoapClient\Type\NotificationSetting>
     */
    private ?array $NotificationSetting = null;

    /**
     * @return null | array<int<0,max>, \Knightar\StampsSoapClient\Type\NotificationSetting>
     */
    public function getNotificationSetting() : ?array
    {
        return $this->NotificationSetting;
    }

    /**
     * @param null | array<int<0,max>, \Knightar\StampsSoapClient\Type\NotificationSetting> $NotificationSetting
     * @return static
     */
    public function withNotificationSetting(?array $NotificationSetting) : static
    {
        $new = clone $this;
        $new->NotificationSetting = $NotificationSetting;

        return $new;
    }
}

