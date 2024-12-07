<?php

namespace Knightar\StampsSoapClient\Type;

use Phpro\SoapClient\Type\RequestInterface;

class RecoverUsername implements RequestInterface
{
    /**
     * @var string
     */
    private string $EmailAddress;

    /**
     * @var null | string
     */
    private ?string $Reserved = null;

    /**
     * Constructor
     *
     * @param string $EmailAddress
     * @param null | string $Reserved
     */
    public function __construct(string $EmailAddress, ?string $Reserved)
    {
        $this->EmailAddress = $EmailAddress;
        $this->Reserved = $Reserved;
    }

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

    /**
     * @return null | string
     */
    public function getReserved() : ?string
    {
        return $this->Reserved;
    }

    /**
     * @param null | string $Reserved
     * @return static
     */
    public function withReserved(?string $Reserved) : static
    {
        $new = clone $this;
        $new->Reserved = $Reserved;

        return $new;
    }
}

