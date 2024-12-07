<?php

namespace Knightar\StampsSoapClient\Type;

class Zorbit
{
    /**
     * @var null | string
     */
    private ?string $Email = null;

    /**
     * @var null | string
     */
    private ?string $Password = null;

    /**
     * @var null | string
     */
    private ?string $Name = null;

    /**
     * @var null | string
     */
    private ?string $Company = null;

    /**
     * @var null | string
     */
    private ?string $Phone = null;

    /**
     * @return null | string
     */
    public function getEmail() : ?string
    {
        return $this->Email;
    }

    /**
     * @param null | string $Email
     * @return static
     */
    public function withEmail(?string $Email) : static
    {
        $new = clone $this;
        $new->Email = $Email;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getPassword() : ?string
    {
        return $this->Password;
    }

    /**
     * @param null | string $Password
     * @return static
     */
    public function withPassword(?string $Password) : static
    {
        $new = clone $this;
        $new->Password = $Password;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getName() : ?string
    {
        return $this->Name;
    }

    /**
     * @param null | string $Name
     * @return static
     */
    public function withName(?string $Name) : static
    {
        $new = clone $this;
        $new->Name = $Name;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getCompany() : ?string
    {
        return $this->Company;
    }

    /**
     * @param null | string $Company
     * @return static
     */
    public function withCompany(?string $Company) : static
    {
        $new = clone $this;
        $new->Company = $Company;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getPhone() : ?string
    {
        return $this->Phone;
    }

    /**
     * @param null | string $Phone
     * @return static
     */
    public function withPhone(?string $Phone) : static
    {
        $new = clone $this;
        $new->Phone = $Phone;

        return $new;
    }
}

