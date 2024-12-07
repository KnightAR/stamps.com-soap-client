<?php

namespace Knightar\StampsSoapClient\Type;

class Address
{
    /**
     * @var null | string
     */
    private ?string $FullName = null;

    /**
     * @var null | string
     */
    private ?string $NamePrefix = null;

    /**
     * @var null | string
     */
    private ?string $FirstName = null;

    /**
     * @var null | string
     */
    private ?string $MiddleName = null;

    /**
     * @var null | string
     */
    private ?string $LastName = null;

    /**
     * @var null | string
     */
    private ?string $NameSuffix = null;

    /**
     * @var null | string
     */
    private ?string $Title = null;

    /**
     * @var null | string
     */
    private ?string $Department = null;

    /**
     * @var null | string
     */
    private ?string $Company = null;

    /**
     * @var null | string
     */
    private ?string $Address1 = null;

    /**
     * @var null | string
     */
    private ?string $Address2 = null;

    /**
     * @var null | string
     */
    private ?string $Address3 = null;

    /**
     * @var null | string
     */
    private ?string $City = null;

    /**
     * @var null | string
     */
    private ?string $State = null;

    /**
     * @var null | string
     */
    private ?string $ZIPCode = null;

    /**
     * @var null | string
     */
    private ?string $ZIPCodeAddOn = null;

    /**
     * @var null | string
     */
    private ?string $DPB = null;

    /**
     * @var null | string
     */
    private ?string $CheckDigit = null;

    /**
     * @var null | string
     */
    private ?string $Province = null;

    /**
     * @var null | string
     */
    private ?string $PostalCode = null;

    /**
     * @var null | string
     */
    private ?string $Country = null;

    /**
     * @var null | string
     */
    private ?string $Urbanization = null;

    /**
     * @var null | string
     */
    private ?string $PhoneNumber = null;

    /**
     * @var null | string
     */
    private ?string $Extension = null;

    /**
     * @var null | string
     */
    private ?string $CleanseHash = null;

    /**
     * @var null | string
     */
    private ?string $OverrideHash = null;

    /**
     * @var null | string
     */
    private ?string $EmailAddress = null;

    /**
     * @var null | string
     */
    private ?string $FullAddress = null;

    /**
     * @return null | string
     */
    public function getFullName() : ?string
    {
        return $this->FullName;
    }

