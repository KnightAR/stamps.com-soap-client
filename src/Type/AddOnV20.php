<?php

namespace Knightar\StampsSoapClient\Type;

class AddOnV20
{
    /**
     * @var null | float
     */
    private ?float $Amount = null;

    /**
     * @var 'US-A-INS' | 'US-A-COD' | 'US-A-DC' | 'US-A-SC' | 'US-A-COM' | 'US-A-CM' | 'US-A-RR' | 'US-A-RRM' | 'US-A-REG' | 'US-A-RD' | 'US-A-SH' | 'SC-A-INS' | 'SC-A-INSRM' | 'SC-A-HP' | 'US-A-SR' | 'US-A-NDW' | 'US-A-ESH' | 'US-A-NND' | 'US-A-RRE' | 'US-A-LANS' | 'US-A-LAWS' | 'US-A-HM' | 'US-A-CR' | 'US-A-1030' | 'US-A-ASR' | 'US-A-ASRD' | 'US-A-PR' | 'US-A-HFPU' | 'SC-A-POU' | 'CAR-A-SAT' | 'CAR-A-RES' | 'CAR-A-NSP' | 'CAR-A-ISR' | 'CAR-A-DSR' | 'CAR-A-ASR' | 'US-A-DDP' | 'US-A-POUR' | 'PG-A-INS' | 'CAR-A-DC' | 'CAR-A-SR' | 'CAR-A-INS' | 'CAR-A-IL' | 'CAR-A-POUR' | 'CAR-A-DDP'
     */
    private string $AddOnType;

    /**
     * @var null | string
     */
    private ?string $AddOnDescription = null;

    /**
     * @var null | \Knightar\StampsSoapClient\Type\ArrayOfArrayOfAddOnTypeV20
     */
    private ?\Knightar\StampsSoapClient\Type\ArrayOfArrayOfAddOnTypeV20 $RequiresAllOf = null;

    /**
     * @var null | \Knightar\StampsSoapClient\Type\ArrayOfAddOnTypeV20
     */
    private ?\Knightar\StampsSoapClient\Type\ArrayOfAddOnTypeV20 $ProhibitedWithAnyOf = null;

    /**
     * @var null | string
     */
    private ?string $MissingData = null;

    /**
     * AddOnV20 constructor.
     *
     * @param string $AddOnType The type of the add-on.
     * @param float|null $Amount The amount for the add-on.
     * @param string|null $AddOnDescription The description of the add-on.
     * @param \Knightar\StampsSoapClient\Type\ArrayOfArrayOfAddOnTypeV20|null $RequiresAllOf List of types the add-on requires.
     * @param \Knightar\StampsSoapClient\Type\ArrayOfAddOnTypeV20|null $ProhibitedWithAnyOf List of types prohibited with the add-on.
     * @param string|null $MissingData Data missing from the add-on.
     */
    public function __construct(
        string $AddOnType,
        ?float $Amount = null,
        ?string $AddOnDescription = null,
        ?\Knightar\StampsSoapClient\Type\ArrayOfArrayOfAddOnTypeV20 $RequiresAllOf = null,
        ?\Knightar\StampsSoapClient\Type\ArrayOfAddOnTypeV20 $ProhibitedWithAnyOf = null,
        ?string $MissingData = null
    ) {
        $this->Amount = $Amount;
        $this->AddOnType = $AddOnType;
        $this->AddOnDescription = $AddOnDescription;
        $this->RequiresAllOf = $RequiresAllOf;
        $this->ProhibitedWithAnyOf = $ProhibitedWithAnyOf;
        $this->MissingData = $MissingData;
    }

    /**
     * @return null | float
     */
    public function getAmount() : ?float
    {
        return $this->Amount;
    }

    /**
     * @param null | float $Amount
     * @return static
     */
    public function withAmount(?float $Amount) : static
    {
        $new = clone $this;
        $new->Amount = $Amount;

        return $new;
    }

