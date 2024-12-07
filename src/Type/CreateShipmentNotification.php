<?php

namespace Knightar\StampsSoapClient\Type;

use Phpro\SoapClient\Type\RequestInterface;

class CreateShipmentNotification implements RequestInterface
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
     * @var string
     */
    private string $TrackingNumber;

    /**
     * @var null | string
     */
    private ?string $Carrier = null;

    /**
     * @var null | float
     */
    private ?float $WeightLb = null;

    /**
     * @var null | float
     */
    private ?float $WeightOz = null;

    /**
     * @var null | string
     */
    private ?string $TrackingType = null;

    /**
     * @var null | string
     */
    private ?string $BrandingId = null;

    /**
     * @var null | string
     */
    private ?string $NotificationSettingId = null;

    /**
     * @var string
     */
    private string $EmailSenderName;

    /**
     * @var \Knightar\StampsSoapClient\Type\Address
     */
    private \Knightar\StampsSoapClient\Type\Address $From;

    /**
     * @var null | \Knightar\StampsSoapClient\Type\Address
     */
    private ?\Knightar\StampsSoapClient\Type\Address $To = null;

    /**
     * @var null | \Knightar\StampsSoapClient\Type\OrderDetails
     */
    private ?\Knightar\StampsSoapClient\Type\OrderDetails $OrderDetails = null;

    /**
     * @var \DateTimeInterface
     */
    private \DateTimeInterface $ShipDate;

    /**
     * @var null | bool
     */
    private ?bool $SendEmail = null;

    /**
     * Constructor
     *
     * @param null | string $Authenticator
     * @param null | \Knightar\StampsSoapClient\Type\Credentials $Credentials
     * @param string $TrackingNumber
     * @param null | string $Carrier
     * @param null | float $WeightLb
     * @param null | float $WeightOz
     * @param null | string $TrackingType
     * @param null | string $BrandingId
     * @param null | string $NotificationSettingId
     * @param string $EmailSenderName
     * @param \Knightar\StampsSoapClient\Type\Address $From
     * @param null | \Knightar\StampsSoapClient\Type\Address $To
     * @param null | \Knightar\StampsSoapClient\Type\OrderDetails $OrderDetails
     * @param \DateTimeInterface $ShipDate
     * @param null | bool $SendEmail
     */
    public function __construct(?string $Authenticator = null, ?\Knightar\StampsSoapClient\Type\Credentials $Credentials = null, string $TrackingNumber, ?string $Carrier, ?float $WeightLb, ?float $WeightOz, ?string $TrackingType, ?string $BrandingId, ?string $NotificationSettingId, string $EmailSenderName, \Knightar\StampsSoapClient\Type\Address $From, ?\Knightar\StampsSoapClient\Type\Address $To, ?\Knightar\StampsSoapClient\Type\OrderDetails $OrderDetails, \DateTimeInterface $ShipDate, ?bool $SendEmail)
    {
        $this->Authenticator = $Authenticator;
        $this->Credentials = $Credentials;
        $this->TrackingNumber = $TrackingNumber;
        $this->Carrier = $Carrier;
        $this->WeightLb = $WeightLb;
        $this->WeightOz = $WeightOz;
        $this->TrackingType = $TrackingType;
        $this->BrandingId = $BrandingId;
        $this->NotificationSettingId = $NotificationSettingId;
        $this->EmailSenderName = $EmailSenderName;
        $this->From = $From;
        $this->To = $To;
        $this->OrderDetails = $OrderDetails;
        $this->ShipDate = $ShipDate;
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
     * @return string
     */
    public function getTrackingNumber() : string
    {
        return $this->TrackingNumber;
    }

    /**
     * @param string $TrackingNumber
     * @return static
     */
    public function withTrackingNumber(string $TrackingNumber) : static
    {
        $new = clone $this;
        $new->TrackingNumber = $TrackingNumber;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getCarrier() : ?string
    {
        return $this->Carrier;
    }

    /**
     * @param null | string $Carrier
     * @return static
     */
    public function withCarrier(?string $Carrier) : static
    {
        $new = clone $this;
        $new->Carrier = $Carrier;

        return $new;
    }

    /**
     * @return null | float
     */
    public function getWeightLb() : ?float
    {
        return $this->WeightLb;
    }

    /**
     * @param null | float $WeightLb
     * @return static
     */
    public function withWeightLb(?float $WeightLb) : static
    {
        $new = clone $this;
        $new->WeightLb = $WeightLb;

        return $new;
    }

    /**
     * @return null | float
     */
    public function getWeightOz() : ?float
    {
        return $this->WeightOz;
    }

    /**
     * @param null | float $WeightOz
     * @return static
     */
    public function withWeightOz(?float $WeightOz) : static
    {
        $new = clone $this;
        $new->WeightOz = $WeightOz;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getTrackingType() : ?string
    {
        return $this->TrackingType;
    }

    /**
     * @param null | string $TrackingType
     * @return static
     */
    public function withTrackingType(?string $TrackingType) : static
    {
        $new = clone $this;
        $new->TrackingType = $TrackingType;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getBrandingId() : ?string
    {
        return $this->BrandingId;
    }

    /**
     * @param null | string $BrandingId
     * @return static
     */
    public function withBrandingId(?string $BrandingId) : static
    {
        $new = clone $this;
        $new->BrandingId = $BrandingId;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getNotificationSettingId() : ?string
    {
        return $this->NotificationSettingId;
    }

    /**
     * @param null | string $NotificationSettingId
     * @return static
     */
    public function withNotificationSettingId(?string $NotificationSettingId) : static
    {
        $new = clone $this;
        $new->NotificationSettingId = $NotificationSettingId;

        return $new;
    }

    /**
     * @return string
     */
    public function getEmailSenderName() : string
    {
        return $this->EmailSenderName;
    }

    /**
     * @param string $EmailSenderName
     * @return static
     */
    public function withEmailSenderName(string $EmailSenderName) : static
    {
        $new = clone $this;
        $new->EmailSenderName = $EmailSenderName;

        return $new;
    }

    /**
     * @return \Knightar\StampsSoapClient\Type\Address
     */
    public function getFrom() : \Knightar\StampsSoapClient\Type\Address
    {
        return $this->From;
    }

    /**
     * @param \Knightar\StampsSoapClient\Type\Address $From
     * @return static
     */
    public function withFrom(\Knightar\StampsSoapClient\Type\Address $From) : static
    {
        $new = clone $this;
        $new->From = $From;

        return $new;
    }

    /**
     * @return null | \Knightar\StampsSoapClient\Type\Address
     */
    public function getTo() : ?\Knightar\StampsSoapClient\Type\Address
    {
        return $this->To;
    }

    /**
     * @param null | \Knightar\StampsSoapClient\Type\Address $To
     * @return static
     */
    public function withTo(?\Knightar\StampsSoapClient\Type\Address $To) : static
    {
        $new = clone $this;
        $new->To = $To;

        return $new;
    }

    /**
     * @return null | \Knightar\StampsSoapClient\Type\OrderDetails
     */
    public function getOrderDetails() : ?\Knightar\StampsSoapClient\Type\OrderDetails
    {
        return $this->OrderDetails;
    }

    /**
     * @param null | \Knightar\StampsSoapClient\Type\OrderDetails $OrderDetails
     * @return static
     */
    public function withOrderDetails(?\Knightar\StampsSoapClient\Type\OrderDetails $OrderDetails) : static
    {
        $new = clone $this;
        $new->OrderDetails = $OrderDetails;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getShipDate() : \DateTimeInterface
    {
        return $this->ShipDate;
    }

    /**
     * @param \DateTimeInterface $ShipDate
     * @return static
     */
    public function withShipDate(\DateTimeInterface $ShipDate) : static
    {
        $new = clone $this;
        $new->ShipDate = $ShipDate;

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

