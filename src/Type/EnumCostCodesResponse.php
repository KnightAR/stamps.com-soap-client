<?php

namespace Knightar\StampsSoapClient\Type;

use Phpro\SoapClient\Type\ResultInterface;

class EnumCostCodesResponse implements ResultInterface
{
    /**
     * @var string
     */
    private string $Authenticator;

    /**
     * @var \Knightar\StampsSoapClient\Type\ArrayOfCostCodeInfoV1
     */
    private \Knightar\StampsSoapClient\Type\ArrayOfCostCodeInfoV1 $CostCodes;

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
     * @return \Knightar\StampsSoapClient\Type\ArrayOfCostCodeInfoV1
     */
    public function getCostCodes() : \Knightar\StampsSoapClient\Type\ArrayOfCostCodeInfoV1
    {
        return $this->CostCodes;
    }

    /**
     * @param \Knightar\StampsSoapClient\Type\ArrayOfCostCodeInfoV1 $CostCodes
     * @return static
     */
    public function withCostCodes(\Knightar\StampsSoapClient\Type\ArrayOfCostCodeInfoV1 $CostCodes) : static
    {
        $new = clone $this;
        $new->CostCodes = $CostCodes;

        return $new;
    }
}

