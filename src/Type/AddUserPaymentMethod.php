<?php

namespace Knightar\StampsSoapClient\Type;

use Phpro\SoapClient\Type\RequestInterface;

class AddUserPaymentMethod implements RequestInterface
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
    private ?string $DefaultPaymentMethodType = null;

    /**
     * @var null | \Knightar\StampsSoapClient\Type\CreditCard
     */
    private ?\Knightar\StampsSoapClient\Type\CreditCard $CreditCard = null;

    /**
     * @var null | \Knightar\StampsSoapClient\Type\AchAccount
     */
    private ?\Knightar\StampsSoapClient\Type\AchAccount $AchAccount = null;

    /**
     * @var null | \Knightar\StampsSoapClient\Type\PPLAccount
     */
    private ?\Knightar\StampsSoapClient\Type\PPLAccount $PPL = null;

    /**
     * @var null | bool
     */
    private ?bool $SendEmail = null;

    /** Constants for DefaultPaymentMethodType */
    public const ALL_DEFAULT_PAYMENT_METHODS = 'AllDefaultPaymentMethods';
    public const DEFAULT_SERVICE_FEE_PAYMENT_METHOD = 'DefaultServiceFeePaymentMethod';
    public const DEFAULT_POSTAL_PURCHASE_PAYMENT_METHOD = 'DefaultPostalPurchasePaymentMethod';
    public const DEFAULT_STORE_PAYMENT_METHOD = 'DefaultStorePaymentMethod';
    /**
     * Constructor
     *
     * @param \Knightar\StampsSoapClient\Type\MachineInfo $MachineInfo
     * @param null | \Knightar\StampsSoapClient\Type\CreditCard $CreditCard
     * @param null | \Knightar\StampsSoapClient\Type\AchAccount $AchAccount
     * @param null | \Knightar\StampsSoapClient\Type\PPLAccount $PPL
     * @param null | bool $SendEmail
     * @param null | 'AllDefaultPaymentMethods' | 'DefaultServiceFeePaymentMethod' | 'DefaultPostalPurchasePaymentMethod' | 'DefaultStorePaymentMethod' $DefaultPaymentMethodType
     * @param null | string $Authenticator
     * @param null | \Knightar\StampsSoapClient\Type\Credentials $Credentials
     */
    public function __construct(
        \Knightar\StampsSoapClient\Type\MachineInfo  $MachineInfo,
        ?\Knightar\StampsSoapClient\Type\CreditCard  $CreditCard = null,
        ?\Knightar\StampsSoapClient\Type\AchAccount  $AchAccount = null,
        ?\Knightar\StampsSoapClient\Type\PPLAccount  $PPL = null,
        ?bool                                        $SendEmail = null,
        ?string                                      $DefaultPaymentMethodType = null,
        ?string                                      $Authenticator = null,
        ?\Knightar\StampsSoapClient\Type\Credentials $Credentials = null
    )
    {
        $this->Authenticator = $Authenticator;
        $this->Credentials = $Credentials;
        $this->MachineInfo = $MachineInfo;
        $this->DefaultPaymentMethodType = $DefaultPaymentMethodType;
        $this->CreditCard = $CreditCard;
        $this->AchAccount = $AchAccount;
        $this->PPL = $PPL;
        $this->SendEmail = $SendEmail;
    }

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
    public function getDefaultPaymentMethodType() : ?string
    {
        return $this->DefaultPaymentMethodType;
    }

    /**
     * @param null | 'AllDefaultPaymentMethods' | 'DefaultServiceFeePaymentMethod' | 'DefaultPostalPurchasePaymentMethod' | 'DefaultStorePaymentMethod' $DefaultPaymentMethodType
     * @return static
     */
    public function withDefaultPaymentMethodType(?string $DefaultPaymentMethodType) : static
    {
        $new = clone $this;
        $new->DefaultPaymentMethodType = $DefaultPaymentMethodType;

        return $new;
    }

    /**
     * @return null | \Knightar\StampsSoapClient\Type\CreditCard
     */
    public function getCreditCard() : ?\Knightar\StampsSoapClient\Type\CreditCard
    {
        return $this->CreditCard;
    }

    /**
     * @param null | \Knightar\StampsSoapClient\Type\CreditCard $CreditCard
     * @return static
     */
    public function withCreditCard(?\Knightar\StampsSoapClient\Type\CreditCard $CreditCard) : static
    {
        $new = clone $this;
        $new->CreditCard = $CreditCard;

        return $new;
    }

    /**
     * @return null | \Knightar\StampsSoapClient\Type\AchAccount
     */
    public function getAchAccount() : ?\Knightar\StampsSoapClient\Type\AchAccount
    {
        return $this->AchAccount;
    }

    /**
     * @param null | \Knightar\StampsSoapClient\Type\AchAccount $AchAccount
     * @return static
     */
    public function withAchAccount(?\Knightar\StampsSoapClient\Type\AchAccount $AchAccount) : static
    {
        $new = clone $this;
        $new->AchAccount = $AchAccount;

        return $new;
    }

    /**
     * @return null | \Knightar\StampsSoapClient\Type\PPLAccount
     */
    public function getPPL() : ?\Knightar\StampsSoapClient\Type\PPLAccount
    {
        return $this->PPL;
    }

    /**
     * @param null | \Knightar\StampsSoapClient\Type\PPLAccount $PPL
     * @return static
     */
    public function withPPL(?\Knightar\StampsSoapClient\Type\PPLAccount $PPL) : static
    {
        $new = clone $this;
        $new->PPL = $PPL;

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

