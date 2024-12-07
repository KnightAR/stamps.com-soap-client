<?php

namespace Knightar\StampsSoapClient\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetCodewordQuestions implements RequestInterface
{
    /**
     * @var string
     */
    private string $Username;

    /**
     * @var null | string
     */
    private ?string $IntegrationId = null;

    /**
     * Constructor
     *
     * @param string $Username
     * @param null | string $IntegrationId
     */
    public function __construct(string $Username, ?string $IntegrationId)
    {
        $this->Username = $Username;
        $this->IntegrationId = $IntegrationId;
    }

    /**
     * @return string
     */
    public function getUsername() : string
    {
        return $this->Username;
    }

    /**
     * @param string $Username
     * @return static
     */
    public function withUsername(string $Username) : static
    {
        $new = clone $this;
        $new->Username = $Username;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getIntegrationId() : ?string
    {
        return $this->IntegrationId;
    }

    /**
     * @param null | string $IntegrationId
     * @return static
     */
    public function withIntegrationId(?string $IntegrationId) : static
    {
        $new = clone $this;
        $new->IntegrationId = $IntegrationId;

        return $new;
    }
}

