<?php

namespace Knightar\StampsSoapClient\Type;

class ArrayOfSocialMedia
{
    /**
     * @var null | array<int<0,max>, \Knightar\StampsSoapClient\Type\SocialMedia>
     */
    private ?array $SocialMedia = null;

    /**
     * @return null | array<int<0,max>, \Knightar\StampsSoapClient\Type\SocialMedia>
     */
    public function getSocialMedia() : ?array
    {
        return $this->SocialMedia;
    }

    /**
     * @param null | array<int<0,max>, \Knightar\StampsSoapClient\Type\SocialMedia> $SocialMedia
     * @return static
     */
    public function withSocialMedia(?array $SocialMedia) : static
    {
        $new = clone $this;
        $new->SocialMedia = $SocialMedia;

        return $new;
    }
}

