<?php

namespace Knightar\StampsSoapClient\Type;

use Phpro\SoapClient\Type\ResultInterface;

class RegisterAccountResponse implements ResultInterface
{
    /**
     * @var 'Success' | 'Fail'
     */
    private string $RegistrationStatus;

    /**
     * @var string
     */
    private string $SuggestedUserName;

    /**
     * @var int
     */
    private int $UserId;

    /**
     * @var string
     */
    private string $PromoUrl;

    /**
     * @return 'Success' | 'Fail'
     */
    public function getRegistrationStatus() : string
    {
        return $this->RegistrationStatus;
    }

    /**
     * @param 'Success' | 'Fail' $RegistrationStatus
     * @return static
     */
    public function withRegistrationStatus(string $RegistrationStatus) : static
    {
        $new = clone $this;
        $new->RegistrationStatus = $RegistrationStatus;

        return $new;
    }

    /**
     * @return string
     */
    public function getSuggestedUserName() : string
    {
        return $this->SuggestedUserName;
    }

    /**
     * @param string $SuggestedUserName
     * @return static
     */
    public function withSuggestedUserName(string $SuggestedUserName) : static
    {
        $new = clone $this;
        $new->SuggestedUserName = $SuggestedUserName;

        return $new;
    }

    /**
     * @return int
     */
    public function getUserId() : int
    {
        return $this->UserId;
    }

    /**
     * @param int $UserId
     * @return static
     */
    public function withUserId(int $UserId) : static
    {
        $new = clone $this;
        $new->UserId = $UserId;

        return $new;
    }

    /**
     * @return string
     */
    public function getPromoUrl() : string
    {
        return $this->PromoUrl;
    }

    /**
     * @param string $PromoUrl
     * @return static
     */
    public function withPromoUrl(string $PromoUrl) : static
    {
        $new = clone $this;
        $new->PromoUrl = $PromoUrl;

        return $new;
    }
}

