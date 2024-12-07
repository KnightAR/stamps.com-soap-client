<?php

namespace Knightar\StampsSoapClient\Type;

class PPLAccount
{
    /**
     * @var null | string
     */
    private ?string $PPLSessionRequestID = null;

    /**
     * @return null | string
     */
    public function getPPLSessionRequestID() : ?string
    {
        return $this->PPLSessionRequestID;
    }

    /**
     * @param null | string $PPLSessionRequestID
     * @return static
     */
    public function withPPLSessionRequestID(?string $PPLSessionRequestID) : static
    {
        $new = clone $this;
        $new->PPLSessionRequestID = $PPLSessionRequestID;

        return $new;
    }
}

