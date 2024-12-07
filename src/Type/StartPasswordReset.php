<?php

namespace Knightar\StampsSoapClient\Type;

use Phpro\SoapClient\Type\RequestInterface;

class StartPasswordReset implements RequestInterface
{
    /**
     * @var string
     */
    private string $Username;

    /**
     * @var string
     */
    private string $Codeword1;

    /**
     * @var string
     */
    private string $Codeword2;

    /**
     * @var null | string
     */
    private ?string $IntegrationId = null;

    /**
     * Constructor
     *
     * @param string $Username
     * @param string $Codeword1
     * @param string $Codeword2
     * @param null|string $IntegrationId
     */
    public function __construct(
        string  $Username,
        string  $Codeword1,
        string  $Codeword2,
        ?string $IntegrationId = null
    )
    {
        $this->Username = $Username;
        $this->Codeword1 = $Codeword1;
        $this->Codeword2 = $Codeword2;
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
     * @return string
     */
    public function getCodeword1() : string
    {
        return $this->Codeword1;
    }

    /**
     * @param string $Codeword1
     * @return static
     */
    public function withCodeword1(string $Codeword1) : static
    {
        $new = clone $this;
        $new->Codeword1 = $Codeword1;

        return $new;
    }

    /**
     * @return string
     */
    public function getCodeword2() : string
    {
        return $this->Codeword2;
    }

    /**
     * @param string $Codeword2
     * @return static
     */
    public function withCodeword2(string $Codeword2) : static
    {
        $new = clone $this;
        $new->Codeword2 = $Codeword2;

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

