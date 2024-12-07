<?php

namespace Knightar\StampsSoapClient\Type;

use Phpro\SoapClient\Type\ResultInterface;

class AddImageResponse implements ResultInterface
{
    /**
     * @var string
     */
    private string $Authenticator;

    /**
     * @var string
     */
    private string $ImageId;

    /**
     * @var string
     */
    private string $ImageUrl;

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
    public function getImageId() : string
    {
        return $this->ImageId;
    }

    /**
     * @param string $ImageId
     * @return static
     */
    public function withImageId(string $ImageId) : static
    {
        $new = clone $this;
        $new->ImageId = $ImageId;

        return $new;
    }

    /**
     * @return string
     */
    public function getImageUrl() : string
    {
        return $this->ImageUrl;
    }

    /**
     * @param string $ImageUrl
     * @return static
     */
    public function withImageUrl(string $ImageUrl) : static
    {
        $new = clone $this;
        $new->ImageUrl = $ImageUrl;

        return $new;
    }
}

