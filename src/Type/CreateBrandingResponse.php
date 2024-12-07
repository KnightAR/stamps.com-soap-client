<?php

namespace Knightar\StampsSoapClient\Type;

use Phpro\SoapClient\Type\ResultInterface;

class CreateBrandingResponse implements ResultInterface
{
    /**
     * @var string
     */
    private string $Authenticator;

    /**
     * @var string
     */
    private string $BrandingId;

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
    public function getBrandingId() : string
    {
        return $this->BrandingId;
    }

    /**
     * @param string $BrandingId
     * @return static
     */
    public function withBrandingId(string $BrandingId) : static
    {
        $new = clone $this;
        $new->BrandingId = $BrandingId;

        return $new;
    }
}

