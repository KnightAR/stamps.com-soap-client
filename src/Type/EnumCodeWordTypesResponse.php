<?php

namespace Knightar\StampsSoapClient\Type;

use Phpro\SoapClient\Type\ResultInterface;

class EnumCodeWordTypesResponse implements ResultInterface
{
    /**
     * @var \Knightar\StampsSoapClient\Type\ArrayOfCodeword
     */
    private \Knightar\StampsSoapClient\Type\ArrayOfCodeword $CodeWords;

    /**
     * @return \Knightar\StampsSoapClient\Type\ArrayOfCodeword
     */
    public function getCodeWords() : \Knightar\StampsSoapClient\Type\ArrayOfCodeword
    {
        return $this->CodeWords;
    }

    /**
     * @param \Knightar\StampsSoapClient\Type\ArrayOfCodeword $CodeWords
     * @return static
     */
    public function withCodeWords(\Knightar\StampsSoapClient\Type\ArrayOfCodeword $CodeWords) : static
    {
        $new = clone $this;
        $new->CodeWords = $CodeWords;

        return $new;
    }
}

