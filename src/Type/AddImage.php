<?php

namespace Knightar\StampsSoapClient\Type;

use Phpro\SoapClient\Type\RequestInterface;

class AddImage implements RequestInterface
{
    /**
     * @var null | string
     */
    private ?string $Authenticator = null;

    /**
     * @var null | \Knightar\StampsSoapClient\Type\Credentials
     */
    private ?\Knightar\StampsSoapClient\Type\Credentials $Credentials = null;

    /**
     * @var string
     */
    private string $ImageName;

    /**
     * @var string
     */
    private string $ImageData;

    /**
     * @var null | 'LabelLogo' | 'BrandedTracking'
     */
    private ?string $ImageCategory = null;

    public const IMAGE_CATEGORY_LABEL_LOGO = 'LabelLogo';
    public const IMAGE_CATEGORY_BRANDED_TRACKING = 'BrandedTracking';

    /**
     * Constructor
     *
     * @param null | string $Authenticator
     * @param null | \Knightar\StampsSoapClient\Type\Credentials $Credentials
     * @param string $ImageName
     * @param string $ImageData
     * @param null | 'LabelLogo' | 'BrandedTracking' $ImageCategory
     */
    public function __construct(
        string                                       $ImageName,
        string                                       $ImageData,
        ?string                                      $ImageCategory = null,
        ?string                                      $Authenticator = null,
        ?\Knightar\StampsSoapClient\Type\Credentials $Credentials = null
    )
    {
        $this->Authenticator = $Authenticator;
        $this->Credentials = $Credentials;
        $this->ImageName = $ImageName;
        $this->ImageData = $ImageData;
        $this->ImageCategory = $ImageCategory;
    }

    /**
     * @return null | string
     */
    public function getAuthenticator() : ?string
    {
        return $this->Authenticator;
    }

    /**
     * @param null | string $Authenticator
     * @return static
     */
    public function withAuthenticator(?string $Authenticator) : static
    {
        $new = clone $this;
        $new->Authenticator = $Authenticator;

        return $new;
    }

    /**
     * @return null | \Knightar\StampsSoapClient\Type\Credentials
     */
    public function getCredentials() : ?\Knightar\StampsSoapClient\Type\Credentials
    {
        return $this->Credentials;
    }

    /**
     * @param null | \Knightar\StampsSoapClient\Type\Credentials $Credentials
     * @return static
     */
    public function withCredentials(?\Knightar\StampsSoapClient\Type\Credentials $Credentials) : static
    {
        $new = clone $this;
        $new->Credentials = $Credentials;

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
    public function getImageData() : string
    {
        return $this->ImageData;
    }

    /**
     * @param string $ImageData
     * @return static
     */
    public function withImageData(string $ImageData) : static
    {
        $new = clone $this;
        $new->ImageData = $ImageData;

        return $new;
    }

    /**
     * @return null | 'LabelLogo' | 'BrandedTracking'
     */
    public function getImageCategory() : ?string
    {
        return $this->ImageCategory;
    }

    /**
     * @param null | 'LabelLogo' | 'BrandedTracking' $ImageCategory
     * @return static
     */
    public function withImageCategory(?string $ImageCategory) : static
    {
        $new = clone $this;
        $new->ImageCategory = $ImageCategory;

        return $new;
    }
}

