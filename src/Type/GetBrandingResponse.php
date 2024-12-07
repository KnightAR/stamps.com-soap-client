<?php

namespace Knightar\StampsSoapClient\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetBrandingResponse implements ResultInterface
{
    /**
     * @var string
     */
    private string $Authenticator;

    /**
     * @var \Knightar\StampsSoapClient\Type\ArrayOfBranding
     */
    private \Knightar\StampsSoapClient\Type\ArrayOfBranding $Brandings;

    /**
     * @var null | string
     */
    private ?string $defaultBrandingId = null;

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
     * @return \Knightar\StampsSoapClient\Type\ArrayOfBranding
     */
    public function getBrandings() : \Knightar\StampsSoapClient\Type\ArrayOfBranding
    {
        return $this->Brandings;
    }

    /**
     * @param \Knightar\StampsSoapClient\Type\ArrayOfBranding $Brandings
     * @return static
     */
    public function withBrandings(\Knightar\StampsSoapClient\Type\ArrayOfBranding $Brandings) : static
    {
        $new = clone $this;
        $new->Brandings = $Brandings;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getDefaultBrandingId() : ?string
    {
        return $this->defaultBrandingId;
    }

    /**
     * @param null | string $defaultBrandingId
     * @return static
     */
    public function withDefaultBrandingId(?string $defaultBrandingId) : static
    {
        $new = clone $this;
        $new->defaultBrandingId = $defaultBrandingId;

        return $new;
    }
}

