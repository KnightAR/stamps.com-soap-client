<?php

namespace Knightar\StampsSoapClient\Type;

class CarrierPickupPackageInformation
{
    /**
     * @var null | int
     */
    private ?int $NumberOfExpressMailPieces = null;

    /**
     * @var null | int
     */
    private ?int $NumberOfPriorityMailPieces = null;

    /**
     * @var null | int
     */
    private ?int $NumberOfInternationalPieces = null;

    /**
     * @var null | int
     */
    private ?int $NumberOfFirstClassPieces = null;

    /**
     * @var null | int
     */
    private ?int $NumberOfParcelSelectPieces = null;

    /**
     * @var null | int
     */
    private ?int $NumberOfOtherPieces = null;

    /**
     * @var null | int
     */
    private ?int $TotalWeightOfPackagesLbs = null;

    /**
     * @var 'FrontDoor' | 'BackDoor' | 'SideDoor' | 'KnockOnDoorOrRingBell' | 'MailRoom' | 'Office' | 'Reception' | 'InOrAtMailbox' | 'Other'
     */
    private string $PackageLocation;

    /**
     * @var null | string
     */
    private ?string $SpecialInstruction = null;

    /**
     * @return null | int
     */
    public function getNumberOfExpressMailPieces() : ?int
    {
        return $this->NumberOfExpressMailPieces;
    }

    /**
     * @param null | int $NumberOfExpressMailPieces
     * @return static
     */
    public function withNumberOfExpressMailPieces(?int $NumberOfExpressMailPieces) : static
    {
        $new = clone $this;
        $new->NumberOfExpressMailPieces = $NumberOfExpressMailPieces;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getNumberOfPriorityMailPieces() : ?int
    {
        return $this->NumberOfPriorityMailPieces;
    }

    /**
     * @param null | int $NumberOfPriorityMailPieces
     * @return static
     */
    public function withNumberOfPriorityMailPieces(?int $NumberOfPriorityMailPieces) : static
    {
        $new = clone $this;
        $new->NumberOfPriorityMailPieces = $NumberOfPriorityMailPieces;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getNumberOfInternationalPieces() : ?int
    {
        return $this->NumberOfInternationalPieces;
    }

    /**
     * @param null | int $NumberOfInternationalPieces
     * @return static
     */
    public function withNumberOfInternationalPieces(?int $NumberOfInternationalPieces) : static
    {
        $new = clone $this;
        $new->NumberOfInternationalPieces = $NumberOfInternationalPieces;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getNumberOfFirstClassPieces() : ?int
    {
        return $this->NumberOfFirstClassPieces;
    }

    /**
     * @param null | int $NumberOfFirstClassPieces
     * @return static
     */
    public function withNumberOfFirstClassPieces(?int $NumberOfFirstClassPieces) : static
    {
        $new = clone $this;
        $new->NumberOfFirstClassPieces = $NumberOfFirstClassPieces;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getNumberOfParcelSelectPieces() : ?int
    {
        return $this->NumberOfParcelSelectPieces;
    }

    /**
     * @param null | int $NumberOfParcelSelectPieces
     * @return static
     */
    public function withNumberOfParcelSelectPieces(?int $NumberOfParcelSelectPieces) : static
    {
        $new = clone $this;
        $new->NumberOfParcelSelectPieces = $NumberOfParcelSelectPieces;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getNumberOfOtherPieces() : ?int
    {
        return $this->NumberOfOtherPieces;
    }

    /**
     * @param null | int $NumberOfOtherPieces
     * @return static
     */
    public function withNumberOfOtherPieces(?int $NumberOfOtherPieces) : static
    {
        $new = clone $this;
        $new->NumberOfOtherPieces = $NumberOfOtherPieces;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getTotalWeightOfPackagesLbs() : ?int
    {
        return $this->TotalWeightOfPackagesLbs;
    }

    /**
     * @param null | int $TotalWeightOfPackagesLbs
     * @return static
     */
    public function withTotalWeightOfPackagesLbs(?int $TotalWeightOfPackagesLbs) : static
    {
        $new = clone $this;
        $new->TotalWeightOfPackagesLbs = $TotalWeightOfPackagesLbs;

        return $new;
    }

    /**
     * @return 'FrontDoor' | 'BackDoor' | 'SideDoor' | 'KnockOnDoorOrRingBell' | 'MailRoom' | 'Office' | 'Reception' | 'InOrAtMailbox' | 'Other'
     */
    public function getPackageLocation() : string
    {
        return $this->PackageLocation;
    }

    /**
     * @param 'FrontDoor' | 'BackDoor' | 'SideDoor' | 'KnockOnDoorOrRingBell' | 'MailRoom' | 'Office' | 'Reception' | 'InOrAtMailbox' | 'Other' $PackageLocation
     * @return static
     */
    public function withPackageLocation(string $PackageLocation) : static
    {
        $new = clone $this;
        $new->PackageLocation = $PackageLocation;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getSpecialInstruction() : ?string
    {
        return $this->SpecialInstruction;
    }

    /**
     * @param null | string $SpecialInstruction
     * @return static
     */
    public function withSpecialInstruction(?string $SpecialInstruction) : static
    {
        $new = clone $this;
        $new->SpecialInstruction = $SpecialInstruction;

        return $new;
    }
}

