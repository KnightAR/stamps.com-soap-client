<?php

namespace Knightar\StampsSoapClient\Type;

class Credentials
{

    /**
     * @var string
     */
    private string $IntegrationID;

    /**
     * @var string
     */
    private string $Username;

    /**
     * @var string
     */
    private string $Password;

    /**
     * The constructor for the Credentials class.
     *
     * @param string $IntegrationID
     * @param string $Username
     * @param string $Password
     */
    public function __construct(string $IntegrationID, string $Username, string $Password)
    {
        $this->IntegrationID = $IntegrationID;
        $this->Username = $Username;
        $this->Password = $Password;
    }

    /**
     * @return string
     */
    public function getIntegrationID() : string
    {
        return $this->IntegrationID;
    }

    /**
     * @param string $IntegrationID
     * @return static
     */
    public function withIntegrationID(string $IntegrationID) : static
    {
        $new = clone $this;
        $new->IntegrationID = $IntegrationID;

        return $new;
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
    public function getPassword() : string
    {
        return $this->Password;
    }

    /**
     * @param string $Password
     * @return static
     */
    public function withPassword(string $Password) : static
    {
        $new = clone $this;
        $new->Password = $Password;

        return $new;
    }
}

