<?php

namespace Knightar\StampsSoapClient\Type;

class Branding
{
    /**
     * @var null | string
     */
    private ?string $BrandingId = null;

    /**
     * @var null | \Knightar\StampsSoapClient\Type\BrandingProperties
     */
    private ?\Knightar\StampsSoapClient\Type\BrandingProperties $BrandingProperties = null;

    /**
     * @var null | string
     */
    private ?string $Reference = null;

    /**
     * @return null | string
     */
    public function getBrandingId() : ?string
    {
        return $this->BrandingId;
    }

    /**
     * @param null | string $BrandingId
     * @return static
     */
    public function withBrandingId(?string $BrandingId) : static
    {
        $new = clone $this;
        $new->BrandingId = $BrandingId;

        return $new;
    }

    /**
     * @return null | \Knightar\StampsSoapClient\Type\BrandingProperties
     */
    public function getBrandingProperties() : ?\Knightar\StampsSoapClient\Type\BrandingProperties
    {
        return $this->BrandingProperties;
    }

    /**
     * @param null | \Knightar\StampsSoapClient\Type\BrandingProperties $BrandingProperties
     * @return static
     */
    public function withBrandingProperties(?\Knightar\StampsSoapClient\Type\BrandingProperties $BrandingProperties) : static
    {
        $new = clone $this;
        $new->BrandingProperties = $BrandingProperties;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getReference() : ?string
    {
        return $this->Reference;
    }

    /**
     * @param null | string $Reference
     * @return static
     */
    public function withReference(?string $Reference) : static
    {
        $new = clone $this;
        $new->Reference = $Reference;

        return $new;
    }
}

