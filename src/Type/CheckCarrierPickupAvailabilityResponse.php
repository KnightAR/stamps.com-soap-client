<?php

namespace Knightar\StampsSoapClient\Type;

use Phpro\SoapClient\Type\ResultInterface;

class CheckCarrierPickupAvailabilityResponse implements ResultInterface
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

