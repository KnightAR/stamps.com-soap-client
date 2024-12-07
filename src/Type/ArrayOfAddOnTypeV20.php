<?php

namespace Knightar\StampsSoapClient\Type;

class ArrayOfAddOnTypeV20
{
    /**
     * @var array<int<0,max>, 'US-A-INS' | 'US-A-COD' | 'US-A-DC' | 'US-A-SC' | 'US-A-COM' | 'US-A-CM' | 'US-A-RR' | 'US-A-RRM' | 'US-A-REG' | 'US-A-RD' | 'US-A-SH' | 'SC-A-INS' | 'SC-A-INSRM' | 'SC-A-HP' | 'US-A-SR' | 'US-A-NDW' | 'US-A-ESH' | 'US-A-NND' | 'US-A-RRE' | 'US-A-LANS' | 'US-A-LAWS' | 'US-A-HM' | 'US-A-CR' | 'US-A-1030' | 'US-A-ASR' | 'US-A-ASRD' | 'US-A-PR' | 'US-A-HFPU' | 'SC-A-POU' | 'CAR-A-SAT' | 'CAR-A-RES' | 'CAR-A-NSP' | 'CAR-A-ISR' | 'CAR-A-DSR' | 'CAR-A-ASR' | 'US-A-DDP' | 'US-A-POUR' | 'PG-A-INS' | 'CAR-A-DC' | 'CAR-A-SR' | 'CAR-A-INS' | 'CAR-A-IL' | 'CAR-A-POUR' | 'CAR-A-DDP'>
     */
    private array $AddOnTypeV20;

    /**
     * @return array<int<0,max>, 'US-A-INS' | 'US-A-COD' | 'US-A-DC' | 'US-A-SC' | 'US-A-COM' | 'US-A-CM' | 'US-A-RR' | 'US-A-RRM' | 'US-A-REG' | 'US-A-RD' | 'US-A-SH' | 'SC-A-INS' | 'SC-A-INSRM' | 'SC-A-HP' | 'US-A-SR' | 'US-A-NDW' | 'US-A-ESH' | 'US-A-NND' | 'US-A-RRE' | 'US-A-LANS' | 'US-A-LAWS' | 'US-A-HM' | 'US-A-CR' | 'US-A-1030' | 'US-A-ASR' | 'US-A-ASRD' | 'US-A-PR' | 'US-A-HFPU' | 'SC-A-POU' | 'CAR-A-SAT' | 'CAR-A-RES' | 'CAR-A-NSP' | 'CAR-A-ISR' | 'CAR-A-DSR' | 'CAR-A-ASR' | 'US-A-DDP' | 'US-A-POUR' | 'PG-A-INS' | 'CAR-A-DC' | 'CAR-A-SR' | 'CAR-A-INS' | 'CAR-A-IL' | 'CAR-A-POUR' | 'CAR-A-DDP'>
     */
    public function getAddOnTypeV20() : array
    {
        return $this->AddOnTypeV20;
    }

    /**
     * @param array<int<0,max>, 'US-A-INS' | 'US-A-COD' | 'US-A-DC' | 'US-A-SC' | 'US-A-COM' | 'US-A-CM' | 'US-A-RR' | 'US-A-RRM' | 'US-A-REG' | 'US-A-RD' | 'US-A-SH' | 'SC-A-INS' | 'SC-A-INSRM' | 'SC-A-HP' | 'US-A-SR' | 'US-A-NDW' | 'US-A-ESH' | 'US-A-NND' | 'US-A-RRE' | 'US-A-LANS' | 'US-A-LAWS' | 'US-A-HM' | 'US-A-CR' | 'US-A-1030' | 'US-A-ASR' | 'US-A-ASRD' | 'US-A-PR' | 'US-A-HFPU' | 'SC-A-POU' | 'CAR-A-SAT' | 'CAR-A-RES' | 'CAR-A-NSP' | 'CAR-A-ISR' | 'CAR-A-DSR' | 'CAR-A-ASR' | 'US-A-DDP' | 'US-A-POUR' | 'PG-A-INS' | 'CAR-A-DC' | 'CAR-A-SR' | 'CAR-A-INS' | 'CAR-A-IL' | 'CAR-A-POUR' | 'CAR-A-DDP'> $AddOnTypeV20
     * @return static
     */
    public function withAddOnTypeV20(array $AddOnTypeV20) : static
    {
        $new = clone $this;
        $new->AddOnTypeV20 = $AddOnTypeV20;

        return $new;
    }
}

