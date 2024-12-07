<?php

namespace Knightar\StampsSoapClient\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetCarrierPickupListResponse implements ResultInterface
{
    /**
     * @var string
     */
    private string $Authenticator;

    /**
     * @var null | \Knightar\StampsSoapClient\Type\ArrayOfCarrierPickupInformation
     */
    private ?\Knightar\StampsSoapClient\Type\ArrayOfCarrierPickupInformation $Pickups = null;

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
     * @return null | \Knightar\StampsSoapClient\Type\ArrayOfCarrierPickupInformation
     */
    public function getPickups() : ?\Knightar\StampsSoapClient\Type\ArrayOfCarrierPickupInformation
    {
        return $this->Pickups;
    }

    /**
     * @param null | \Knightar\StampsSoapClient\Type\ArrayOfCarrierPickupInformation $Pickups
     * @return static
     */
    public function withPickups(?\Knightar\StampsSoapClient\Type\ArrayOfCarrierPickupInformation $Pickups) : static
    {
        $new = clone $this;
        $new->Pickups = $Pickups;

        return $new;
    }
}

