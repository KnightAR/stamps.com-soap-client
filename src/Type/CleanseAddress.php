<?php

namespace Knightar\StampsSoapClient\Type;

use Phpro\SoapClient\Type\RequestInterface;

class CleanseAddress implements RequestInterface
{
    /**
     * @var null | string
     */
    private ?string $Authenticator = null;

    /**
     * @var null | \Knightar\StampsSoapClient\Type\Credentials
     */
    private ?\Knightar\StampsSoapClient\Type\Credentials $Credentials = null;

    /**
     * @var \Knightar\StampsSoapClient\Type\Address
     */
    private \Knightar\StampsSoapClient\Type\Address $Address;

    /**
     * @var null | string
     */
    private ?string $FromZIPCode = null;

    /**
     * Constructor
     *
     * @param \Knightar\StampsSoapClient\Type\Address $Address
     * @param null | string $FromZIPCode
     * @param null | string $Authenticator
     * @param null | \Knightar\StampsSoapClient\Type\Credentials $Credentials
     */
    public function __construct(
        \Knightar\StampsSoapClient\Type\Address      $Address,
        ?string                                      $FromZIPCode = null,
        ?string                                      $Authenticator = null,
        ?\Knightar\StampsSoapClient\Type\Credentials $Credentials = null
    )
    {
        $this->Authenticator = $Authenticator;
        $this->Credentials = $Credentials;
        $this->Address = $Address;
        $this->FromZIPCode = $FromZIPCode;
    }

    /**
     * @return null | string
     */
    public function getAuthenticator() : ?string
    {
        return $this->Authenticator;
    }

    /**
     * @param null | string $Authenticator
     * @return static
     */
    public function withAuthenticator(?string $Authenticator) : static
    {
        $new = clone $this;
        $new->Authenticator = $Authenticator;

        return $new;
    }

    /**
     * @return null | \Knightar\StampsSoapClient\Type\Credentials
     */
    public function getCredentials() : ?\Knightar\StampsSoapClient\Type\Credentials
    {
        return $this->Credentials;
    }

    /**
     * @param null | \Knightar\StampsSoapClient\Type\Credentials $Credentials
     * @return static
     */
    public function withCredentials(?\Knightar\StampsSoapClient\Type\Credentials $Credentials) : static
    {
        $new = clone $this;
        $new->Credentials = $Credentials;

        return $new;
    }

    /**
     * @return \Knightar\StampsSoapClient\Type\Address
     */
    public function getAddress() : \Knightar\StampsSoapClient\Type\Address
    {
        return $this->Address;
    }

    /**
     * @param \Knightar\StampsSoapClient\Type\Address $Address
     * @return static
     */
    public function withAddress(\Knightar\StampsSoapClient\Type\Address $Address) : static
    {
        $new = clone $this;
        $new->Address = $Address;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getFromZIPCode() : ?string
    {
        return $this->FromZIPCode;
    }

    /**
     * @param null | string $FromZIPCode
     * @return static
     */
    public function withFromZIPCode(?string $FromZIPCode) : static
    {
        $new = clone $this;
        $new->FromZIPCode = $FromZIPCode;

        return $new;
    }
}

