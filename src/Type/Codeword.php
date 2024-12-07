<?php

namespace Knightar\StampsSoapClient\Type;

class Codeword
{
    /**
     * @var 'Undefined' | 'MothersMaidenName' | 'PetsName' | 'BirthCity' | 'HighSchoolMascot' | 'FathersBirthplace' | 'StreetName' | 'FirstSchoolsName' | 'FirstCarsMakeModel' | 'Last4SocialSecurityNumber' | 'Last4DriversLicense'
     */
    private string $CodewordType;

    /**
     * @var int
     */
    private int $Value;

    /**
     * @var string
     */
    private string $Description;

    /**
     * @return 'Undefined' | 'MothersMaidenName' | 'PetsName' | 'BirthCity' | 'HighSchoolMascot' | 'FathersBirthplace' | 'StreetName' | 'FirstSchoolsName' | 'FirstCarsMakeModel' | 'Last4SocialSecurityNumber' | 'Last4DriversLicense'
     */
    public function getCodewordType() : string
    {
        return $this->CodewordType;
    }

    /**
     * @param 'Undefined' | 'MothersMaidenName' | 'PetsName' | 'BirthCity' | 'HighSchoolMascot' | 'FathersBirthplace' | 'StreetName' | 'FirstSchoolsName' | 'FirstCarsMakeModel' | 'Last4SocialSecurityNumber' | 'Last4DriversLicense' $CodewordType
     * @return static
     */
    public function withCodewordType(string $CodewordType) : static
    {
        $new = clone $this;
        $new->CodewordType = $CodewordType;

        return $new;
    }

    /**
     * @return int
     */
    public function getValue() : int
    {
        return $this->Value;
    }

    /**
     * @param int $Value
     * @return static
     */
    public function withValue(int $Value) : static
    {
        $new = clone $this;
        $new->Value = $Value;

        return $new;
    }

    /**
     * @return string
     */
    public function getDescription() : string
    {
        return $this->Description;
    }

    /**
     * @param string $Description
     * @return static
     */
    public function withDescription(string $Description) : static
    {
        $new = clone $this;
        $new->Description = $Description;

        return $new;
    }
}

