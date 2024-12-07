<?php

namespace Knightar\StampsSoapClient\Type;

use Phpro\SoapClient\Type\ResultInterface;

class ModifyCarrierPickupResponse implements ResultInterface
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
     * @var string
     */
    private string $PickupStatus;

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
     * @return string
     */
    public function getPickupStatus() : string
    {
        return $this->PickupStatus;
    }

    /**
     * @param string $PickupStatus
     * @return static
     */
    public function withPickupStatus(string $PickupStatus) : static
    {
        $new = clone $this;
        $new->PickupStatus = $PickupStatus;

        return $new;
    }
}

