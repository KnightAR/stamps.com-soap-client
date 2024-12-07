<?php

namespace Knightar\StampsSoapClient\Type;

use Phpro\SoapClient\Type\ResultInterface;

class CancelCarrierPickupResponse implements ResultInterface
{
    /**
     * @var string
     */
    private string $Authenticator;

    /**
     * @var string
     */
    private string $PickupStatus;

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
    public function getPickupStatus() : string
    {
        return $this->PickupStatus;
    }

    /**
     * @param string $PickupStatus
     * @return static
     */
    public function withPickupStatus(string $PickupStatus) : static
    {
        $new = clone $this;
        $new->PickupStatus = $PickupStatus;

        return $new;
    }
}

