<?php

namespace Knightar\StampsSoapClient\Type;

class NetStampsImage
{
    /**
     * @var string
     */
    private string $ImageName;

    /**
     * @var int
     */
    private int $ImageID;

    /**
     * @var string
     */
    private string $ImageCategory;

    /**
     * @var string
     */
    private string $ImageDescription;

    /**
     * @var string
     */
    private string $ImageUrl;

    /**
     * @var int
     */
    private int $ImageIndex;

    /**
     * @var 'Base' | 'Special'
     */
    private string $ImageType;

    /**
     * @var bool
     */
    private bool $PreviewOnly;

    /**
     * @var null | \Knightar\StampsSoapClient\Type\ArrayOfPlan
     */
    private ?\Knightar\StampsSoapClient\Type\ArrayOfPlan $PlansUpgradeToPrintImage = null;

    /**
     * @return string
     */
    public function getImageName() : string
    {
        return $this->ImageName;
    }

    /**
     * @param string $ImageName
     * @return static
     */
    public function withImageName(string $ImageName) : static
    {
        $new = clone $this;
        $new->ImageName = $ImageName;

        return $new;
    }

    /**
     * @return int
     */
    public function getImageID() : int
    {
        return $this->ImageID;
    }

    /**
     * @param int $ImageID
     * @return static
     */
    public function withImageID(int $ImageID) : static
    {
        $new = clone $this;
        $new->ImageID = $ImageID;

        return $new;
    }

    /**
     * @return string
     */
    public function getImageCategory() : string
    {
        return $this->ImageCategory;
    }

    /**
     * @param string $ImageCategory
     * @return static
     */
    public function withImageCategory(string $ImageCategory) : static
    {
        $new = clone $this;
        $new->ImageCategory = $ImageCategory;

        return $new;
    }

    /**
     * @return string
     */
    public function getImageDescription() : string
    {
        return $this->ImageDescription;
    }

    /**
     * @param string $ImageDescription
     * @return static
     */
    public function withImageDescription(string $ImageDescription) : static
    {
        $new = clone $this;
        $new->ImageDescription = $ImageDescription;

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

    /**
     * @return int
     */
    public function getImageIndex() : int
    {
        return $this->ImageIndex;
    }

    /**
     * @param int $ImageIndex
     * @return static
     */
    public function withImageIndex(int $ImageIndex) : static
    {
        $new = clone $this;
        $new->ImageIndex = $ImageIndex;

        return $new;
    }

    /**
     * @return 'Base' | 'Special'
     */
    public function getImageType() : string
    {
        return $this->ImageType;
    }

    /**
     * @param 'Base' | 'Special' $ImageType
     * @return static
     */
    public function withImageType(string $ImageType) : static
    {
        $new = clone $this;
        $new->ImageType = $ImageType;

        return $new;
    }

    /**
     * @return bool
     */
    public function getPreviewOnly() : bool
    {
        return $this->PreviewOnly;
    }

    /**
     * @param bool $PreviewOnly
     * @return static
     */
    public function withPreviewOnly(bool $PreviewOnly) : static
    {
        $new = clone $this;
        $new->PreviewOnly = $PreviewOnly;

        return $new;
    }

    /**
     * @return null | \Knightar\StampsSoapClient\Type\ArrayOfPlan
     */
    public function getPlansUpgradeToPrintImage() : ?\Knightar\StampsSoapClient\Type\ArrayOfPlan
    {
        return $this->PlansUpgradeToPrintImage;
    }

    /**
     * @param null | \Knightar\StampsSoapClient\Type\ArrayOfPlan $PlansUpgradeToPrintImage
     * @return static
     */
    public function withPlansUpgradeToPrintImage(?\Knightar\StampsSoapClient\Type\ArrayOfPlan $PlansUpgradeToPrintImage) : static
    {
        $new = clone $this;
        $new->PlansUpgradeToPrintImage = $PlansUpgradeToPrintImage;

        return $new;
    }
}

