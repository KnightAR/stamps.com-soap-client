<?php

namespace Knightar\StampsSoapClient\Type;

use Phpro\SoapClient\Type\RequestInterface;

class RegisterAccount implements RequestInterface
{
    /**
     * @var string
     */
    private string $IntegrationID;

    /**
     * @var string
     */
    private string $UserName;

    /**
     * @var string
     */
    private string $Password;

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
     * @var \Knightar\StampsSoapClient\Type\Address
     */
    private \Knightar\StampsSoapClient\Type\Address $PhysicalAddress;

    /**
     * @var null | \Knightar\StampsSoapClient\Type\Address
     */
    private ?\Knightar\StampsSoapClient\Type\Address $MailingAddress = null;

    /**
     * @var \Knightar\StampsSoapClient\Type\MachineInfo
     */
    private \Knightar\StampsSoapClient\Type\MachineInfo $MachineInfo;

    /**
     * @var string
     */
    private string $Email;

    /**
     * @var 'Individual' | 'HomeOffice' | 'HomeBasedBusiness' | 'OfficeBasedBusiness'
     */
    private string $AccountType;

    /**
     * @var null | string
     */
    private ?string $PromoCode = null;

    /**
     * @var null | \Knightar\StampsSoapClient\Type\CreditCard
     */
    private ?\Knightar\StampsSoapClient\Type\CreditCard $CreditCard = null;

    /**
     * @var null | \Knightar\StampsSoapClient\Type\AchAccount
     */
    private ?\Knightar\StampsSoapClient\Type\AchAccount $AchAccount = null;

    /**
     * @var null | \Knightar\StampsSoapClient\Type\PPLAccount
     */
    private ?\Knightar\StampsSoapClient\Type\PPLAccount $PPL = null;

    /**
     * @var null | bool
     */
    private ?bool $SendEmail = null;

    /**
     * @var null | bool
     */
    private ?bool $ResetPasswordAfterRegistration = null;

    /**
     * @var null | string
     */
    private ?string $UserCurrency = null;

    /**
     * @var null | string
     */
    private ?string $IovationBlackBox = null;

    /**
     * @var string
     */
    private const CODEWORD_TYPE_UNDEFINED = 'Undefined';

    /**
     * @var string
     */
    private const CODEWORD_TYPE_MOTHERS_MAIDEN_NAME = 'MothersMaidenName';

    /**
     * @var string
     */
    private const CODEWORD_TYPE_PETS_NAME = 'PetsName';

    /**
     * @var string
     */
    private const CODEWORD_TYPE_BIRTH_CITY = 'BirthCity';

    /**
     * @var string
     */
    private const CODEWORD_TYPE_HIGH_SCHOOL_MASCOT = 'HighSchoolMascot';

    /**
     * @var string
     */
    private const CODEWORD_TYPE_FATHERS_BIRTHPLACE = 'FathersBirthplace';

    /**
     * @var string
     */
    private const CODEWORD_TYPE_STREET_NAME = 'StreetName';

    /**
     * @var string
     */
    private const CODEWORD_TYPE_FIRST_SCHOOLS_NAME = 'FirstSchoolsName';

    /**
     * @var string
     */
    private const CODEWORD_TYPE_FIRST_CARS_MAKE_MODEL = 'FirstCarsMakeModel';

    /**
     * @var string
     */
    private const CODEWORD_TYPE_LAST_4_SOCIAL_SECURITY_NUMBER = 'Last4SocialSecurityNumber';

    /**
     * @var string
     */
    private const CODEWORD_TYPE_LAST_4_DRIVERS_LICENSE = 'Last4DriversLicense';

    /**
     * @var string
     */
    private const ACCOUNT_TYPE_INDIVIDUAL = 'Individual';

    /**
     * @var string
     */
    private const ACCOUNT_TYPE_HOME_OFFICE = 'HomeOffice';

    /**
     * @var string
     */
    private const ACCOUNT_TYPE_HOME_BASED_BUSINESS = 'HomeBasedBusiness';

    /**
     * @var string
     */
    private const ACCOUNT_TYPE_OFFICE_BASED_BUSINESS = 'OfficeBasedBusiness';

