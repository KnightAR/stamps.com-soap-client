<?php

namespace Knightar\StampsSoapClient\Type;

use Phpro\SoapClient\Type\RequestInterface;

class ChangePlan implements RequestInterface
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
     * @var null | int
     */
    private ?int $PlanId = null;

    /**
     * @var null | string
     */
    private ?string $PromoCode = null;

    /**
     * @var null | bool
     */
    private ?bool $SendEmail = null;

    /**
     * Constructor
     *
     * @param int|null $PlanId
     * @param string|null $PromoCode
     * @param bool|null $SendEmail
     * @param string|null $Authenticator
     * @param \Knightar\StampsSoapClient\Type\Credentials|null $Credentials
     */
    public function __construct(
        ?int                                         $PlanId = null,
        ?bool                                        $SendEmail = null,
        ?string                                      $PromoCode = null,
        ?string                                      $Authenticator = null,
        ?\Knightar\StampsSoapClient\Type\Credentials $Credentials = null
    )
    {
        $this->PlanId = $PlanId;
        $this->PromoCode = $PromoCode;
        $this->SendEmail = $SendEmail;
        $this->Authenticator = $Authenticator;
        $this->Credentials = $Credentials;
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
     * @return null | int
     */
    public function getPlanId() : ?int
    {
        return $this->PlanId;
    }

    /**
     * @param null | int $PlanId
     * @return static
     */
    public function withPlanId(?int $PlanId) : static
    {
        $new = clone $this;
        $new->PlanId = $PlanId;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getPromoCode() : ?string
    {
        return $this->PromoCode;
    }

    /**
     * @param null | string $PromoCode
     * @return static
     */
    public function withPromoCode(?string $PromoCode) : static
    {
        $new = clone $this;
        $new->PromoCode = $PromoCode;

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

