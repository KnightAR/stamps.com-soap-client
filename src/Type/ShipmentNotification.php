<?php

namespace Knightar\StampsSoapClient\Type;

class ShipmentNotification
{
    /**
     * @var string
     */
    private string $Email;

    /**
     * @var null | bool
     */
    private ?bool $UseCompanyNameInFromLine = null;

    /**
     * @var null | bool
     */
    private ?bool $UseCompanyNameInSubject = null;

    /**
     * @return string
     */
    public function getEmail() : string
    {
        return $this->Email;
    }

    /**
     * @param string $Email
     * @return static
     */
    public function withEmail(string $Email) : static
    {
        $new = clone $this;
        $new->Email = $Email;

        return $new;
    }

    /**
     * @return null | bool
     */
    public function getUseCompanyNameInFromLine() : ?bool
    {
        return $this->UseCompanyNameInFromLine;
    }

    /**
     * @param null | bool $UseCompanyNameInFromLine
     * @return static
     */
    public function withUseCompanyNameInFromLine(?bool $UseCompanyNameInFromLine) : static
    {
        $new = clone $this;
        $new->UseCompanyNameInFromLine = $UseCompanyNameInFromLine;

        return $new;
    }

    /**
     * @return null | bool
     */
    public function getUseCompanyNameInSubject() : ?bool
    {
        return $this->UseCompanyNameInSubject;
    }

    /**
     * @param null | bool $UseCompanyNameInSubject
     * @return static
     */
    public function withUseCompanyNameInSubject(?bool $UseCompanyNameInSubject) : static
    {
        $new = clone $this;
        $new->UseCompanyNameInSubject = $UseCompanyNameInSubject;

        return $new;
    }
}

