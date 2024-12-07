<?php

namespace Knightar\StampsSoapClient\Type;

use Phpro\SoapClient\Type\RequestInterface;

class ChangeDefaultPaymentMethod implements RequestInterface
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
     * @var \Knightar\StampsSoapClient\Type\MachineInfo
     */
    private \Knightar\StampsSoapClient\Type\MachineInfo $MachineInfo;

    /**
     * @var null | 'AllDefaultPaymentMethods' | 'DefaultServiceFeePaymentMethod' | 'DefaultPostalPurchasePaymentMethod' | 'DefaultStorePaymentMethod'
     */
    private ?string $PaymentType = null;

    /**
     * @var null | string
     */
    private ?string $PaymentMethodID = null;

    /**
     * @var null | bool
     */
    private ?bool $SendEmail = null;

    /**
     * Constructor
     *
     * @param \Knightar\StampsSoapClient\Type\MachineInfo $MachineInfo
     * @param null | string $PaymentType
     * @param null | string $PaymentMethodID
     * @param null | bool $SendEmail
     * @param null | string $Authenticator
     * @param null | \Knightar\StampsSoapClient\Type\Credentials $Credentials
     */
    public function __construct(
        \Knightar\StampsSoapClient\Type\MachineInfo  $MachineInfo,
        ?string                                      $PaymentType = null,
        ?string                                      $PaymentMethodID = null,
        ?bool                                        $SendEmail = null,
        ?string                                      $Authenticator = null,
        ?\Knightar\StampsSoapClient\Type\Credentials $Credentials = null
    )
    {
        $this->Authenticator = $Authenticator;
        $this->Credentials = $Credentials;
        $this->MachineInfo = $MachineInfo;
        $this->PaymentType = $PaymentType;
        $this->PaymentMethodID = $PaymentMethodID;
        $this->SendEmail = $SendEmail;
    }

    const PAYMENT_TYPE_ALL_DEFAULT = 'AllDefaultPaymentMethods';
    const PAYMENT_TYPE_DEFAULT_SERVICE_FEE = 'DefaultServiceFeePaymentMethod';
    const PAYMENT_TYPE_DEFAULT_POSTAL_PURCHASE = 'DefaultPostalPurchasePaymentMethod';
    const PAYMENT_TYPE_DEFAULT_STORE = 'DefaultStorePaymentMethod';

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
     * @return \Knightar\StampsSoapClient\Type\MachineInfo
     */
    public function getMachineInfo() : \Knightar\StampsSoapClient\Type\MachineInfo
    {
        return $this->MachineInfo;
    }

    /**
     * @param \Knightar\StampsSoapClient\Type\MachineInfo $MachineInfo
     * @return static
     */
    public function withMachineInfo(\Knightar\StampsSoapClient\Type\MachineInfo $MachineInfo) : static
    {
        $new = clone $this;
        $new->MachineInfo = $MachineInfo;

        return $new;
    }

    /**
     * @return null | 'AllDefaultPaymentMethods' | 'DefaultServiceFeePaymentMethod' | 'DefaultPostalPurchasePaymentMethod' | 'DefaultStorePaymentMethod'
     */
    public function getPaymentType() : ?string
    {
        return $this->PaymentType;
    }

    /**
     * @param null | 'AllDefaultPaymentMethods' | 'DefaultServiceFeePaymentMethod' | 'DefaultPostalPurchasePaymentMethod' | 'DefaultStorePaymentMethod' $PaymentType
     * @return static
     */
    public function withPaymentType(?string $PaymentType) : static
    {
        $new = clone $this;
        $new->PaymentType = $PaymentType;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getPaymentMethodID() : ?string
    {
        return $this->PaymentMethodID;
    }

    /**
     * @param null | string $PaymentMethodID
     * @return static
     */
    public function withPaymentMethodID(?string $PaymentMethodID) : static
    {
        $new = clone $this;
        $new->PaymentMethodID = $PaymentMethodID;

        return $new;
    }

    /**
     * @return null | bool
     */
    public function getSendEmail() : ?bool
    {
        return $this->SendEmail;
    }

    /**
     * @param null | bool $SendEmail
     * @return static
     */
    public function withSendEmail(?bool $SendEmail) : static
    {
        $new = clone $this;
        $new->SendEmail = $SendEmail;

        return $new;
    }
}

