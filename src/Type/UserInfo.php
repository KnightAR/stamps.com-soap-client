<?php

namespace Knightar\StampsSoapClient\Type;

class UserInfo
{
    /**
     * @var string
     */
    private string $custId;

    /**
     * @var string
     */
    private string $firstName;

    /**
     * @var string
     */
    private string $lastName;

    /**
     * @var string
     */
    private string $company;

    /**
     * @var string
     */
    private string $address1;

    /**
     * @var string
     */
    private string $address2;

    /**
     * @var string
     */
    private string $city;

    /**
     * @var string
     */
    private string $state;

    /**
     * @var string
     */
    private string $zip;

    /**
     * @var string
     */
    private string $phone;

    /**
     * @var string
     */
    private string $email;

    /**
     * @var 'Stamps' | 'ShipWorks' | 'ShipStation' | 'Endicia' | 'GlobalPost' | 'ShippingEasy' | 'ShipEngine' | 'CNSBP'
     */
    private string $Merchant;

    /**
     * @return string
     */
    public function getCustId() : string
    {
        return $this->custId;
    }

    /**
     * @param string $custId
     * @return static
     */
    public function withCustId(string $custId) : static
    {
        $new = clone $this;
        $new->custId = $custId;

        return $new;
    }

    /**
     * @return string
     */
    public function getFirstName() : string
    {
        return $this->firstName;
    }

    /**
     * @param string $firstName
     * @return static
     */
    public function withFirstName(string $firstName) : static
    {
        $new = clone $this;
        $new->firstName = $firstName;

        return $new;
    }

    /**
     * @return string
     */
    public function getLastName() : string
    {
        return $this->lastName;
    }

    /**
     * @param string $lastName
     * @return static
     */
    public function withLastName(string $lastName) : static
    {
        $new = clone $this;
        $new->lastName = $lastName;

        return $new;
    }

    /**
     * @return string
     */
    public function getCompany() : string
    {
        return $this->company;
    }

    /**
     * @param string $company
     * @return static
     */
    public function withCompany(string $company) : static
    {
        $new = clone $this;
        $new->company = $company;

        return $new;
    }

    /**
     * @return string
     */
    public function getAddress1() : string
    {
        return $this->address1;
    }

    /**
     * @param string $address1
     * @return static
     */
    public function withAddress1(string $address1) : static
    {
        $new = clone $this;
        $new->address1 = $address1;

        return $new;
    }

    /**
     * @return string
     */
    public function getAddress2() : string
    {
        return $this->address2;
    }

    /**
     * @param string $address2
     * @return static
     */
    public function withAddress2(string $address2) : static
    {
        $new = clone $this;
        $new->address2 = $address2;

        return $new;
    }

    /**
     * @return string
     */
    public function getCity() : string
    {
        return $this->city;
    }

    /**
     * @param string $city
     * @return static
     */
    public function withCity(string $city) : static
    {
        $new = clone $this;
        $new->city = $city;

        return $new;
    }

    /**
     * @return string
     */
    public function getState() : string
    {
        return $this->state;
    }

    /**
     * @param string $state
     * @return static
     */
    public function withState(string $state) : static
    {
        $new = clone $this;
        $new->state = $state;

        return $new;
    }

    /**
     * @return string
     */
    public function getZip() : string
    {
        return $this->zip;
    }

    /**
     * @param string $zip
     * @return static
     */
    public function withZip(string $zip) : static
    {
        $new = clone $this;
        $new->zip = $zip;

        return $new;
    }

    /**
     * @return string
     */
    public function getPhone() : string
    {
        return $this->phone;
    }

    /**
     * @param string $phone
     * @return static
     */
    public function withPhone(string $phone) : static
    {
        $new = clone $this;
        $new->phone = $phone;

        return $new;
    }

    /**
     * @return string
     */
    public function getEmail() : string
    {
        return $this->email;
    }

    /**
     * @param string $email
     * @return static
     */
    public function withEmail(string $email) : static
    {
        $new = clone $this;
        $new->email = $email;

        return $new;
    }

    /**
     * @return 'Stamps' | 'ShipWorks' | 'ShipStation' | 'Endicia' | 'GlobalPost' | 'ShippingEasy' | 'ShipEngine' | 'CNSBP'
     */
    public function getMerchant() : string
    {
        return $this->Merchant;
    }

    /**
     * @param 'Stamps' | 'ShipWorks' | 'ShipStation' | 'Endicia' | 'GlobalPost' | 'ShippingEasy' | 'ShipEngine' | 'CNSBP' $Merchant
     * @return static
     */
    public function withMerchant(string $Merchant) : static
    {
        $new = clone $this;
        $new->Merchant = $Merchant;

        return $new;
    }
}