    /**
     * @return 'US-A-INS' | 'US-A-COD' | 'US-A-DC' | 'US-A-SC' | 'US-A-COM' | 'US-A-CM' | 'US-A-RR' | 'US-A-RRM' | 'US-A-REG' | 'US-A-RD' | 'US-A-SH' | 'SC-A-INS' | 'SC-A-INSRM' | 'SC-A-HP' | 'US-A-SR' | 'US-A-NDW' | 'US-A-ESH' | 'US-A-NND' | 'US-A-RRE' | 'US-A-LANS' | 'US-A-LAWS' | 'US-A-HM' | 'US-A-CR' | 'US-A-1030' | 'US-A-ASR' | 'US-A-ASRD' | 'US-A-PR' | 'US-A-HFPU' | 'SC-A-POU' | 'CAR-A-SAT' | 'CAR-A-RES' | 'CAR-A-NSP' | 'CAR-A-ISR' | 'CAR-A-DSR' | 'CAR-A-ASR' | 'US-A-DDP' | 'US-A-POUR' | 'PG-A-INS' | 'CAR-A-DC' | 'CAR-A-SR' | 'CAR-A-INS' | 'CAR-A-IL' | 'CAR-A-POUR' | 'CAR-A-DDP'
     */
    public function getAddOnType() : string
    {
        return $this->AddOnType;
    }

    /**
     * @param 'US-A-INS' | 'US-A-COD' | 'US-A-DC' | 'US-A-SC' | 'US-A-COM' | 'US-A-CM' | 'US-A-RR' | 'US-A-RRM' | 'US-A-REG' | 'US-A-RD' | 'US-A-SH' | 'SC-A-INS' | 'SC-A-INSRM' | 'SC-A-HP' | 'US-A-SR' | 'US-A-NDW' | 'US-A-ESH' | 'US-A-NND' | 'US-A-RRE' | 'US-A-LANS' | 'US-A-LAWS' | 'US-A-HM' | 'US-A-CR' | 'US-A-1030' | 'US-A-ASR' | 'US-A-ASRD' | 'US-A-PR' | 'US-A-HFPU' | 'SC-A-POU' | 'CAR-A-SAT' | 'CAR-A-RES' | 'CAR-A-NSP' | 'CAR-A-ISR' | 'CAR-A-DSR' | 'CAR-A-ASR' | 'US-A-DDP' | 'US-A-POUR' | 'PG-A-INS' | 'CAR-A-DC' | 'CAR-A-SR' | 'CAR-A-INS' | 'CAR-A-IL' | 'CAR-A-POUR' | 'CAR-A-DDP' $AddOnType
     * @return static
     */
    public function withAddOnType(string $AddOnType) : static
    {
        $new = clone $this;
        $new->AddOnType = $AddOnType;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getAddOnDescription() : ?string
    {
        return $this->AddOnDescription;
    }

    /**
     * @param null | string $AddOnDescription
     * @return static
     */
    public function withAddOnDescription(?string $AddOnDescription) : static
    {
        $new = clone $this;
        $new->AddOnDescription = $AddOnDescription;

        return $new;
    }

    /**
     * @return null | \Knightar\StampsSoapClient\Type\ArrayOfArrayOfAddOnTypeV20
     */
    public function getRequiresAllOf() : ?\Knightar\StampsSoapClient\Type\ArrayOfArrayOfAddOnTypeV20
    {
        return $this->RequiresAllOf;
    }

    /**
     * @param null | \Knightar\StampsSoapClient\Type\ArrayOfArrayOfAddOnTypeV20 $RequiresAllOf
     * @return static
     */
    public function withRequiresAllOf(?\Knightar\StampsSoapClient\Type\ArrayOfArrayOfAddOnTypeV20 $RequiresAllOf) : static
    {
        $new = clone $this;
        $new->RequiresAllOf = $RequiresAllOf;

        return $new;
    }

    /**
     * @return null | \Knightar\StampsSoapClient\Type\ArrayOfAddOnTypeV20
     */
    public function getProhibitedWithAnyOf() : ?\Knightar\StampsSoapClient\Type\ArrayOfAddOnTypeV20
    {
        return $this->ProhibitedWithAnyOf;
    }

    /**
     * @param null | \Knightar\StampsSoapClient\Type\ArrayOfAddOnTypeV20 $ProhibitedWithAnyOf
     * @return static
     */
    public function withProhibitedWithAnyOf(?\Knightar\StampsSoapClient\Type\ArrayOfAddOnTypeV20 $ProhibitedWithAnyOf) : static
    {
        $new = clone $this;
        $new->ProhibitedWithAnyOf = $ProhibitedWithAnyOf;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getMissingData() : ?string
    {
        return $this->MissingData;
    }

    /**
     * @param null | string $MissingData
     * @return static
     */
    public function withMissingData(?string $MissingData) : static
    {
        $new = clone $this;
        $new->MissingData = $MissingData;

        return $new;
    }
}

