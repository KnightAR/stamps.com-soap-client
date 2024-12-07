<?php

namespace Knightar\StampsSoapClient\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetNetStampsImagesResponse implements ResultInterface
{
    /**
     * @var string
     */
    private string $Authenticator;

    /**
     * @var \Knightar\StampsSoapClient\Type\ArrayOfNetStampsImage
     */
    private \Knightar\StampsSoapClient\Type\ArrayOfNetStampsImage $NetStampsImages;

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
     * @return \Knightar\StampsSoapClient\Type\ArrayOfNetStampsImage
     */
    public function getNetStampsImages() : \Knightar\StampsSoapClient\Type\ArrayOfNetStampsImage
    {
        return $this->NetStampsImages;
    }

    /**
     * @param \Knightar\StampsSoapClient\Type\ArrayOfNetStampsImage $NetStampsImages
     * @return static
     */
    public function withNetStampsImages(\Knightar\StampsSoapClient\Type\ArrayOfNetStampsImage $NetStampsImages) : static
    {
        $new = clone $this;
        $new->NetStampsImages = $NetStampsImages;

        return $new;
    }
}

