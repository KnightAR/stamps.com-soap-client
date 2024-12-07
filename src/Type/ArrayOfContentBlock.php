<?php

namespace Knightar\StampsSoapClient\Type;

class ArrayOfContentBlock
{
    /**
     * @var null | array<int<0,max>, \Knightar\StampsSoapClient\Type\ContentBlock>
     */
    private ?array $ContentBlock = null;

    /**
     * @return null | array<int<0,max>, \Knightar\StampsSoapClient\Type\ContentBlock>
     */
    public function getContentBlock() : ?array
    {
        return $this->ContentBlock;
    }

    /**
     * @param null | array<int<0,max>, \Knightar\StampsSoapClient\Type\ContentBlock> $ContentBlock
     * @return static
     */
    public function withContentBlock(?array $ContentBlock) : static
    {
        $new = clone $this;
        $new->ContentBlock = $ContentBlock;

        return $new;
    }
}

