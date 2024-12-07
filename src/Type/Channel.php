<?php

namespace Knightar\StampsSoapClient\Type;

class Channel
{
    /**
     * @var 'Email'
     */
    private string $ChannelType;

    /**
     * @return 'Email'
     */
    public function getChannelType() : string
    {
        return $this->ChannelType;
    }

    /**
     * @param 'Email' $ChannelType
     * @return static
     */
    public function withChannelType(string $ChannelType) : static
    {
        $new = clone $this;
        $new->ChannelType = $ChannelType;

        return $new;
    }
}

