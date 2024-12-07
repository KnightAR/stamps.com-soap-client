<?php

namespace Knightar\StampsSoapClient\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetURLResponse implements ResultInterface
{
    /**
     * @var string
     */
    private string $Authenticator;

    /**
     * @var string
     */
    private string $URL;

    /**
     * @var null | string
     */
    private ?string $PPLSessionRequestID = null;

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
    public function getURL() : string
    {
        return $this->URL;
    }

    /**
     * @param string $URL
     * @return static
     */
    public function withURL(string $URL) : static
    {
        $new = clone $this;
        $new->URL = $URL;

        return $new;
    }

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

