<?php

namespace Knightar\StampsSoapClient\Type;

use Phpro\SoapClient\Type\ResultInterface;

class TrackShipmentResponse implements ResultInterface
{
    /**
     * @var string
     */
    private string $Authenticator;

    /**
     * @var \Knightar\StampsSoapClient\Type\ArrayOfTrackingEvent
     */
    private \Knightar\StampsSoapClient\Type\ArrayOfTrackingEvent $TrackingEvents;

    /**
     * @var null | \DateTimeInterface
     */
    private ?\DateTimeInterface $GuaranteedDeliveryDate = null;

    /**
     * @var null | \DateTimeInterface
     */
    private ?\DateTimeInterface $ExpectedDeliveryDate = null;

    /**
     * @var null | string
     */
    private ?string $ServiceDescription = null;

    /**
     * @var null | string
     */
    private ?string $Carrier = null;

    /**
     * @var null | \Knightar\StampsSoapClient\Type\DestinationInfo
     */
    private ?\Knightar\StampsSoapClient\Type\DestinationInfo $DestinationInfo = null;

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
     * @return \Knightar\StampsSoapClient\Type\ArrayOfTrackingEvent
     */
    public function getTrackingEvents() : \Knightar\StampsSoapClient\Type\ArrayOfTrackingEvent
    {
        return $this->TrackingEvents;
    }

    /**
     * @param \Knightar\StampsSoapClient\Type\ArrayOfTrackingEvent $TrackingEvents
     * @return static
     */
    public function withTrackingEvents(\Knightar\StampsSoapClient\Type\ArrayOfTrackingEvent $TrackingEvents) : static
    {
        $new = clone $this;
        $new->TrackingEvents = $TrackingEvents;

        return $new;
    }

    /**
     * @return null | \DateTimeInterface
     */
    public function getGuaranteedDeliveryDate() : ?\DateTimeInterface
    {
        return $this->GuaranteedDeliveryDate;
    }

    /**
     * @param null | \DateTimeInterface $GuaranteedDeliveryDate
     * @return static
     */
    public function withGuaranteedDeliveryDate(?\DateTimeInterface $GuaranteedDeliveryDate) : static
    {
        $new = clone $this;
        $new->GuaranteedDeliveryDate = $GuaranteedDeliveryDate;

        return $new;
    }

    /**
     * @return null | \DateTimeInterface
     */
    public function getExpectedDeliveryDate() : ?\DateTimeInterface
    {
        return $this->ExpectedDeliveryDate;
    }

    /**
     * @param null | \DateTimeInterface $ExpectedDeliveryDate
     * @return static
     */
    public function withExpectedDeliveryDate(?\DateTimeInterface $ExpectedDeliveryDate) : static
    {
        $new = clone $this;
        $new->ExpectedDeliveryDate = $ExpectedDeliveryDate;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getServiceDescription() : ?string
    {
        return $this->ServiceDescription;
    }

    /**
     * @param null | string $ServiceDescription
     * @return static
     */
    public function withServiceDescription(?string $ServiceDescription) : static
    {
        $new = clone $this;
        $new->ServiceDescription = $ServiceDescription;

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
     * @return null | \Knightar\StampsSoapClient\Type\DestinationInfo
     */
    public function getDestinationInfo() : ?\Knightar\StampsSoapClient\Type\DestinationInfo
    {
        return $this->DestinationInfo;
    }

    /**
     * @param null | \Knightar\StampsSoapClient\Type\DestinationInfo $DestinationInfo
     * @return static
     */
    public function withDestinationInfo(?\Knightar\StampsSoapClient\Type\DestinationInfo $DestinationInfo) : static
    {
        $new = clone $this;
        $new->DestinationInfo = $DestinationInfo;

        return $new;
    }
}

