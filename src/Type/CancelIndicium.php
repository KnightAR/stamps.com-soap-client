<?php

namespace Knightar\StampsSoapClient\Type;

use Phpro\SoapClient\Type\RequestInterface;

class CancelIndicium implements RequestInterface
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
     * @var null | \Knightar\StampsSoapClient\Type\ArrayOfString
     */
    private ?\Knightar\StampsSoapClient\Type\ArrayOfString $TrackingNumbers = null;

    /**
     * @var null | \Knightar\StampsSoapClient\Type\ArrayOfGuid
     */
    private ?\Knightar\StampsSoapClient\Type\ArrayOfGuid $StampsTxIDs = null;

    /**
     * @var null | bool
     */
    private ?bool $SendEmail = null;

    /**
     * Constructor
     *
     * @param \Knightar\StampsSoapClient\Type\ArrayOfString|null $TrackingNumbers
     * @param \Knightar\StampsSoapClient\Type\ArrayOfGuid|null $StampsTxIDs
     * @param bool|null $SendEmail
     * @param null|string $Authenticator
     * @param null|\Knightar\StampsSoapClient\Type\Credentials $Credentials
     */
    public function __construct(
        ?\Knightar\StampsSoapClient\Type\ArrayOfString $TrackingNumbers = null,
        ?\Knightar\StampsSoapClient\Type\ArrayOfGuid   $StampsTxIDs = null,
        ?bool                                          $SendEmail = null,
        ?string                                        $Authenticator = null,
        ?\Knightar\StampsSoapClient\Type\Credentials   $Credentials = null
    )
    {
        $this->Authenticator = $Authenticator;
        $this->Credentials = $Credentials;
        $this->TrackingNumbers = $TrackingNumbers;
        $this->StampsTxIDs = $StampsTxIDs;
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
     * @return null | \Knightar\StampsSoapClient\Type\ArrayOfString
     */
    public function getTrackingNumbers() : ?\Knightar\StampsSoapClient\Type\ArrayOfString
    {
        return $this->TrackingNumbers;
    }

    /**
     * @param null | \Knightar\StampsSoapClient\Type\ArrayOfString $TrackingNumbers
     * @return static
     */
    public function withTrackingNumbers(?\Knightar\StampsSoapClient\Type\ArrayOfString $TrackingNumbers) : static
    {
        $new = clone $this;
        $new->TrackingNumbers = $TrackingNumbers;

        return $new;
    }

    /**
     * @return null | \Knightar\StampsSoapClient\Type\ArrayOfGuid
     */
    public function getStampsTxIDs() : ?\Knightar\StampsSoapClient\Type\ArrayOfGuid
    {
        return $this->StampsTxIDs;
    }

    /**
     * @param null | \Knightar\StampsSoapClient\Type\ArrayOfGuid $StampsTxIDs
     * @return static
     */
    public function withStampsTxIDs(?\Knightar\StampsSoapClient\Type\ArrayOfGuid $StampsTxIDs) : static
    {
        $new = clone $this;
        $new->StampsTxIDs = $StampsTxIDs;

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

