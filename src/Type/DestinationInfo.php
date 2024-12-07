<?php

namespace Knightar\StampsSoapClient\Type;

class DestinationInfo
{
    /**
     * @var string
     */
    private string $DestinationCity;

    /**
     * @var string
     */
    private string $DestinationState;

    /**
     * @var string
     */
    private string $DestinationZip;

    /**
     * @var string
     */
    private string $DestinationCountry;

    /**
     * @return string
     */
    public function getDestinationCity() : string
    {
        return $this->DestinationCity;
    }

    /**
     * @param string $DestinationCity
     * @return static
     */
    public function withDestinationCity(string $DestinationCity) : static
    {
        $new = clone $this;
        $new->DestinationCity = $DestinationCity;

        return $new;
    }

    /**
     * @return string
     */
    public function getDestinationState() : string
    {
        return $this->DestinationState;
    }

    /**
     * @param string $DestinationState
     * @return static
     */
    public function withDestinationState(string $DestinationState) : static
    {
        $new = clone $this;
        $new->DestinationState = $DestinationState;

        return $new;
    }

    /**
     * @return string
     */
    public function getDestinationZip() : string
    {
        return $this->DestinationZip;
    }

    /**
     * @param string $DestinationZip
     * @return static
     */
    public function withDestinationZip(string $DestinationZip) : static
    {
        $new = clone $this;
        $new->DestinationZip = $DestinationZip;

        return $new;
    }

    /**
     * @return string
     */
    public function getDestinationCountry() : string
    {
        return $this->DestinationCountry;
    }

    /**
     * @param string $DestinationCountry
     * @return static
     */
    public function withDestinationCountry(string $DestinationCountry) : static
    {
        $new = clone $this;
        $new->DestinationCountry = $DestinationCountry;

        return $new;
    }
}

