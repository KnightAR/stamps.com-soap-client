<?php

namespace Knightar\StampsSoapClient\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetShipmentListByToken implements RequestInterface
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
    private string $ShipmentListToken;

    /**
     * @var int
     */
    private int $PageNumber;

    /**
     * Constructor
     *
     * @param string $ShipmentListToken
     * @param int $PageNumber
     * @param null | string $Authenticator
     * @param null | \Knightar\StampsSoapClient\Type\Credentials $Credentials
     */
    public function __construct(
        string                                       $ShipmentListToken,
        int                                          $PageNumber,
        ?string                                      $Authenticator = null,
        ?\Knightar\StampsSoapClient\Type\Credentials $Credentials = null
    )
    {
        $this->Authenticator = $Authenticator;
        $this->Credentials = $Credentials;
        $this->ShipmentListToken = $ShipmentListToken;
        $this->PageNumber = $PageNumber;
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
    public function getShipmentListToken() : string
    {
        return $this->ShipmentListToken;
    }

    /**
     * @param string $ShipmentListToken
     * @return static
     */
    public function withShipmentListToken(string $ShipmentListToken) : static
    {
        $new = clone $this;
        $new->ShipmentListToken = $ShipmentListToken;

        return $new;
    }

    /**
     * @return int
     */
    public function getPageNumber() : int
    {
        return $this->PageNumber;
    }

    /**
     * @param int $PageNumber
     * @return static
     */
    public function withPageNumber(int $PageNumber) : static
    {
        $new = clone $this;
        $new->PageNumber = $PageNumber;

        return $new;
    }
}

