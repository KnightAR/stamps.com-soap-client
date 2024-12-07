<?php

namespace Knightar\StampsSoapClient\Type;

class ContentBlock
{
    /**
     * @var 'Alert'
     */
    private string $ContentBlockType;

    /**
     * @var string
     */
    private string $Value;

    /**
     * @return 'Alert'
     */
    public function getContentBlockType() : string
    {
        return $this->ContentBlockType;
    }

    /**
     * @param 'Alert' $ContentBlockType
     * @return static
     */
    public function withContentBlockType(string $ContentBlockType) : static
    {
        $new = clone $this;
        $new->ContentBlockType = $ContentBlockType;

        return $new;
    }

    /**
     * @return string
     */
    public function getValue() : string
    {
        return $this->Value;
    }

    /**
     * @param string $Value
     * @return static
     */
    public function withValue(string $Value) : static
    {
        $new = clone $this;
        $new->Value = $Value;

        return $new;
    }
}

