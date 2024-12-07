<?php

namespace Knightar\StampsSoapClient\Type;

use Phpro\SoapClient\Type\RequestInterface;

class PurchasePostage implements RequestInterface
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
     * @var float
     */
    private float $PurchaseAmount;

    /**
     * @var float
     */
    private float $ControlTotal;

    /**
     * @var null | \Knightar\StampsSoapClient\Type\MachineInfo
     */
    private ?\Knightar\StampsSoapClient\Type\MachineInfo $MI = null;

    /**
     * @var null | string
     */
    private ?string $IntegratorTxID = null;

    /**
     * @var null | bool
     */
    private ?bool $SendEmail = null;

    /**
     * Constructor
     *
     * @param float $PurchaseAmount
     * @param float $ControlTotal
     * @param null | \Knightar\StampsSoapClient\Type\MachineInfo $MI
     * @param null | string $IntegratorTxID
     * @param null | bool $SendEmail
     * @param null | string $Authenticator
     * @param null | \Knightar\StampsSoapClient\Type\Credentials $Credentials
     */
    public function __construct(
        float                                        $PurchaseAmount,
        float                                        $ControlTotal,
        ?\Knightar\StampsSoapClient\Type\MachineInfo $MI = null,
        ?string                                      $IntegratorTxID = null,
        ?bool                                        $SendEmail = null,
        ?string                                      $Authenticator = null,
        ?\Knightar\StampsSoapClient\Type\Credentials $Credentials = null
    )
    {
        $this->Authenticator = $Authenticator;
        $this->Credentials = $Credentials;
        $this->PurchaseAmount = $PurchaseAmount;
        $this->ControlTotal = $ControlTotal;
        $this->MI = $MI;
        $this->IntegratorTxID = $IntegratorTxID;
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
     * @return float
     */
    public function getPurchaseAmount() : float
    {
        return $this->PurchaseAmount;
    }

    /**
     * @param float $PurchaseAmount
     * @return static
     */
    public function withPurchaseAmount(float $PurchaseAmount) : static
    {
        $new = clone $this;
        $new->PurchaseAmount = $PurchaseAmount;

        return $new;
    }

    /**
     * @return float
     */
    public function getControlTotal() : float
    {
        return $this->ControlTotal;
    }

    /**
     * @param float $ControlTotal
     * @return static
     */
    public function withControlTotal(float $ControlTotal) : static
    {
        $new = clone $this;
        $new->ControlTotal = $ControlTotal;

        return $new;
    }

    /**
     * @return null | \Knightar\StampsSoapClient\Type\MachineInfo
     */
    public function getMI() : ?\Knightar\StampsSoapClient\Type\MachineInfo
    {
        return $this->MI;
    }

    /**
     * @param null | \Knightar\StampsSoapClient\Type\MachineInfo $MI
     * @return static
     */
    public function withMI(?\Knightar\StampsSoapClient\Type\MachineInfo $MI) : static
    {
        $new = clone $this;
        $new->MI = $MI;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getIntegratorTxID() : ?string
    {
        return $this->IntegratorTxID;
    }

    /**
     * @param null | string $IntegratorTxID
     * @return static
     */
    public function withIntegratorTxID(?string $IntegratorTxID) : static
    {
        $new = clone $this;
        $new->IntegratorTxID = $IntegratorTxID;

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

