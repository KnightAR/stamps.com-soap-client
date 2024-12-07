<?php

namespace Knightar\StampsSoapClient\Type;

use Phpro\SoapClient\Type\ResultInterface;

class CreateNotificationSettingResponse implements ResultInterface
{
    /**
     * @var string
     */
    private string $Authenticator;

    /**
     * @var string
     */
    private string $NotificationSettingId;

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
}

