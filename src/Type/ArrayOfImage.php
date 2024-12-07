<?php

namespace Knightar\StampsSoapClient\Type;

class ArrayOfImage
{
    /**
     * @var null | array<int<0,max>, \Knightar\StampsSoapClient\Type\Image>
     */
    private ?array $Image = null;

    /**
     * @return null | array<int<0,max>, \Knightar\StampsSoapClient\Type\Image>
     */
    public function getImage() : ?array
    {
        return $this->Image;
    }

    /**
     * @param null | array<int<0,max>, \Knightar\StampsSoapClient\Type\Image> $Image
     * @return static
     */
    public function withImage(?array $Image) : static
    {
        $new = clone $this;
        $new->Image = $Image;

        return $new;
    }
}

