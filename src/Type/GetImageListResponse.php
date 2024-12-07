<?php

namespace Knightar\StampsSoapClient\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetImageListResponse implements ResultInterface
{
    /**
     * @var string
     */
    private string $Authenticator;

    /**
     * @var \Knightar\StampsSoapClient\Type\ArrayOfImage
     */
    private \Knightar\StampsSoapClient\Type\ArrayOfImage $Images;

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
     * @return \Knightar\StampsSoapClient\Type\ArrayOfImage
     */
    public function getImages() : \Knightar\StampsSoapClient\Type\ArrayOfImage
    {
        return $this->Images;
    }

    /**
     * @param \Knightar\StampsSoapClient\Type\ArrayOfImage $Images
     * @return static
     */
    public function withImages(\Knightar\StampsSoapClient\Type\ArrayOfImage $Images) : static
    {
        $new = clone $this;
        $new->Images = $Images;

        return $new;
    }
}

