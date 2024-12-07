<?php

namespace Knightar\StampsSoapClient\Type;

class ArrayOfBase64Binary
{
    /**
     * @var null | array<int<0,max>, mixed>
     */
    private ?array $base64Binary = null;

    /**
     * @return null | array<int<0,max>, mixed>
     */
    public function getBase64Binary() : ?array
    {
        return $this->base64Binary;
    }

    /**
     * @param null | array<int<0,max>, mixed> $base64Binary
     * @return static
     */
    public function withBase64Binary(?array $base64Binary) : static
    {
        $new = clone $this;
        $new->base64Binary = $base64Binary;

        return $new;
    }
}

