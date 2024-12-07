<?php

namespace Knightar\StampsSoapClient\Type;

use Phpro\SoapClient\Type\RequestInterface;

class AddCarrier implements RequestInterface
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
     * @var bool
     */
    private bool $UserOwnedAccount;

    /**
     * @var 'All' | 'USPS' | 'FedEx' | 'DHLExpress' | 'UPS' | 'CanadaPost' | 'DhlECommerce' | 'Zorbit'
     */
    private string $Carrier;

    /**
     * @var null | string
     */
    private ?string $AccountNumber = null;

    /**
     * @var null | string
     */
    private ?string $AccountZIPCode = null;

    /**
     * @var null | string
     */
    private ?string $AccountCountry = null;

    /**
     * @var null | \Knightar\StampsSoapClient\Type\Address
     */
    private ?\Knightar\StampsSoapClient\Type\Address $Address = null;

    /**
     * @var null | bool
     */
    private ?bool $AgreeToEula = null;

    /**
     * @var null | \Knightar\StampsSoapClient\Type\Invoice
     */
    private ?\Knightar\StampsSoapClient\Type\Invoice $Invoice = null;

    /**
     * @var null | bool
     */
    private ?bool $NegotiatedRates = null;

    /**
     * @var null | string
     */
    private ?string $DeviceIdentity = null;

    /**
     * @var null | string
     */
    private ?string $ClientId = null;

    /**
     * @var null | string
     */
    private ?string $ClientSecret = null;

    /**
     * @var null | string
     */
    private ?string $PickupNumber = null;

    /**
     * @var null | string
     */
    private ?string $DistributionCenter = null;

    /**
     * Constructor
     *
     * @param null | string $Authenticator
     * @param null | \Knightar\StampsSoapClient\Type\Credentials $Credentials
     * @param bool $UserOwnedAccount
     * @param 'All' | 'USPS' | 'FedEx' | 'DHLExpress' | 'UPS' | 'CanadaPost' | 'DhlECommerce' | 'Zorbit' $Carrier
     * @param null | string $AccountNumber
     * @param null | string $AccountZIPCode
     * @param null | string $AccountCountry
     * @param null | \Knightar\StampsSoapClient\Type\Address $Address
     * @param null | bool $AgreeToEula
     * @param null | \Knightar\StampsSoapClient\Type\Invoice $Invoice
     * @param null | bool $NegotiatedRates
     * @param null | string $DeviceIdentity
     * @param null | string $ClientId
     * @param null | string $ClientSecret
     * @param null | string $PickupNumber
     * @param null | string $DistributionCenter
     */
    public function __construct(?string $Authenticator = null, ?\Knightar\StampsSoapClient\Type\Credentials $Credentials = null, bool $UserOwnedAccount, string $Carrier, ?string $AccountNumber, ?string $AccountZIPCode, ?string $AccountCountry, ?\Knightar\StampsSoapClient\Type\Address $Address, ?bool $AgreeToEula, ?\Knightar\StampsSoapClient\Type\Invoice $Invoice, ?bool $NegotiatedRates, ?string $DeviceIdentity, ?string $ClientId, ?string $ClientSecret, ?string $PickupNumber, ?string $DistributionCenter)
    {
        $this->Authenticator = $Authenticator;
        $this->Credentials = $Credentials;
        $this->UserOwnedAccount = $UserOwnedAccount;
        $this->Carrier = $Carrier;
        $this->AccountNumber = $AccountNumber;
        $this->AccountZIPCode = $AccountZIPCode;
        $this->AccountCountry = $AccountCountry;
        $this->Address = $Address;
        $this->AgreeToEula = $AgreeToEula;
        $this->Invoice = $Invoice;
        $this->NegotiatedRates = $NegotiatedRates;
        $this->DeviceIdentity = $DeviceIdentity;
        $this->ClientId = $ClientId;
        $this->ClientSecret = $ClientSecret;
        $this->PickupNumber = $PickupNumber;
        $this->DistributionCenter = $DistributionCenter;
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
     * @return null | string
     */
    public function getAccountNumber() : ?string
    {
        return $this->AccountNumber;
    }

    /**
     * @param null | string $AccountNumber
     * @return static
     */
    public function withAccountNumber(?string $AccountNumber) : static
    {
        $new = clone $this;
        $new->AccountNumber = $AccountNumber;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getAccountZIPCode() : ?string
    {
        return $this->AccountZIPCode;
    }

    /**
     * @param null | string $AccountZIPCode
     * @return static
     */
    public function withAccountZIPCode(?string $AccountZIPCode) : static
    {
        $new = clone $this;
        $new->AccountZIPCode = $AccountZIPCode;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getAccountCountry() : ?string
    {
        return $this->AccountCountry;
    }

    /**
     * @param null | string $AccountCountry
     * @return static
     */
    public function withAccountCountry(?string $AccountCountry) : static
    {
        $new = clone $this;
        $new->AccountCountry = $AccountCountry;

        return $new;
    }

    /**
     * @return null | \Knightar\StampsSoapClient\Type\Address
     */
    public function getAddress() : ?\Knightar\StampsSoapClient\Type\Address
    {
        return $this->Address;
    }

    /**
     * @param null | \Knightar\StampsSoapClient\Type\Address $Address
     * @return static
     */
    public function withAddress(?\Knightar\StampsSoapClient\Type\Address $Address) : static
    {
        $new = clone $this;
        $new->Address = $Address;

        return $new;
    }

    /**
     * @return null | bool
     */
    public function getAgreeToEula() : ?bool
    {
        return $this->AgreeToEula;
    }

    /**
     * @param null | bool $AgreeToEula
     * @return static
     */
    public function withAgreeToEula(?bool $AgreeToEula) : static
    {
        $new = clone $this;
        $new->AgreeToEula = $AgreeToEula;

        return $new;
    }

    /**
     * @return null | \Knightar\StampsSoapClient\Type\Invoice
     */
    public function getInvoice() : ?\Knightar\StampsSoapClient\Type\Invoice
    {
        return $this->Invoice;
    }

    /**
     * @param null | \Knightar\StampsSoapClient\Type\Invoice $Invoice
     * @return static
     */
    public function withInvoice(?\Knightar\StampsSoapClient\Type\Invoice $Invoice) : static
    {
        $new = clone $this;
        $new->Invoice = $Invoice;

        return $new;
    }

    /**
     * @return null | bool
     */
    public function getNegotiatedRates() : ?bool
    {
        return $this->NegotiatedRates;
    }

    /**
     * @param null | bool $NegotiatedRates
     * @return static
     */
    public function withNegotiatedRates(?bool $NegotiatedRates) : static
    {
        $new = clone $this;
        $new->NegotiatedRates = $NegotiatedRates;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getDeviceIdentity() : ?string
    {
        return $this->DeviceIdentity;
    }

    /**
     * @param null | string $DeviceIdentity
     * @return static
     */
    public function withDeviceIdentity(?string $DeviceIdentity) : static
    {
        $new = clone $this;
        $new->DeviceIdentity = $DeviceIdentity;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getClientId() : ?string
    {
        return $this->ClientId;
    }

    /**
     * @param null | string $ClientId
     * @return static
     */
    public function withClientId(?string $ClientId) : static
    {
        $new = clone $this;
        $new->ClientId = $ClientId;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getClientSecret() : ?string
    {
        return $this->ClientSecret;
    }

    /**
     * @param null | string $ClientSecret
     * @return static
     */
    public function withClientSecret(?string $ClientSecret) : static
    {
        $new = clone $this;
        $new->ClientSecret = $ClientSecret;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getPickupNumber() : ?string
    {
        return $this->PickupNumber;
    }

    /**
     * @param null | string $PickupNumber
     * @return static
     */
    public function withPickupNumber(?string $PickupNumber) : static
    {
        $new = clone $this;
        $new->PickupNumber = $PickupNumber;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getDistributionCenter() : ?string
    {
        return $this->DistributionCenter;
    }

    /**
     * @param null | string $DistributionCenter
     * @return static
     */
    public function withDistributionCenter(?string $DistributionCenter) : static
    {
        $new = clone $this;
        $new->DistributionCenter = $DistributionCenter;

        return $new;
    }
}

