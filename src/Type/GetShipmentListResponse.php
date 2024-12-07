<?php

namespace Knightar\StampsSoapClient\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetShipmentListResponse implements ResultInterface
{
    /**
     * @var string
     */
    private string $Authenticator;

    /**
     * @var string
     */
    private string $ShipmentListToken;

    /**
     * @var int
     */
    private int $TotalPages;

    /**
     * @var null | \Knightar\StampsSoapClient\Type\ArrayOfShipmentV39
     */
    private ?\Knightar\StampsSoapClient\Type\ArrayOfShipmentV39 $Shipments = null;

    /**
     * @return string
     */
    public function getAuthenticator() : string
    {
        return $this->Authenticator;
    }

    /**
     * @param string $Authenticator
     * @return static
     */
    public function withAuthenticator(string $Authenticator) : static
    {
        $new = clone $this;
        $new->Authenticator = $Authenticator;

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
    public function getTotalPages() : int
    {
        return $this->TotalPages;
    }

    /**
     * @param int $TotalPages
     * @return static
     */
    public function withTotalPages(int $TotalPages) : static
    {
        $new = clone $this;
        $new->TotalPages = $TotalPages;

        return $new;
    }

    /**
     * @return null | \Knightar\StampsSoapClient\Type\ArrayOfShipmentV39
     */
    public function getShipments() : ?\Knightar\StampsSoapClient\Type\ArrayOfShipmentV39
    {
        return $this->Shipments;
    }

    /**
     * @param null | \Knightar\StampsSoapClient\Type\ArrayOfShipmentV39 $Shipments
     * @return static
     */
    public function withShipments(?\Knightar\StampsSoapClient\Type\ArrayOfShipmentV39 $Shipments) : static
    {
        $new = clone $this;
        $new->Shipments = $Shipments;

        return $new;
    }
}

