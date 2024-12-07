<?php

namespace Knightar\StampsSoapClient\Type;

class Toggles
{
    /**
     * @var null | bool
     */
    private ?bool $ShowCustomColors = null;

    /**
     * @var null | bool
     */
    private ?bool $ShowSocialMedia = null;

    /**
     * @var null | bool
     */
    private ?bool $ShowStoreUrl = null;

    /**
     * @var null | bool
     */
    private ?bool $ShowMenuLinks = null;

    /**
     * @var null | bool
     */
    private ?bool $ShowReturnPolicy = null;

    /**
     * @var null | bool
     */
    private ?bool $ShowEmail = null;

    /**
     * @var null | bool
     */
    private ?bool $ShowPhone = null;

    /**
     * @var null | bool
     */
    private ?bool $ShowShipmentDetails = null;

    /**
     * @var null | bool
     */
    private ?bool $ShowItemImages = null;

    /**
     * @var null | bool
     */
    private ?bool $ShowShipmentPrices = null;

    /**
     * @var null | bool
     */
    private ?bool $ShowStoreAddress = null;

    /**
     * @return null | bool
     */
    public function getShowCustomColors() : ?bool
    {
        return $this->ShowCustomColors;
    }

    /**
     * @param null | bool $ShowCustomColors
     * @return static
     */
    public function withShowCustomColors(?bool $ShowCustomColors) : static
    {
        $new = clone $this;
        $new->ShowCustomColors = $ShowCustomColors;

        return $new;
    }

    /**
     * @return null | bool
     */
    public function getShowSocialMedia() : ?bool
    {
        return $this->ShowSocialMedia;
    }

    /**
     * @param null | bool $ShowSocialMedia
     * @return static
     */
    public function withShowSocialMedia(?bool $ShowSocialMedia) : static
    {
        $new = clone $this;
        $new->ShowSocialMedia = $ShowSocialMedia;

        return $new;
    }

    /**
     * @return null | bool
     */
    public function getShowStoreUrl() : ?bool
    {
        return $this->ShowStoreUrl;
    }

    /**
     * @param null | bool $ShowStoreUrl
     * @return static
     */
    public function withShowStoreUrl(?bool $ShowStoreUrl) : static
    {
        $new = clone $this;
        $new->ShowStoreUrl = $ShowStoreUrl;

        return $new;
    }

    /**
     * @return null | bool
     */
    public function getShowMenuLinks() : ?bool
    {
        return $this->ShowMenuLinks;
    }

    /**
     * @param null | bool $ShowMenuLinks
     * @return static
     */
    public function withShowMenuLinks(?bool $ShowMenuLinks) : static
    {
        $new = clone $this;
        $new->ShowMenuLinks = $ShowMenuLinks;

        return $new;
    }

    /**
     * @return null | bool
     */
    public function getShowReturnPolicy() : ?bool
    {
        return $this->ShowReturnPolicy;
    }

    /**
     * @param null | bool $ShowReturnPolicy
     * @return static
     */
    public function withShowReturnPolicy(?bool $ShowReturnPolicy) : static
    {
        $new = clone $this;
        $new->ShowReturnPolicy = $ShowReturnPolicy;

        return $new;
    }

    /**
     * @return null | bool
     */
    public function getShowEmail() : ?bool
    {
        return $this->ShowEmail;
    }

    /**
     * @param null | bool $ShowEmail
     * @return static
     */
    public function withShowEmail(?bool $ShowEmail) : static
    {
        $new = clone $this;
        $new->ShowEmail = $ShowEmail;

        return $new;
    }

    /**
     * @return null | bool
     */
    public function getShowPhone() : ?bool
    {
        return $this->ShowPhone;
    }

    /**
     * @param null | bool $ShowPhone
     * @return static
     */
    public function withShowPhone(?bool $ShowPhone) : static
    {
        $new = clone $this;
        $new->ShowPhone = $ShowPhone;

        return $new;
    }

    /**
     * @return null | bool
     */
    public function getShowShipmentDetails() : ?bool
    {
        return $this->ShowShipmentDetails;
    }

    /**
     * @param null | bool $ShowShipmentDetails
     * @return static
     */
    public function withShowShipmentDetails(?bool $ShowShipmentDetails) : static
    {
        $new = clone $this;
        $new->ShowShipmentDetails = $ShowShipmentDetails;

        return $new;
    }

    /**
     * @return null | bool
     */
    public function getShowItemImages() : ?bool
    {
        return $this->ShowItemImages;
    }

    /**
     * @param null | bool $ShowItemImages
     * @return static
     */
    public function withShowItemImages(?bool $ShowItemImages) : static
    {
        $new = clone $this;
        $new->ShowItemImages = $ShowItemImages;

        return $new;
    }

    /**
     * @return null | bool
     */
    public function getShowShipmentPrices() : ?bool
    {
        return $this->ShowShipmentPrices;
    }

    /**
     * @param null | bool $ShowShipmentPrices
     * @return static
     */
    public function withShowShipmentPrices(?bool $ShowShipmentPrices) : static
    {
        $new = clone $this;
        $new->ShowShipmentPrices = $ShowShipmentPrices;

        return $new;
    }

    /**
     * @return null | bool
     */
    public function getShowStoreAddress() : ?bool
    {
        return $this->ShowStoreAddress;
    }

    /**
     * @param null | bool $ShowStoreAddress
     * @return static
     */
    public function withShowStoreAddress(?bool $ShowStoreAddress) : static
    {
        $new = clone $this;
        $new->ShowStoreAddress = $ShowStoreAddress;

        return $new;
    }
}

