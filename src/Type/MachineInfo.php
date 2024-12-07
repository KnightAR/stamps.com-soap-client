<?php

namespace Knightar\StampsSoapClient\Type;

class MachineInfo
{
    /**
     * @var string
     */
    private string $IPAddress;

    /**
     * @var null | string
     */
    private ?string $MacAddress = null;

    /**
     * @var null | \Knightar\StampsSoapClient\Type\FP
     */
    private ?\Knightar\StampsSoapClient\Type\FP $FP = null;

    /**
     * @return string
     */
    public function getIPAddress() : string
    {
        return $this->IPAddress;
    }

    /**
     * @param string $IPAddress
     * @return static
     */
    public function withIPAddress(string $IPAddress) : static
    {
        $new = clone $this;
        $new->IPAddress = $IPAddress;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getMacAddress() : ?string
    {
        return $this->MacAddress;
    }

    /**
     * @param null | string $MacAddress
     * @return static
     */
    public function withMacAddress(?string $MacAddress) : static
    {
        $new = clone $this;
        $new->MacAddress = $MacAddress;

        return $new;
    }

    /**
     * @return null | \Knightar\StampsSoapClient\Type\FP
     */
    public function getFP() : ?\Knightar\StampsSoapClient\Type\FP
    {
        return $this->FP;
    }

    /**
     * @param null | \Knightar\StampsSoapClient\Type\FP $FP
     * @return static
     */
    public function withFP(?\Knightar\StampsSoapClient\Type\FP $FP) : static
    {
        $new = clone $this;
        $new->FP = $FP;

        return $new;
    }
}

