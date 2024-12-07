<?php

namespace Knightar\StampsSoapClient\Type;

class HoldForPickUpFacility
{
    /**
     * @var null | string
     */
    private ?string $Id = null;

    /**
     * @var null | string
     */
    private ?string $Name = null;

    /**
     * @var null | \Knightar\StampsSoapClient\Type\Address
     */
    private ?\Knightar\StampsSoapClient\Type\Address $Address = null;

    /**
     * @var bool
     */
    private bool $Has10AMCommitment;

    /**
     * @return null | string
     */
    public function getId() : ?string
    {
        return $this->Id;
    }

    /**
     * @param null | string $Id
     * @return static
     */
    public function withId(?string $Id) : static
    {
        $new = clone $this;
        $new->Id = $Id;

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
     * @return null | \Knightar\StampsSoapClient\Type\Address
     */
    public function getAddress() : ?\Knightar\StampsSoapClient\Type\Address
    {
        return $this->Address;
    }

    /**
     * @param null | \Knightar\StampsSoapClient\Type\Address $Address
     * @return static
     */
    public function withAddress(?\Knightar\StampsSoapClient\Type\Address $Address) : static
    {
        $new = clone $this;
        $new->Address = $Address;

        return $new;
    }

    /**
     * @return bool
     */
    public function getHas10AMCommitment() : bool
    {
        return $this->Has10AMCommitment;
    }

    /**
     * @param bool $Has10AMCommitment
     * @return static
     */
    public function withHas10AMCommitment(bool $Has10AMCommitment) : static
    {
        $new = clone $this;
        $new->Has10AMCommitment = $Has10AMCommitment;

        return $new;
    }
}

