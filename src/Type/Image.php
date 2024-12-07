<?php

namespace Knightar\StampsSoapClient\Type;

class Image
{
    /**
     * @var int
     */
    private int $ImageId;

    /**
     * @var string
     */
    private string $ImageName;

    /**
     * @var string
     */
    private string $ImageUrl;

    /**
     * @var 'LabelLogo' | 'BrandedTracking'
     */
    private string $ImageCategory;

    /**
     * @return int
     */
    public function getImageId() : int
    {
        return $this->ImageId;
    }

    /**
     * @param int $ImageId
     * @return static
     */
    public function withImageId(int $ImageId) : static
    {
        $new = clone $this;
        $new->ImageId = $ImageId;

        return $new;
    }

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
     * @return 'LabelLogo' | 'BrandedTracking'
     */
    public function getImageCategory() : string
    {
        return $this->ImageCategory;
    }

    /**
     * @param 'LabelLogo' | 'BrandedTracking' $ImageCategory
     * @return static
     */
    public function withImageCategory(string $ImageCategory) : static
    {
        $new = clone $this;
        $new->ImageCategory = $ImageCategory;

        return $new;
    }
}

