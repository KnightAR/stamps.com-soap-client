<?php

namespace Knightar\StampsSoapClient\Type;

class SurchargeV5
{
    /**
     * @var null | float
     */
    private ?float $Amount = null;

    /**
     * @var 'SUR-A-ER' | 'SUR-A-EV' | 'SUR-A-FUEL' | 'SUR-A-OS' | 'SUR-A-OW' | 'SUR-A-RAD' | 'SUR-A-RD' | 'SUR-A-AHS' | 'SUR-A-NCS' | 'SUR-A-DAS' | 'SUR-A-DAE' | 'SUR-A-RAE' | 'SUR-A-NM' | 'SUR-A-NSDIM1' | 'SUR-A-NSDIM2' | 'SUR-A-NSVOL'
     */
    private string $SurchargeType;

    /**
     * @return null | float
     */
    public function getAmount() : ?float
    {
        return $this->Amount;
    }

    /**
     * @param null | float $Amount
     * @return static
     */
    public function withAmount(?float $Amount) : static
    {
        $new = clone $this;
        $new->Amount = $Amount;

        return $new;
    }

    /**
     * @return 'SUR-A-ER' | 'SUR-A-EV' | 'SUR-A-FUEL' | 'SUR-A-OS' | 'SUR-A-OW' | 'SUR-A-RAD' | 'SUR-A-RD' | 'SUR-A-AHS' | 'SUR-A-NCS' | 'SUR-A-DAS' | 'SUR-A-DAE' | 'SUR-A-RAE' | 'SUR-A-NM' | 'SUR-A-NSDIM1' | 'SUR-A-NSDIM2' | 'SUR-A-NSVOL'
     */
    public function getSurchargeType() : string
    {
        return $this->SurchargeType;
    }

    /**
     * @param 'SUR-A-ER' | 'SUR-A-EV' | 'SUR-A-FUEL' | 'SUR-A-OS' | 'SUR-A-OW' | 'SUR-A-RAD' | 'SUR-A-RD' | 'SUR-A-AHS' | 'SUR-A-NCS' | 'SUR-A-DAS' | 'SUR-A-DAE' | 'SUR-A-RAE' | 'SUR-A-NM' | 'SUR-A-NSDIM1' | 'SUR-A-NSDIM2' | 'SUR-A-NSVOL' $SurchargeType
     * @return static
     */
    public function withSurchargeType(string $SurchargeType) : static
    {
        $new = clone $this;
        $new->SurchargeType = $SurchargeType;

        return $new;
    }
}

