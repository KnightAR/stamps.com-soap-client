<?php

namespace Knightar\StampsSoapClient\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SetCodeWords implements RequestInterface
{
    /**
     * @var null | string
     */
    private ?string $Authenticator = null;

    /**
     * @var null | \Knightar\StampsSoapClient\Type\Credentials
     */
    private ?\Knightar\StampsSoapClient\Type\Credentials $Credentials = null;

    /**
     * @var null | 'Undefined' | 'MothersMaidenName' | 'PetsName' | 'BirthCity' | 'HighSchoolMascot' | 'FathersBirthplace' | 'StreetName' | 'FirstSchoolsName' | 'FirstCarsMakeModel' | 'Last4SocialSecurityNumber' | 'Last4DriversLicense'
     */
    private ?string $Codeword1Type = null;

    /**
     * @var null | string
     */
    private ?string $Codeword1 = null;

    /**
     * @var null | 'Undefined' | 'MothersMaidenName' | 'PetsName' | 'BirthCity' | 'HighSchoolMascot' | 'FathersBirthplace' | 'StreetName' | 'FirstSchoolsName' | 'FirstCarsMakeModel' | 'Last4SocialSecurityNumber' | 'Last4DriversLicense'
     */
    private ?string $Codeword2Type = null;

    /**
     * @var null | string
     */
    private ?string $Codeword2 = null;

    /**
     * @param null | string | 'Undefined' | 'MothersMaidenName' | 'PetsName' | 'BirthCity' | 'HighSchoolMascot' | 'FathersBirthplace' | 'StreetName' | 'FirstSchoolsName' | 'FirstCarsMakeModel' | 'Last4SocialSecurityNumber' | 'Last4DriversLicense'  $Codeword1Type
     * @param null | string $Codeword1
     * @param null | string | 'Undefined' | 'MothersMaidenName' | 'PetsName' | 'BirthCity' | 'HighSchoolMascot' | 'FathersBirthplace' | 'StreetName' | 'FirstSchoolsName' | 'FirstCarsMakeModel' | 'Last4SocialSecurityNumber' | 'Last4DriversLicense'  $Codeword2Type
     * @param null | string $Codeword2
     * @param null | \Knightar\StampsSoapClient\Type\Credentials $Credentials
     * @param null | string $Authenticator
     */
    public function __construct(
        ?string                                      $Codeword1Type = null,
        ?string                                      $Codeword1 = null,
        ?string                                      $Codeword2Type = null,
        ?string                                      $Codeword2 = null,
        ?\Knightar\StampsSoapClient\Type\Credentials $Credentials = null,
        ?string                                      $Authenticator = null
    )
    {
        $this->Authenticator = $Authenticator;
        $this->Credentials = $Credentials;
        $this->Codeword1Type = $Codeword1Type;
        $this->Codeword1 = $Codeword1;
        $this->Codeword2Type = $Codeword2Type;
        $this->Codeword2 = $Codeword2;
    }

    public const CODEWORD_TYPE_UNDEFINED = 'Undefined';
    public const CODEWORD_TYPE_MOTHERS_MAIDEN_NAME = 'MothersMaidenName';
    public const CODEWORD_TYPE_PETS_NAME = 'PetsName';
    public const CODEWORD_TYPE_BIRTH_CITY = 'BirthCity';
    public const CODEWORD_TYPE_HIGH_SCHOOL_MASCOT = 'HighSchoolMascot';
    public const CODEWORD_TYPE_FATHERS_BIRTHPLACE = 'FathersBirthplace';
    public const CODEWORD_TYPE_STREET_NAME = 'StreetName';
    public const CODEWORD_TYPE_FIRST_SCHOOLS_NAME = 'FirstSchoolsName';
    public const CODEWORD_TYPE_FIRST_CARS_MAKE_MODEL = 'FirstCarsMakeModel';
    public const CODEWORD_TYPE_LAST_4_SOCIAL_SECURITY_NUMBER = 'Last4SocialSecurityNumber';
    public const CODEWORD_TYPE_LAST_4_DRIVERS_LICENSE = 'Last4DriversLicense';

    /**
     * @return null | string
     */
    public function getAuthenticator() : ?string
    {
        return $this->Authenticator;
    }

    /**
     * @param null | string $Authenticator
     * @return static
     */
    public function withAuthenticator(?string $Authenticator) : static
    {
        $new = clone $this;
        $new->Authenticator = $Authenticator;

        return $new;
    }

    /**
     * @return null | \Knightar\StampsSoapClient\Type\Credentials
     */
    public function getCredentials() : ?\Knightar\StampsSoapClient\Type\Credentials
    {
        return $this->Credentials;
    }

    /**
     * @param null | \Knightar\StampsSoapClient\Type\Credentials $Credentials
     * @return static
     */
    public function withCredentials(?\Knightar\StampsSoapClient\Type\Credentials $Credentials) : static
    {
        $new = clone $this;
        $new->Credentials = $Credentials;

        return $new;
    }

    /**
     * @return null | 'Undefined' | 'MothersMaidenName' | 'PetsName' | 'BirthCity' | 'HighSchoolMascot' | 'FathersBirthplace' | 'StreetName' | 'FirstSchoolsName' | 'FirstCarsMakeModel' | 'Last4SocialSecurityNumber' | 'Last4DriversLicense'
     */
    public function getCodeword1Type() : ?string
    {
        return $this->Codeword1Type;
    }

    /**
     * @param null | 'Undefined' | 'MothersMaidenName' | 'PetsName' | 'BirthCity' | 'HighSchoolMascot' | 'FathersBirthplace' | 'StreetName' | 'FirstSchoolsName' | 'FirstCarsMakeModel' | 'Last4SocialSecurityNumber' | 'Last4DriversLicense' $Codeword1Type
     * @return static
     */
    public function withCodeword1Type(?string $Codeword1Type) : static
    {
        $new = clone $this;
        $new->Codeword1Type = $Codeword1Type;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getCodeword1() : ?string
    {
        return $this->Codeword1;
    }

    /**
     * @param null | string $Codeword1
     * @return static
     */
    public function withCodeword1(?string $Codeword1) : static
    {
        $new = clone $this;
        $new->Codeword1 = $Codeword1;

        return $new;
    }

    /**
     * @return null | 'Undefined' | 'MothersMaidenName' | 'PetsName' | 'BirthCity' | 'HighSchoolMascot' | 'FathersBirthplace' | 'StreetName' | 'FirstSchoolsName' | 'FirstCarsMakeModel' | 'Last4SocialSecurityNumber' | 'Last4DriversLicense'
     */
    public function getCodeword2Type() : ?string
    {
        return $this->Codeword2Type;
    }

    /**
     * @param null | 'Undefined' | 'MothersMaidenName' | 'PetsName' | 'BirthCity' | 'HighSchoolMascot' | 'FathersBirthplace' | 'StreetName' | 'FirstSchoolsName' | 'FirstCarsMakeModel' | 'Last4SocialSecurityNumber' | 'Last4DriversLicense' $Codeword2Type
     * @return static
     */
    public function withCodeword2Type(?string $Codeword2Type) : static
    {
        $new = clone $this;
        $new->Codeword2Type = $Codeword2Type;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getCodeword2() : ?string
    {
        return $this->Codeword2;
    }

    /**
     * @param null | string $Codeword2
     * @return static
     */
    public function withCodeword2(?string $Codeword2) : static
    {
        $new = clone $this;
        $new->Codeword2 = $Codeword2;

        return $new;
    }
}

