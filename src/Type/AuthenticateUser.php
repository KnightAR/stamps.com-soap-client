<?php

namespace Knightar\StampsSoapClient\Type;

use Phpro\SoapClient\Type\RequestInterface;

class AuthenticateUser implements RequestInterface
{
    /**
     * @var \Knightar\StampsSoapClient\Type\Credentials
     */
    private \Knightar\StampsSoapClient\Type\Credentials $Credentials;

    /**
     * Constructor
     *
     * @param \Knightar\StampsSoapClient\Type\Credentials $Credentials
     */
    public function __construct(\Knightar\StampsSoapClient\Type\Credentials $Credentials)
    {
        $this->Credentials = $Credentials;
    }

    /**
     * @return \Knightar\StampsSoapClient\Type\Credentials
     */
    public function getCredentials() : \Knightar\StampsSoapClient\Type\Credentials
    {
        return $this->Credentials;
    }

    /**
     * @param \Knightar\StampsSoapClient\Type\Credentials $Credentials
     * @return static
     */
    public function withCredentials(\Knightar\StampsSoapClient\Type\Credentials $Credentials) : static
    {
        $new = clone $this;
        $new->Credentials = $Credentials;

        return $new;
    }
}

