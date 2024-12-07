<?php

namespace Knightar\StampsSoapClient\Type;

use Phpro\SoapClient\Type\ResultInterface;

class CreateShipmentNotificationResponse implements ResultInterface
{
    /**
     * @var string
     */
    private string $Authenticator;

    /**
     * @var string
     */
    private string $TrackingUrl;

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
    public function getTrackingUrl() : string
    {
        return $this->TrackingUrl;
    }

    /**
     * @param string $TrackingUrl
     * @return static
     */
    public function withTrackingUrl(string $TrackingUrl) : static
    {
        $new = clone $this;
        $new->TrackingUrl = $TrackingUrl;

        return $new;
    }
}

