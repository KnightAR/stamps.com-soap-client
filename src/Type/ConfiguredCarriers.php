<?php

namespace Knightar\StampsSoapClient\Type;

class ConfiguredCarriers
{
    /**
     * @var 'All' | 'USPS' | 'FedEx' | 'DHLExpress' | 'UPS' | 'CanadaPost' | 'DhlECommerce' | 'Zorbit'
     */
    private string $Carrier;

    /**
     * @var bool
     */
    private bool $UserOwnedAccount;

    /**
     * @return 'All' | 'USPS' | 'FedEx' | 'DHLExpress' | 'UPS' | 'CanadaPost' | 'DhlECommerce' | 'Zorbit'
     */
    public function getCarrier() : string
    {
        return $this->Carrier;
    }

    /**
     * @param 'All' | 'USPS' | 'FedEx' | 'DHLExpress' | 'UPS' | 'CanadaPost' | 'DhlECommerce' | 'Zorbit' $Carrier
     * @return static
     */
    public function withCarrier(string $Carrier) : static
    {
        $new = clone $this;
        $new->Carrier = $Carrier;

        return $new;
    }

    /**
     * @return bool
     */
    public function getUserOwnedAccount() : bool
    {
        return $this->UserOwnedAccount;
    }

    /**
     * @param bool $UserOwnedAccount
     * @return static
     */
    public function withUserOwnedAccount(bool $UserOwnedAccount) : static
    {
        $new = clone $this;
        $new->UserOwnedAccount = $UserOwnedAccount;

        return $new;
    }
}

