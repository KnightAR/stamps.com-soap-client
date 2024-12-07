<?php

namespace Knightar\StampsSoapClient\Type;

use \Knightar\StampsSoapClient\Type\CarrierPickupAddress;

class CarrierPickupAddressV2 extends CarrierPickupAddress
{
    /**
     * @var null | string
     */
    private ?string $Address2 = null;

    /**
     * @var null | string
     */
    private ?string $Address3 = null;

    /**
     * @return null | string
     */
    public function getAddress2() : ?string
    {
        return $this->Address2;
    }

    /**
     * @param null | string $Address2
     * @return static
     */
    public function withAddress2(?string $Address2) : static
    {
        $new = clone $this;
        $new->Address2 = $Address2;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getAddress3() : ?string
    {
        return $this->Address3;
    }

    /**
     * @param null | string $Address3
     * @return static
     */
    public function withAddress3(?string $Address3) : static
    {
        $new = clone $this;
        $new->Address3 = $Address3;

        return $new;
    }
}

