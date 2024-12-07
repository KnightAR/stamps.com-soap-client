<?php

namespace Knightar\StampsSoapClient\Type;

use Phpro\SoapClient\Type\RequestInterface;

class AuthenticateWithTransferAuthenticator implements RequestInterface
{
    /**
     * @var string
     */
    private string $integrationID;

    /**
     * @var string
     */
    private string $transferAuthenticator;

    /**
     * Constructor
     *
     * @param string $integrationID
     * @param string $transferAuthenticator
     */
    public function __construct(string $integrationID, string $transferAuthenticator)
    {
        $this->integrationID = $integrationID;
        $this->transferAuthenticator = $transferAuthenticator;
    }

    /**
     * @return string
     */
    public function getIntegrationID() : string
    {
        return $this->integrationID;
    }

    /**
     * @param string $integrationID
     * @return static
     */
    public function withIntegrationID(string $integrationID) : static
    {
        $new = clone $this;
        $new->integrationID = $integrationID;

        return $new;
    }

    /**
     * @return string
     */
    public function getTransferAuthenticator() : string
    {
        return $this->transferAuthenticator;
    }

    /**
     * @param string $transferAuthenticator
     * @return static
     */
    public function withTransferAuthenticator(string $transferAuthenticator) : static
    {
        $new = clone $this;
        $new->transferAuthenticator = $transferAuthenticator;

        return $new;
    }
}

