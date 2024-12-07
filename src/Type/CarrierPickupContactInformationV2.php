<?php

namespace Knightar\StampsSoapClient\Type;

use \Knightar\StampsSoapClient\Type\CarrierPickupContactInformation;

class CarrierPickupContactInformationV2 extends CarrierPickupContactInformation
{
    /**
     * @var null | string
     */
    private ?string $Email = null;

    /**
     * @return null | string
     */
    public function getEmail() : ?string
    {
        return $this->Email;
    }

    /**
     * @param null | string $Email
     * @return static
     */
    public function withEmail(?string $Email) : static
    {
        $new = clone $this;
        $new->Email = $Email;

        return $new;
    }
}

