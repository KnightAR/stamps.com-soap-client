<?php

namespace Knightar\StampsSoapClient\Type;

class ArrayOfNetStampsLayout
{
    /**
     * @var null | array<int<0,max>, \Knightar\StampsSoapClient\Type\NetStampsLayout>
     */
    private ?array $NetStampsLayout = null;

    /**
     * @return null | array<int<0,max>, \Knightar\StampsSoapClient\Type\NetStampsLayout>
     */
    public function getNetStampsLayout() : ?array
    {
        return $this->NetStampsLayout;
    }

    /**
     * @param null | array<int<0,max>, \Knightar\StampsSoapClient\Type\NetStampsLayout> $NetStampsLayout
     * @return static
     */
    public function withNetStampsLayout(?array $NetStampsLayout) : static
    {
        $new = clone $this;
        $new->NetStampsLayout = $NetStampsLayout;

        return $new;
    }
}