    /**
     * Constructor
     *
     * @param string $IntegrationID
     * @param string $UserName
     * @param string $Password
     * @param \Knightar\StampsSoapClient\Type\Address $PhysicalAddress
     * @param \Knightar\StampsSoapClient\Type\MachineInfo $MachineInfo
     * @param string $Email
     * @param string $AccountType
     * @param null | string $Codeword1Type
     * @param null | string $Codeword1
     * @param null | string $Codeword2Type
     * @param null | string $Codeword2
     * @param null | \Knightar\StampsSoapClient\Type\Address $MailingAddress
     * @param null | string $PromoCode
     * @param null | \Knightar\StampsSoapClient\Type\CreditCard $CreditCard
     * @param null | \Knightar\StampsSoapClient\Type\AchAccount $AchAccount
     * @param null | \Knightar\StampsSoapClient\Type\PPLAccount $PPL
     * @param null | bool $SendEmail
     * @param null | bool $ResetPasswordAfterRegistration
     * @param null | string $UserCurrency
     * @param null | string $IovationBlackBox
     * @param null | mixed $Authenticator
     * @param null | mixed $Credentials
     */
    public function __construct(
        string                                      $IntegrationID,
        string                                      $UserName,
        string                                      $Password,
        \Knightar\StampsSoapClient\Type\Address     $PhysicalAddress,
        \Knightar\StampsSoapClient\Type\MachineInfo $MachineInfo,
        string                                      $Email,
        string                                      $AccountType,
        ?string                                     $Codeword1Type = null,
        ?string                                     $Codeword1 = null,
        ?string                                     $Codeword2Type = null,
        ?string                                     $Codeword2 = null,
        ?\Knightar\StampsSoapClient\Type\Address    $MailingAddress = null,
        ?string                                     $PromoCode = null,
        ?\Knightar\StampsSoapClient\Type\CreditCard $CreditCard = null,
        ?\Knightar\StampsSoapClient\Type\AchAccount $AchAccount = null,
        ?\Knightar\StampsSoapClient\Type\PPLAccount $PPL = null,
        ?bool                                       $SendEmail = null,
        ?bool                                       $ResetPasswordAfterRegistration = null,
        ?string                                     $UserCurrency = null,
        ?string                                     $IovationBlackBox = null
    )
    {
        $this->IntegrationID = $IntegrationID;
        $this->UserName = $UserName;
        $this->Password = $Password;
        $this->PhysicalAddress = $PhysicalAddress;
        $this->MachineInfo = $MachineInfo;
        $this->Email = $Email;
        $this->AccountType = $AccountType;
        $this->Codeword1Type = $Codeword1Type;
        $this->Codeword1 = $Codeword1;
        $this->Codeword2Type = $Codeword2Type;
        $this->Codeword2 = $Codeword2;
        $this->MailingAddress = $MailingAddress;
        $this->PromoCode = $PromoCode;
        $this->CreditCard = $CreditCard;
        $this->AchAccount = $AchAccount;
        $this->PPL = $PPL;
        $this->SendEmail = $SendEmail;
        $this->ResetPasswordAfterRegistration = $ResetPasswordAfterRegistration;
        $this->UserCurrency = $UserCurrency;
        $this->IovationBlackBox = $IovationBlackBox;
    }

    /**
     * @return string
     */
    public function getIntegrationID() : string
    {
        return $this->IntegrationID;
    }

    /**
     * @param string $IntegrationID
     * @return static
     */
    public function withIntegrationID(string $IntegrationID) : static
    {
        $new = clone $this;
        $new->IntegrationID = $IntegrationID;

        return $new;
    }

    /**
     * @return string
     */
    public function getUserName() : string
    {
        return $this->UserName;
    }

    /**
     * @param string $UserName
     * @return static
     */
    public function withUserName(string $UserName) : static
    {
        $new = clone $this;
        $new->UserName = $UserName;

        return $new;
    }

    /**
     * @return string
     */
    public function getPassword() : string
    {
        return $this->Password;
    }

