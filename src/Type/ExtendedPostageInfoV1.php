<?php

namespace Knightar\StampsSoapClient\Type;

class ExtendedPostageInfoV1
{
    /**
     * @var null | bool
     */
    private ?bool $eRefundAllowed = null;

    /**
     * @var null | string
     */
    private ?string $orderID = null;

    /**
     * @var null | string
     */
    private ?string $storeProfileName = null;

    /**
     * @var null | string
     */
    private ?string $storeProfileID = null;

    /**
     * @var null | string
     */
    private ?string $formattedOrderDetails = null;

    /**
     * @var null | int
     */
    private ?int $mediaID = null;

    /**
     * @var null | int
     */
    private ?int $printerID = null;

    /**
     * @var null | string
     */
    private ?string $netstampSerialNumber = null;

    /**
     * @var null | string
     */
    private ?string $mcatTracking = null;

    /**
     * @var null | string
     */
    private ?string $bridgeProfileType = null;

    /**
     * @var null | string
     */
    private ?string $clientVersion = null;

    /**
     * @return null | bool
     */
    public function getERefundAllowed() : ?bool
    {
        return $this->eRefundAllowed;
    }

    /**
     * @param null | bool $eRefundAllowed
     * @return static
     */
    public function withERefundAllowed(?bool $eRefundAllowed) : static
    {
        $new = clone $this;
        $new->eRefundAllowed = $eRefundAllowed;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getOrderID() : ?string
    {
        return $this->orderID;
    }

    /**
     * @param null | string $orderID
     * @return static
     */
    public function withOrderID(?string $orderID) : static
    {
        $new = clone $this;
        $new->orderID = $orderID;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getStoreProfileName() : ?string
    {
        return $this->storeProfileName;
    }

    /**
     * @param null | string $storeProfileName
     * @return static
     */
    public function withStoreProfileName(?string $storeProfileName) : static
    {
        $new = clone $this;
        $new->storeProfileName = $storeProfileName;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getStoreProfileID() : ?string
    {
        return $this->storeProfileID;
    }

    /**
     * @param null | string $storeProfileID
     * @return static
     */
    public function withStoreProfileID(?string $storeProfileID) : static
    {
        $new = clone $this;
        $new->storeProfileID = $storeProfileID;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getFormattedOrderDetails() : ?string
    {
        return $this->formattedOrderDetails;
    }

    /**
     * @param null | string $formattedOrderDetails
     * @return static
     */
    public function withFormattedOrderDetails(?string $formattedOrderDetails) : static
    {
        $new = clone $this;
        $new->formattedOrderDetails = $formattedOrderDetails;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getMediaID() : ?int
    {
        return $this->mediaID;
    }

    /**
     * @param null | int $mediaID
     * @return static
     */
    public function withMediaID(?int $mediaID) : static
    {
        $new = clone $this;
        $new->mediaID = $mediaID;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getPrinterID() : ?int
    {
        return $this->printerID;
    }

    /**
     * @param null | int $printerID
     * @return static
     */
    public function withPrinterID(?int $printerID) : static
    {
        $new = clone $this;
        $new->printerID = $printerID;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getNetstampSerialNumber() : ?string
    {
        return $this->netstampSerialNumber;
    }

    /**
     * @param null | string $netstampSerialNumber
     * @return static
     */
    public function withNetstampSerialNumber(?string $netstampSerialNumber) : static
    {
        $new = clone $this;
        $new->netstampSerialNumber = $netstampSerialNumber;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getMcatTracking() : ?string
    {
        return $this->mcatTracking;
    }

    /**
     * @param null | string $mcatTracking
     * @return static
     */
    public function withMcatTracking(?string $mcatTracking) : static
    {
        $new = clone $this;
        $new->mcatTracking = $mcatTracking;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getBridgeProfileType() : ?string
    {
        return $this->bridgeProfileType;
    }

    /**
     * @param null | string $bridgeProfileType
     * @return static
     */
    public function withBridgeProfileType(?string $bridgeProfileType) : static
    {
        $new = clone $this;
        $new->bridgeProfileType = $bridgeProfileType;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getClientVersion() : ?string
    {
        return $this->clientVersion;
    }

    /**
     * @param null | string $clientVersion
     * @return static
     */
    public function withClientVersion(?string $clientVersion) : static
    {
        $new = clone $this;
        $new->clientVersion = $clientVersion;

        return $new;
    }
}

