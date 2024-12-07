<?php

namespace Knightar\StampsSoapClient\Type;

class ArrayOfContainerLabelV1
{
    /**
     * @var null | array<int<0,max>, \Knightar\StampsSoapClient\Type\ContainerLabelV1>
     */
    private ?array $ContainerLabelV1 = null;

    /**
     * @return null | array<int<0,max>, \Knightar\StampsSoapClient\Type\ContainerLabelV1>
     */
    public function getContainerLabelV1() : ?array
    {
        return $this->ContainerLabelV1;
    }

    /**
     * @param null | array<int<0,max>, \Knightar\StampsSoapClient\Type\ContainerLabelV1> $ContainerLabelV1
     * @return static
     */
    public function withContainerLabelV1(?array $ContainerLabelV1) : static
    {
        $new = clone $this;
        $new->ContainerLabelV1 = $ContainerLabelV1;

        return $new;
    }
}

