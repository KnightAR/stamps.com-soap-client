<?php

namespace Knightar\StampsSoapClient\Type;

use Phpro\SoapClient\Type\RequestInterface;

class RegisterShippingProviderAccount implements RequestInterface
{
    /**
     * @var \Knightar\StampsSoapClient\Type\RegisterShippingProviderAccountRequest
     */
    private \Knightar\StampsSoapClient\Type\RegisterShippingProviderAccountRequest $registerShippingProviderAccountRequest;

    /**
     * Constructor
     *
     * @param \Knightar\StampsSoapClient\Type\RegisterShippingProviderAccountRequest $registerShippingProviderAccountRequest
     */
    public function __construct(\Knightar\StampsSoapClient\Type\RegisterShippingProviderAccountRequest $registerShippingProviderAccountRequest)
    {
        $this->registerShippingProviderAccountRequest = $registerShippingProviderAccountRequest;
    }

    /**
     * @return \Knightar\StampsSoapClient\Type\RegisterShippingProviderAccountRequest
     */
    public function getRegisterShippingProviderAccountRequest() : \Knightar\StampsSoapClient\Type\RegisterShippingProviderAccountRequest
    {
        return $this->registerShippingProviderAccountRequest;
    }

    /**
     * @param \Knightar\StampsSoapClient\Type\RegisterShippingProviderAccountRequest $registerShippingProviderAccountRequest
     * @return static
     */
    public function withRegisterShippingProviderAccountRequest(\Knightar\StampsSoapClient\Type\RegisterShippingProviderAccountRequest $registerShippingProviderAccountRequest) : static
    {
        $new = clone $this;
        $new->registerShippingProviderAccountRequest = $registerShippingProviderAccountRequest;

        return $new;
    }
}