    /**
     * @param string $Password
     * @return static
     */
    public function withPassword(string $Password) : static
    {
        $new = clone $this;
        $new->Password = $Password;

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

    /**
     * @return \Knightar\StampsSoapClient\Type\Address
     */
    public function getPhysicalAddress() : \Knightar\StampsSoapClient\Type\Address
    {
        return $this->PhysicalAddress;
    }

    /**
     * @param \Knightar\StampsSoapClient\Type\Address $PhysicalAddress
     * @return static
     */
    public function withPhysicalAddress(\Knightar\StampsSoapClient\Type\Address $PhysicalAddress) : static
    {
        $new = clone $this;
        $new->PhysicalAddress = $PhysicalAddress;

        return $new;
    }

    /**
     * @return null | \Knightar\StampsSoapClient\Type\Address
     */
    public function getMailingAddress() : ?\Knightar\StampsSoapClient\Type\Address
    {
        return $this->MailingAddress;
    }

    /**
     * @param null | \Knightar\StampsSoapClient\Type\Address $MailingAddress
     * @return static
     */
    public function withMailingAddress(?\Knightar\StampsSoapClient\Type\Address $MailingAddress) : static
    {
        $new = clone $this;
        $new->MailingAddress = $MailingAddress;

        return $new;
    }

    /**
     * @return \Knightar\StampsSoapClient\Type\MachineInfo
     */
    public function getMachineInfo() : \Knightar\StampsSoapClient\Type\MachineInfo
    {
        return $this->MachineInfo;
    }

    /**
     * @param \Knightar\StampsSoapClient\Type\MachineInfo $MachineInfo
     * @return static
     */
    public function withMachineInfo(\Knightar\StampsSoapClient\Type\MachineInfo $MachineInfo) : static
    {
        $new = clone $this;
        $new->MachineInfo = $MachineInfo;

        return $new;
    }

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
     * @return 'Individual' | 'HomeOffice' | 'HomeBasedBusiness' | 'OfficeBasedBusiness'
     */
    public function getAccountType() : string
    {
        return $this->AccountType;
    }

    /**
     * @param 'Individual' | 'HomeOffice' | 'HomeBasedBusiness' | 'OfficeBasedBusiness' $AccountType
     * @return static
     */
    public function withAccountType(string $AccountType) : static
    {
        $new = clone $this;
        $new->AccountType = $AccountType;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getPromoCode() : ?string
    {
        return $this->PromoCode;
    }

    /**
     * @param null | string $PromoCode
     * @return static
     */
    public function withPromoCode(?string $PromoCode) : static
    {
        $new = clone $this;
        $new->PromoCode = $PromoCode;

        return $new;
    }

    /**
     * @return null | \Knightar\StampsSoapClient\Type\CreditCard
     */
    public function getCreditCard() : ?\Knightar\StampsSoapClient\Type\CreditCard
    {
        return $this->CreditCard;
    }

    /**
     * @param null | \Knightar\StampsSoapClient\Type\CreditCard $CreditCard
     * @return static
     */
    public function withCreditCard(?\Knightar\StampsSoapClient\Type\CreditCard $CreditCard) : static
    {
        $new = clone $this;
        $new->CreditCard = $CreditCard;

        return $new;
    }

    /**
     * @return null | \Knightar\StampsSoapClient\Type\AchAccount
     */
    public function getAchAccount() : ?\Knightar\StampsSoapClient\Type\AchAccount
    {
        return $this->AchAccount;
    }

    /**
     * @param null | \Knightar\StampsSoapClient\Type\AchAccount $AchAccount
     * @return static
     */
    public function withAchAccount(?\Knightar\StampsSoapClient\Type\AchAccount $AchAccount) : static
    {
        $new = clone $this;
        $new->AchAccount = $AchAccount;

        return $new;
    }

    /**
     * @return null | \Knightar\StampsSoapClient\Type\PPLAccount
     */
    public function getPPL() : ?\Knightar\StampsSoapClient\Type\PPLAccount
    {
        return $this->PPL;
    }

    /**
     * @param null | \Knightar\StampsSoapClient\Type\PPLAccount $PPL
     * @return static
     */
    public function withPPL(?\Knightar\StampsSoapClient\Type\PPLAccount $PPL) : static
    {
        $new = clone $this;
        $new->PPL = $PPL;

        return $new;
    }

    /**
     * @return null | bool
     */
    public function getSendEmail() : ?bool
    {
        return $this->SendEmail;
    }

    /**
     * @param null | bool $SendEmail
     * @return static
     */
    public function withSendEmail(?bool $SendEmail) : static
    {
        $new = clone $this;
        $new->SendEmail = $SendEmail;

        return $new;
    }

    /**
     * @return null | bool
     */
    public function getResetPasswordAfterRegistration() : ?bool
    {
        return $this->ResetPasswordAfterRegistration;
    }

    /**
     * @param null | bool $ResetPasswordAfterRegistration
     * @return static
     */
    public function withResetPasswordAfterRegistration(?bool $ResetPasswordAfterRegistration) : static
    {
        $new = clone $this;
        $new->ResetPasswordAfterRegistration = $ResetPasswordAfterRegistration;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getUserCurrency() : ?string
    {
        return $this->UserCurrency;
    }

    /**
     * @param null | string $UserCurrency
     * @return static
     */
    public function withUserCurrency(?string $UserCurrency) : static
    {
        $new = clone $this;
        $new->UserCurrency = $UserCurrency;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getIovationBlackBox() : ?string
    {
        return $this->IovationBlackBox;
    }

    /**
     * @param null | string $IovationBlackBox
     * @return static
     */
    public function withIovationBlackBox(?string $IovationBlackBox) : static
    {
        $new = clone $this;
        $new->IovationBlackBox = $IovationBlackBox;

        return $new;
    }
}

