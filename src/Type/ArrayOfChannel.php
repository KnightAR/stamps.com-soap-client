<?php

namespace Knightar\StampsSoapClient\Type;

class ArrayOfChannel
{
    /**
     * @var null | array<int<0,max>, \Knightar\StampsSoapClient\Type\Channel>
     */
    private ?array $Channel = null;

    /**
     * @return null | array<int<0,max>, \Knightar\StampsSoapClient\Type\Channel>
     */
    public function getChannel() : ?array
    {
        return $this->Channel;
    }

    /**
     * @param null | array<int<0,max>, \Knightar\StampsSoapClient\Type\Channel> $Channel
     * @return static
     */
    public function withChannel(?array $Channel) : static
    {
        $new = clone $this;
        $new->Channel = $Channel;

        return $new;
    }
}