    /**
     * @param null | string $FullName
     * @return static
     */
    public function withFullName(?string $FullName) : static
    {
        $new = clone $this;
        $new->FullName = $FullName;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getNamePrefix() : ?string
    {
        return $this->NamePrefix;
    }

    /**
     * @param null | string $NamePrefix
     * @return static
     */
    public function withNamePrefix(?string $NamePrefix) : static
    {
        $new = clone $this;
        $new->NamePrefix = $NamePrefix;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getFirstName() : ?string
    {
        return $this->FirstName;
    }

    /**
     * @param null | string $FirstName
     * @return static
     */
    public function withFirstName(?string $FirstName) : static
    {
        $new = clone $this;
        $new->FirstName = $FirstName;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getMiddleName() : ?string
    {
        return $this->MiddleName;
    }

    /**
     * @param null | string $MiddleName
     * @return static
     */
    public function withMiddleName(?string $MiddleName) : static
    {
        $new = clone $this;
        $new->MiddleName = $MiddleName;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getLastName() : ?string
    {
        return $this->LastName;
    }

    /**
     * @param null | string $LastName
     * @return static
     */
    public function withLastName(?string $LastName) : static
    {
        $new = clone $this;
        $new->LastName = $LastName;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getNameSuffix() : ?string
    {
        return $this->NameSuffix;
    }

    /**
     * @param null | string $NameSuffix
     * @return static
     */
    public function withNameSuffix(?string $NameSuffix) : static
    {
        $new = clone $this;
        $new->NameSuffix = $NameSuffix;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getTitle() : ?string
    {
        return $this->Title;
    }

    /**
     * @param null | string $Title
     * @return static
     */
    public function withTitle(?string $Title) : static
    {
        $new = clone $this;
        $new->Title = $Title;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getDepartment() : ?string
    {
        return $this->Department;
    }

    /**
     * @param null | string $Department
     * @return static
     */
    public function withDepartment(?string $Department) : static
    {
        $new = clone $this;
        $new->Department = $Department;

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
    public function getAddress1() : ?string
    {
        return $this->Address1;
    }

    /**
     * @param null | string $Address1
     * @return static
     */
    public function withAddress1(?string $Address1) : static
    {
        $new = clone $this;
        $new->Address1 = $Address1;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getAddress2() : ?string
    {
        return $this->Address2;
    }

    /**
     * @param null | string $Address2
     * @return static
     */
    public function withAddress2(?string $Address2) : static
    {
        $new = clone $this;
        $new->Address2 = $Address2;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getAddress3() : ?string
    {
        return $this->Address3;
    }

    /**
     * @param null | string $Address3
     * @return static
     */
    public function withAddress3(?string $Address3) : static
    {
        $new = clone $this;
        $new->Address3 = $Address3;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getCity() : ?string
    {
        return $this->City;
    }

    /**
     * @param null | string $City
     * @return static
     */
    public function withCity(?string $City) : static
    {
        $new = clone $this;
        $new->City = $City;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getState() : ?string
    {
        return $this->State;
    }

    /**
     * @param null | string $State
     * @return static
     */
    public function withState(?string $State) : static
    {
        $new = clone $this;
        $new->State = $State;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getZIPCode() : ?string
    {
        return $this->ZIPCode;
    }

    /**
     * @param null | string $ZIPCode
     * @return static
     */
    public function withZIPCode(?string $ZIPCode) : static
    {
        $new = clone $this;
        $new->ZIPCode = $ZIPCode;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getZIPCodeAddOn() : ?string
    {
        return $this->ZIPCodeAddOn;
    }

    /**
     * @param null | string $ZIPCodeAddOn
     * @return static
     */
    public function withZIPCodeAddOn(?string $ZIPCodeAddOn) : static
    {
        $new = clone $this;
        $new->ZIPCodeAddOn = $ZIPCodeAddOn;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getDPB() : ?string
    {
        return $this->DPB;
    }

    /**
     * @param null | string $DPB
     * @return static
     */
    public function withDPB(?string $DPB) : static
    {
        $new = clone $this;
        $new->DPB = $DPB;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getCheckDigit() : ?string
    {
        return $this->CheckDigit;
    }

    /**
     * @param null | string $CheckDigit
     * @return static
     */
    public function withCheckDigit(?string $CheckDigit) : static
    {
        $new = clone $this;
        $new->CheckDigit = $CheckDigit;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getProvince() : ?string
    {
        return $this->Province;
    }

    /**
     * @param null | string $Province
     * @return static
     */
    public function withProvince(?string $Province) : static
    {
        $new = clone $this;
        $new->Province = $Province;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getPostalCode() : ?string
    {
        return $this->PostalCode;
    }

    /**
     * @param null | string $PostalCode
     * @return static
     */
    public function withPostalCode(?string $PostalCode) : static
    {
        $new = clone $this;
        $new->PostalCode = $PostalCode;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getCountry() : ?string
    {
        return $this->Country;
    }

    /**
     * @param null | string $Country
     * @return static
     */
    public function withCountry(?string $Country) : static
    {
        $new = clone $this;
        $new->Country = $Country;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getUrbanization() : ?string
    {
        return $this->Urbanization;
    }

    /**
     * @param null | string $Urbanization
     * @return static
     */
    public function withUrbanization(?string $Urbanization) : static
    {
        $new = clone $this;
        $new->Urbanization = $Urbanization;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getPhoneNumber() : ?string
    {
        return $this->PhoneNumber;
    }

    /**
     * @param null | string $PhoneNumber
     * @return static
     */
    public function withPhoneNumber(?string $PhoneNumber) : static
    {
        $new = clone $this;
        $new->PhoneNumber = $PhoneNumber;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getExtension() : ?string
    {
        return $this->Extension;
    }

    /**
     * @param null | string $Extension
     * @return static
     */
    public function withExtension(?string $Extension) : static
    {
        $new = clone $this;
        $new->Extension = $Extension;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getCleanseHash() : ?string
    {
        return $this->CleanseHash;
    }

    /**
     * @param null | string $CleanseHash
     * @return static
     */
    public function withCleanseHash(?string $CleanseHash) : static
    {
        $new = clone $this;
        $new->CleanseHash = $CleanseHash;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getOverrideHash() : ?string
    {
        return $this->OverrideHash;
    }

    /**
     * @param null | string $OverrideHash
     * @return static
     */
    public function withOverrideHash(?string $OverrideHash) : static
    {
        $new = clone $this;
        $new->OverrideHash = $OverrideHash;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getEmailAddress() : ?string
    {
        return $this->EmailAddress;
    }

    /**
     * @param null | string $EmailAddress
     * @return static
     */
    public function withEmailAddress(?string $EmailAddress) : static
    {
        $new = clone $this;
        $new->EmailAddress = $EmailAddress;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getFullAddress() : ?string
    {
        return $this->FullAddress;
    }

    /**
     * @param null | string $FullAddress
     * @return static
     */
    public function withFullAddress(?string $FullAddress) : static
    {
        $new = clone $this;
        $new->FullAddress = $FullAddress;

        return $new;
    }
}

