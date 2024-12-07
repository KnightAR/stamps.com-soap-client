<?php

namespace Knightar\StampsSoapClient\Type;

class BrandingProperties
{
    /**
     * @var null | string
     */
    private ?string $ReturnPolicy = null;

    /**
     * @var null | string
     */
    private ?string $Email = null;

    /**
     * @var null | string
     */
    private ?string $Phone = null;

    /**
     * @var null | string
     */
    private ?string $LogoTargetUrl = null;

    /**
     * @var string
     */
    private string $BrandName;

    /**
     * @var null | string
     */
    private ?string $LogoUrl = null;

    /**
     * @var 'Image' | 'Text'
     */
    private string $LogoType;

    /**
     * @var null | \Knightar\StampsSoapClient\Type\ArrayOfMenuLink
     */
    private ?\Knightar\StampsSoapClient\Type\ArrayOfMenuLink $MenuLinks = null;

    /**
     * @var null | \Knightar\StampsSoapClient\Type\ArrayOfSocialMedia
     */
    private ?\Knightar\StampsSoapClient\Type\ArrayOfSocialMedia $SocialMedia = null;

    /**
     * @var null | \Knightar\StampsSoapClient\Type\Toggles
     */
    private ?\Knightar\StampsSoapClient\Type\Toggles $Toggles = null;

    /**
     * @var null | \Knightar\StampsSoapClient\Type\Colors
     */
    private ?\Knightar\StampsSoapClient\Type\Colors $Colors = null;

    /**
     * @var 'Light' | 'Dark' | 'Peach' | 'Multicolor'
     */
    private string $Theme;

    /**
     * @return null | string
     */
    public function getReturnPolicy() : ?string
    {
        return $this->ReturnPolicy;
    }

    /**
     * @param null | string $ReturnPolicy
     * @return static
     */
    public function withReturnPolicy(?string $ReturnPolicy) : static
    {
        $new = clone $this;
        $new->ReturnPolicy = $ReturnPolicy;

        return $new;
    }

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

    /**
     * @return null | string
     */
    public function getPhone() : ?string
    {
        return $this->Phone;
    }

    /**
     * @param null | string $Phone
     * @return static
     */
    public function withPhone(?string $Phone) : static
    {
        $new = clone $this;
        $new->Phone = $Phone;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getLogoTargetUrl() : ?string
    {
        return $this->LogoTargetUrl;
    }

    /**
     * @param null | string $LogoTargetUrl
     * @return static
     */
    public function withLogoTargetUrl(?string $LogoTargetUrl) : static
    {
        $new = clone $this;
        $new->LogoTargetUrl = $LogoTargetUrl;

        return $new;
    }

    /**
     * @return string
     */
    public function getBrandName() : string
    {
        return $this->BrandName;
    }

    /**
     * @param string $BrandName
     * @return static
     */
    public function withBrandName(string $BrandName) : static
    {
        $new = clone $this;
        $new->BrandName = $BrandName;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getLogoUrl() : ?string
    {
        return $this->LogoUrl;
    }

    /**
     * @param null | string $LogoUrl
     * @return static
     */
    public function withLogoUrl(?string $LogoUrl) : static
    {
        $new = clone $this;
        $new->LogoUrl = $LogoUrl;

        return $new;
    }

    /**
     * @return 'Image' | 'Text'
     */
    public function getLogoType() : string
    {
        return $this->LogoType;
    }

    /**
     * @param 'Image' | 'Text' $LogoType
     * @return static
     */
    public function withLogoType(string $LogoType) : static
    {
        $new = clone $this;
        $new->LogoType = $LogoType;

        return $new;
    }

    /**
     * @return null | \Knightar\StampsSoapClient\Type\ArrayOfMenuLink
     */
    public function getMenuLinks() : ?\Knightar\StampsSoapClient\Type\ArrayOfMenuLink
    {
        return $this->MenuLinks;
    }

    /**
     * @param null | \Knightar\StampsSoapClient\Type\ArrayOfMenuLink $MenuLinks
     * @return static
     */
    public function withMenuLinks(?\Knightar\StampsSoapClient\Type\ArrayOfMenuLink $MenuLinks) : static
    {
        $new = clone $this;
        $new->MenuLinks = $MenuLinks;

        return $new;
    }

    /**
     * @return null | \Knightar\StampsSoapClient\Type\ArrayOfSocialMedia
     */
    public function getSocialMedia() : ?\Knightar\StampsSoapClient\Type\ArrayOfSocialMedia
    {
        return $this->SocialMedia;
    }

    /**
     * @param null | \Knightar\StampsSoapClient\Type\ArrayOfSocialMedia $SocialMedia
     * @return static
     */
    public function withSocialMedia(?\Knightar\StampsSoapClient\Type\ArrayOfSocialMedia $SocialMedia) : static
    {
        $new = clone $this;
        $new->SocialMedia = $SocialMedia;

        return $new;
    }

    /**
     * @return null | \Knightar\StampsSoapClient\Type\Toggles
     */
    public function getToggles() : ?\Knightar\StampsSoapClient\Type\Toggles
    {
        return $this->Toggles;
    }

    /**
     * @param null | \Knightar\StampsSoapClient\Type\Toggles $Toggles
     * @return static
     */
    public function withToggles(?\Knightar\StampsSoapClient\Type\Toggles $Toggles) : static
    {
        $new = clone $this;
        $new->Toggles = $Toggles;

        return $new;
    }

    /**
     * @return null | \Knightar\StampsSoapClient\Type\Colors
     */
    public function getColors() : ?\Knightar\StampsSoapClient\Type\Colors
    {
        return $this->Colors;
    }

    /**
     * @param null | \Knightar\StampsSoapClient\Type\Colors $Colors
     * @return static
     */
    public function withColors(?\Knightar\StampsSoapClient\Type\Colors $Colors) : static
    {
        $new = clone $this;
        $new->Colors = $Colors;

        return $new;
    }

    /**
     * @return 'Light' | 'Dark' | 'Peach' | 'Multicolor'
     */
    public function getTheme() : string
    {
        return $this->Theme;
    }

    /**
     * @param 'Light' | 'Dark' | 'Peach' | 'Multicolor' $Theme
     * @return static
     */
    public function withTheme(string $Theme) : static
    {
        $new = clone $this;
        $new->Theme = $Theme;

        return $new;
    }
}

