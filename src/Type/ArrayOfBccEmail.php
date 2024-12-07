<?php

namespace Knightar\StampsSoapClient\Type;

class ArrayOfBccEmail
{
    /**
     * @var null | array<int<0,max>, \Knightar\StampsSoapClient\Type\BccEmail>
     */
    private ?array $BccEmail = null;

    /**
     * @return null | array<int<0,max>, \Knightar\StampsSoapClient\Type\BccEmail>
     */
    public function getBccEmail() : ?array
    {
        return $this->BccEmail;
    }

    /**
     * @param null | array<int<0,max>, \Knightar\StampsSoapClient\Type\BccEmail> $BccEmail
     * @return static
     */
    public function withBccEmail(?array $BccEmail) : static
    {
        $new = clone $this;
        $new->BccEmail = $BccEmail;

        return $new;
    }
}

