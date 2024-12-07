<?php

namespace Knightar\StampsSoapClient\Type;

use Phpro\SoapClient\Type\ResultInterface;

class AddUserPaymentMethodResponse implements ResultInterface
{
    /**
     * @var string
     */
    private string $Authenticator;

    /**
     * @var string
     */
    private string $PaymentMethodID;

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
    public function getPaymentMethodID() : string
    {
        return $this->PaymentMethodID;
    }

    /**
     * @param string $PaymentMethodID
     * @return static
     */
    public function withPaymentMethodID(string $PaymentMethodID) : static
    {
        $new = clone $this;
        $new->PaymentMethodID = $PaymentMethodID;

        return $new;
    }
}

