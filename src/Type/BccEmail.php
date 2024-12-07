<?php

namespace Knightar\StampsSoapClient\Type;

class BccEmail
{
    /**
     * @var string
     */
    private string $EmailAddress;

    /**
     * @return string
     */
    public function getEmailAddress() : string
    {
        return $this->EmailAddress;
    }

    /**
     * @param string $EmailAddress
     * @return static
     */
    public function withEmailAddress(string $EmailAddress) : static
    {
        $new = clone $this;
        $new->EmailAddress = $EmailAddress;

        return $new;
    }
}

