<?php

namespace Knightar\StampsSoapClient\Type;

use Phpro\SoapClient\Type\ResultInterface;

class ScheduleCarrierPickupResponse implements ResultInterface
{
    /**
     * @var string
     */
    private string $Authenticator;

    /**
     * @var string
     */
    private string $PickupDate;

    /**
     * @var string
     */
    private string $PickUpDayOfWeek;

    /**
     * @var string
     */
    private string $ConfirmationNumber;

    /**
     * @var null | string
     */
    private ?string $PickupTimeEarliest = null;

    /**
     * @var null | string
     */
    private ?string $PickupTimeLatest = null;

    /**
     * @var float
     */
    private float $EstimatedAmount;

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
     * @return string
     */
    public function getPickupDate() : string
    {
        return $this->PickupDate;
    }

    /**
     * @param string $PickupDate
     * @return static
     */
    public function withPickupDate(string $PickupDate) : static
    {
        $new = clone $this;
        $new->PickupDate = $PickupDate;

        return $new;
    }

    /**
     * @return string
     */
    public function getPickUpDayOfWeek() : string
    {
        return $this->PickUpDayOfWeek;
    }

    /**
     * @param string $PickUpDayOfWeek
     * @return static
     */
    public function withPickUpDayOfWeek(string $PickUpDayOfWeek) : static
    {
        $new = clone $this;
        $new->PickUpDayOfWeek = $PickUpDayOfWeek;

        return $new;
    }

    /**
     * @return string
     */
    public function getConfirmationNumber() : string
    {
        return $this->ConfirmationNumber;
    }

    /**
     * @param string $ConfirmationNumber
     * @return static
     */
    public function withConfirmationNumber(string $ConfirmationNumber) : static
    {
        $new = clone $this;
        $new->ConfirmationNumber = $ConfirmationNumber;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getPickupTimeEarliest() : ?string
    {
        return $this->PickupTimeEarliest;
    }

    /**
     * @param null | string $PickupTimeEarliest
     * @return static
     */
    public function withPickupTimeEarliest(?string $PickupTimeEarliest) : static
    {
        $new = clone $this;
        $new->PickupTimeEarliest = $PickupTimeEarliest;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getPickupTimeLatest() : ?string
    {
        return $this->PickupTimeLatest;
    }

    /**
     * @param null | string $PickupTimeLatest
     * @return static
     */
    public function withPickupTimeLatest(?string $PickupTimeLatest) : static
    {
        $new = clone $this;
        $new->PickupTimeLatest = $PickupTimeLatest;

        return $new;
    }

    /**
     * @return float
     */
    public function getEstimatedAmount() : float
    {
        return $this->EstimatedAmount;
    }

    /**
     * @param float $EstimatedAmount
     * @return static
     */
    public function withEstimatedAmount(float $EstimatedAmount) : static
    {
        $new = clone $this;
        $new->EstimatedAmount = $EstimatedAmount;

        return $new;
    }
}

