<?php

namespace Knightar\StampsSoapClient\Type;

class SocialMedia
{
    /**
     * @var 'Twitter' | 'Instagram' | 'Youtube' | 'Pinterest' | 'Facebook' | 'Linkedin'
     */
    private string $Type;

    /**
     * @var string
     */
    private string $Url;

    /**
     * @return 'Twitter' | 'Instagram' | 'Youtube' | 'Pinterest' | 'Facebook' | 'Linkedin'
     */
    public function getType() : string
    {
        return $this->Type;
    }

    /**
     * @param 'Twitter' | 'Instagram' | 'Youtube' | 'Pinterest' | 'Facebook' | 'Linkedin' $Type
     * @return static
     */
    public function withType(string $Type) : static
    {
        $new = clone $this;
        $new->Type = $Type;

        return $new;
    }

    /**
     * @return string
     */
    public function getUrl() : string
    {
        return $this->Url;
    }

    /**
     * @param string $Url
     * @return static
     */
    public function withUrl(string $Url) : static
    {
        $new = clone $this;
        $new->Url = $Url;

        return $new;
    }
}

