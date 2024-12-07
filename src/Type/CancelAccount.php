<?php

namespace Knightar\StampsSoapClient\Type;

use Phpro\SoapClient\Type\RequestInterface;

class CancelAccount implements RequestInterface
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
     * @var string
     */
    private string $Address;

    /**
     * @var string
     */
    private string $State;

    /**
     * @var string
     */
    private string $City;

    /**
     * @var string
     */
    private string $Zip;

    /**
     * @var null | bool
     */
    private ?bool $SendEmail = null;

    /**
     * Constructor
     *
     * @param string $Address
     * @param string $State
     * @param string $City
     * @param string $Zip
     * @param null | bool $SendEmail
     * @param null | string $Authenticator
     * @param null | \Knightar\StampsSoapClient\Type\Credentials $Credentials
     */
    public function __construct(
        string                                       $Address,
        string                                       $State,
        string                                       $City,
        string                                       $Zip,
        ?bool                                        $SendEmail = null,
        ?string                                      $Authenticator = null,
        ?\Knightar\StampsSoapClient\Type\Credentials $Credentials = null
    )
    {
        $this->Address = $Address;
        $this->State = $State;
        $this->City = $City;
        $this->Zip = $Zip;
        $this->SendEmail = $SendEmail;
        $this->Authenticator = $Authenticator;
        $this->Credentials = $Credentials;
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
     * @return string
     */
    public function getAddress() : string
    {
        return $this->Address;
    }

    /**
     * @param string $Address
     * @return static
     */
    public function withAddress(string $Address) : static
    {
        $new = clone $this;
        $new->Address = $Address;

        return $new;
    }

    /**
     * @return string
     */
    public function getState() : string
    {
        return $this->State;
    }

    /**
     * @param string $State
     * @return static
     */
    public function withState(string $State) : static
    {
        $new = clone $this;
        $new->State = $State;

        return $new;
    }

    /**
     * @return string
     */
    public function getCity() : string
    {
        return $this->City;
    }

    /**
     * @param string $City
     * @return static
     */
    public function withCity(string $City) : static
    {
        $new = clone $this;
        $new->City = $City;

        return $new;
    }

    /**
     * @return string
     */
    public function getZip() : string
    {
        return $this->Zip;
    }

    /**
     * @param string $Zip
     * @return static
     */
    public function withZip(string $Zip) : static
    {
        $new = clone $this;
        $new->Zip = $Zip;

        return $new;
    }

    /**
     * @return null | bool
     */
    public function getSendEmail() : ?bool
    {
        return $this->SendEmail;
    }

    /**
     * @param null | bool $SendEmail
     * @return static
     */
    public function withSendEmail(?bool $SendEmail) : static
    {
        $new = clone $this;
        $new->SendEmail = $SendEmail;

        return $new;
    }
}

