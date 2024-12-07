<?php

namespace Knightar\StampsSoapClient\Type;

class ArrayOfMenuLink
{
    /**
     * @var null | array<int<0,max>, \Knightar\StampsSoapClient\Type\MenuLink>
     */
    private ?array $MenuLink = null;

    /**
     * @return null | array<int<0,max>, \Knightar\StampsSoapClient\Type\MenuLink>
     */
    public function getMenuLink() : ?array
    {
        return $this->MenuLink;
    }

    /**
     * @param null | array<int<0,max>, \Knightar\StampsSoapClient\Type\MenuLink> $MenuLink
     * @return static
     */
    public function withMenuLink(?array $MenuLink) : static
    {
        $new = clone $this;
        $new->MenuLink = $MenuLink;

        return $new;
    }
}

