<?php

namespace Knightar\StampsSoapClient\Type;

use Phpro\SoapClient\Type\RequestInterface;

class AuthenticateBridgeAuthenticator implements RequestInterface
{
    /**
     * @var string
     */
    private string $integrationID;

    /**
     * @var string
     */
    private string $batchAuthenticator;

    /**
     * Constructor
     *
     * @param string $integrationID
     * @param string $batchAuthenticator
     */
    public function __construct(string $integrationID, string $batchAuthenticator)
    {
        $this->integrationID = $integrationID;
        $this->batchAuthenticator = $batchAuthenticator;
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
    public function getBatchAuthenticator() : string
    {
        return $this->batchAuthenticator;
    }

    /**
     * @param string $batchAuthenticator
     * @return static
     */
    public function withBatchAuthenticator(string $batchAuthenticator) : static
    {
        $new = clone $this;
        $new->batchAuthenticator = $batchAuthenticator;

        return $new;
    }
}

