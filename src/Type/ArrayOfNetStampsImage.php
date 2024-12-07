<?php

namespace Knightar\StampsSoapClient\Type;

class ArrayOfNetStampsImage
{
    /**
     * @var null | array<int<0,max>, \Knightar\StampsSoapClient\Type\NetStampsImage>
     */
    private ?array $NetStampsImage = null;

    /**
     * @return null | array<int<0,max>, \Knightar\StampsSoapClient\Type\NetStampsImage>
     */
    public function getNetStampsImage() : ?array
    {
        return $this->NetStampsImage;
    }

    /**
     * @param null | array<int<0,max>, \Knightar\StampsSoapClient\Type\NetStampsImage> $NetStampsImage
     * @return static
     */
    public function withNetStampsImage(?array $NetStampsImage) : static
    {
        $new = clone $this;
        $new->NetStampsImage = $NetStampsImage;

        return $new;
    }
}

