<?php

namespace Knightar\StampsSoapClient\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetAccountInfoResponse implements ResultInterface
{
    /**
     * @var string
     */
    private string $Authenticator;

    /**
     * @var \Knightar\StampsSoapClient\Type\AccountInfoV65
     */
    private \Knightar\StampsSoapClient\Type\AccountInfoV65 $AccountInfo;

    /**
     * @var \Knightar\StampsSoapClient\Type\Address
     */
    private \Knightar\StampsSoapClient\Type\Address $Address;

    /**
     * @var string
     */
    private string $CustomerEmail;

    /**
     * @var null | string
     */
    private ?string $AccountStatus = null;

    /**
     * @var \Knightar\StampsSoapClient\Type\DateAdvance
     */
    private \Knightar\StampsSoapClient\Type\DateAdvance $DateAdvanceConfig;

    /**
     * @var null | string
     */
    private ?string $VerificationPhoneNumber = null;

    /**
     * @var null | string
     */
    private ?string $VerificationPhoneExtension = null;

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
     * @return \Knightar\StampsSoapClient\Type\AccountInfoV65
     */
    public function getAccountInfo() : \Knightar\StampsSoapClient\Type\AccountInfoV65
    {
        return $this->AccountInfo;
    }

    /**
     * @param \Knightar\StampsSoapClient\Type\AccountInfoV65 $AccountInfo
     * @return static
     */
    public function withAccountInfo(\Knightar\StampsSoapClient\Type\AccountInfoV65 $AccountInfo) : static
    {
        $new = clone $this;
        $new->AccountInfo = $AccountInfo;

        return $new;
    }

    /**
     * @return \Knightar\StampsSoapClient\Type\Address
     */
    public function getAddress() : \Knightar\StampsSoapClient\Type\Address
    {
        return $this->Address;
    }

    /**
     * @param \Knightar\StampsSoapClient\Type\Address $Address
     * @return static
     */
    public function withAddress(\Knightar\StampsSoapClient\Type\Address $Address) : static
    {
        $new = clone $this;
        $new->Address = $Address;

        return $new;
    }

    /**
     * @return string
     */
    public function getCustomerEmail() : string
    {
        return $this->CustomerEmail;
    }

    /**
     * @param string $CustomerEmail
     * @return static
     */
    public function withCustomerEmail(string $CustomerEmail) : static
    {
        $new = clone $this;
        $new->CustomerEmail = $CustomerEmail;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getAccountStatus() : ?string
    {
        return $this->AccountStatus;
    }

    /**
     * @param null | string $AccountStatus
     * @return static
     */
    public function withAccountStatus(?string $AccountStatus) : static
    {
        $new = clone $this;
        $new->AccountStatus = $AccountStatus;

        return $new;
    }

    /**
     * @return \Knightar\StampsSoapClient\Type\DateAdvance
     */
    public function getDateAdvanceConfig() : \Knightar\StampsSoapClient\Type\DateAdvance
    {
        return $this->DateAdvanceConfig;
    }

    /**
     * @param \Knightar\StampsSoapClient\Type\DateAdvance $DateAdvanceConfig
     * @return static
     */
    public function withDateAdvanceConfig(\Knightar\StampsSoapClient\Type\DateAdvance $DateAdvanceConfig) : static
    {
        $new = clone $this;
        $new->DateAdvanceConfig = $DateAdvanceConfig;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getVerificationPhoneNumber() : ?string
    {
        return $this->VerificationPhoneNumber;
    }

    /**
     * @param null | string $VerificationPhoneNumber
     * @return static
     */
    public function withVerificationPhoneNumber(?string $VerificationPhoneNumber) : static
    {
        $new = clone $this;
        $new->VerificationPhoneNumber = $VerificationPhoneNumber;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getVerificationPhoneExtension() : ?string
    {
        return $this->VerificationPhoneExtension;
    }

    /**
     * @param null | string $VerificationPhoneExtension
     * @return static
     */
    public function withVerificationPhoneExtension(?string $VerificationPhoneExtension) : static
    {
        $new = clone $this;
        $new->VerificationPhoneExtension = $VerificationPhoneExtension;

        return $new;
    }
}

