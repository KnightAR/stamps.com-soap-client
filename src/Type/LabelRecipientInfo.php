<?php

namespace Knightar\StampsSoapClient\Type;

class LabelRecipientInfo
{
    /**
     * @var string
     */
    private string $EmailAddress;

    /**
     * @var string
     */
    private string $Name;

    /**
     * @var null | string
     */
    private ?string $Note = null;

    /**
     * @var null | bool
     */
    private ?bool $CopyToOriginator = null;

    /**
     * @return string
     */
    public function getEmailAddress() : string
    {
        return $this->EmailAddress;
    }

    /**
     * @param string $EmailAddress
     * @return static
     */
    public function withEmailAddress(string $EmailAddress) : static
    {
        $new = clone $this;
        $new->EmailAddress = $EmailAddress;

        return $new;
    }

    /**
     * @return string
     */
    public function getName() : string
    {
        return $this->Name;
    }

    /**
     * @param string $Name
     * @return static
     */
    public function withName(string $Name) : static
    {
        $new = clone $this;
        $new->Name = $Name;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getNote() : ?string
    {
        return $this->Note;
    }

    /**
     * @param null | string $Note
     * @return static
     */
    public function withNote(?string $Note) : static
    {
        $new = clone $this;
        $new->Note = $Note;

        return $new;
    }

    /**
     * @return null | bool
     */
    public function getCopyToOriginator() : ?bool
    {
        return $this->CopyToOriginator;
    }

    /**
     * @param null | bool $CopyToOriginator
     * @return static
     */
    public function withCopyToOriginator(?bool $CopyToOriginator) : static
    {
        $new = clone $this;
        $new->CopyToOriginator = $CopyToOriginator;

        return $new;
    }
}

