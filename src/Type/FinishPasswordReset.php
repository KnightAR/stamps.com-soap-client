<?php

namespace Knightar\StampsSoapClient\Type;

use Phpro\SoapClient\Type\RequestInterface;

class FinishPasswordReset implements RequestInterface
{
    /**
     * @var string
     */
    private string $Username;

    /**
     * @var string
     */
    private string $TempPassword;

    /**
     * @var string
     */
    private string $NewPassword;

    /**
     * @var null | string
     */
    private ?string $IntegrationId = null;

    /**
     * Constructor
     *
     * @param string $Username
     * @param string $TempPassword
     * @param string $NewPassword
     * @param null | string $IntegrationId
     */
    public function __construct(string $Username, string $TempPassword, string $NewPassword, ?string $IntegrationId)
    {
        $this->Username = $Username;
        $this->TempPassword = $TempPassword;
        $this->NewPassword = $NewPassword;
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
    public function getTempPassword() : string
    {
        return $this->TempPassword;
    }

    /**
     * @param string $TempPassword
     * @return static
     */
    public function withTempPassword(string $TempPassword) : static
    {
        $new = clone $this;
        $new->TempPassword = $TempPassword;

        return $new;
    }

    /**
     * @return string
     */
    public function getNewPassword() : string
    {
        return $this->NewPassword;
    }

    /**
     * @param string $NewPassword
     * @return static
     */
    public function withNewPassword(string $NewPassword) : static
    {
        $new = clone $this;
        $new->NewPassword = $NewPassword;

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

