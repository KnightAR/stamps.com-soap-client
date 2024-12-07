<?php

namespace Knightar\StampsSoapClient\Type;

use Phpro\SoapClient\Type\ResultInterface;

class ListPaymentMethodsResponse implements ResultInterface
{
    /**
     * @var string
     */
    private string $Authenticator;

    /**
     * @var \Knightar\StampsSoapClient\Type\ArrayOfPaymentMethod
     */
    private \Knightar\StampsSoapClient\Type\ArrayOfPaymentMethod $PaymentMethods;

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
     * @return \Knightar\StampsSoapClient\Type\ArrayOfPaymentMethod
     */
    public function getPaymentMethods() : \Knightar\StampsSoapClient\Type\ArrayOfPaymentMethod
    {
        return $this->PaymentMethods;
    }

    /**
     * @param \Knightar\StampsSoapClient\Type\ArrayOfPaymentMethod $PaymentMethods
     * @return static
     */
    public function withPaymentMethods(\Knightar\StampsSoapClient\Type\ArrayOfPaymentMethod $PaymentMethods) : static
    {
        $new = clone $this;
        $new->PaymentMethods = $PaymentMethods;

        return $new;
    }
}

