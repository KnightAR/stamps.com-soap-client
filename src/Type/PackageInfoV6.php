<?php

namespace Knightar\StampsSoapClient\Type;

class PackageInfoV6
{
    /**
     * @var 'Unknown' | 'Postcard' | 'Letter' | 'Large Envelope or Flat' | 'Thick Envelope' | 'Package' | 'Flat Rate Box' | 'Small Flat Rate Box' | 'Large Flat Rate Box' | 'Flat Rate Envelope' | 'Flat Rate Padded Envelope' | 'Large Package' | 'Oversized Package' | 'Regional Rate Box A' | 'Regional Rate Box B' | 'Legal Flat Rate Envelope' | 'Regional Rate Box C' | 'OpenAndDistribute Half Tray Box' | 'OpenAndDistribute Full Tray Box' | 'OpenAndDistribute EMM Tray Box' | 'OpenAndDistribute Flat Tub Tray Box' | 'Express Envelope' | 'Documents' | 'Envelope' | 'Pak' | '10 KG Box' | '25 KG Box' | 'Express Box Large' | 'Express Box Medium' | 'Express Box Small' | 'Tube' | 'One Rate Envelope' | 'One Rate Small Box' | 'One Rate Medium Box' | 'One Rate Large Box' | 'One Rate Extra Large Box' | 'One Rate Pak' | 'One Rate Tube' | 'Box'
     */
    private string $PackageType;

    /**
     * @var int
     */
    private int $NumberOfLabels;

    /**
     * @var null | float
     */
    private ?float $WeightLb = null;

    /**
     * @var null | float
     */
    private ?float $WeightOz = null;

    /**
     * @var null | 'Unknown' | 'None' | 'DDU' | 'ADC' | 'ASF' | 'NDC' | 'SCF' | 'Other'
     */
    private ?string $EntryFacility = null;

    /**
     * @var null | 'Unknown' | 'FiveDigit' | 'ThreeDigit' | 'NDC' | 'SCF' | 'MixedNDC' | 'Other'
     */
    private ?string $SortType = null;

    /**
     * @var null | 'Unknown' | 'MarketingMail' | 'Periodicals' | 'NewsPeriodicals' | 'BoundMedia' | 'ParcelSelect' | 'OtherPackageService'
     */
    private ?string $EnclosedServiceType = null;

    /**
     * @var null | 'Unknown' | 'Letters' | 'Flats' | 'Irregular Parcels' | 'Machinable Parcels' | 'Non-Machinable Parcels'
     */
    private ?string $EnclosedPackageType = null;

    /**
     * @return 'Unknown' | 'Postcard' | 'Letter' | 'Large Envelope or Flat' | 'Thick Envelope' | 'Package' | 'Flat Rate Box' | 'Small Flat Rate Box' | 'Large Flat Rate Box' | 'Flat Rate Envelope' | 'Flat Rate Padded Envelope' | 'Large Package' | 'Oversized Package' | 'Regional Rate Box A' | 'Regional Rate Box B' | 'Legal Flat Rate Envelope' | 'Regional Rate Box C' | 'OpenAndDistribute Half Tray Box' | 'OpenAndDistribute Full Tray Box' | 'OpenAndDistribute EMM Tray Box' | 'OpenAndDistribute Flat Tub Tray Box' | 'Express Envelope' | 'Documents' | 'Envelope' | 'Pak' | '10 KG Box' | '25 KG Box' | 'Express Box Large' | 'Express Box Medium' | 'Express Box Small' | 'Tube' | 'One Rate Envelope' | 'One Rate Small Box' | 'One Rate Medium Box' | 'One Rate Large Box' | 'One Rate Extra Large Box' | 'One Rate Pak' | 'One Rate Tube' | 'Box'
     */
    public function getPackageType() : string
    {
        return $this->PackageType;
    }

    /**
     * @param 'Unknown' | 'Postcard' | 'Letter' | 'Large Envelope or Flat' | 'Thick Envelope' | 'Package' | 'Flat Rate Box' | 'Small Flat Rate Box' | 'Large Flat Rate Box' | 'Flat Rate Envelope' | 'Flat Rate Padded Envelope' | 'Large Package' | 'Oversized Package' | 'Regional Rate Box A' | 'Regional Rate Box B' | 'Legal Flat Rate Envelope' | 'Regional Rate Box C' | 'OpenAndDistribute Half Tray Box' | 'OpenAndDistribute Full Tray Box' | 'OpenAndDistribute EMM Tray Box' | 'OpenAndDistribute Flat Tub Tray Box' | 'Express Envelope' | 'Documents' | 'Envelope' | 'Pak' | '10 KG Box' | '25 KG Box' | 'Express Box Large' | 'Express Box Medium' | 'Express Box Small' | 'Tube' | 'One Rate Envelope' | 'One Rate Small Box' | 'One Rate Medium Box' | 'One Rate Large Box' | 'One Rate Extra Large Box' | 'One Rate Pak' | 'One Rate Tube' | 'Box' $PackageType
     * @return static
     */
    public function withPackageType(string $PackageType) : static
    {
        $new = clone $this;
        $new->PackageType = $PackageType;

        return $new;
    }

    /**
     * @return int
     */
    public function getNumberOfLabels() : int
    {
        return $this->NumberOfLabels;
    }

    /**
     * @param int $NumberOfLabels
     * @return static
     */
    public function withNumberOfLabels(int $NumberOfLabels) : static
    {
        $new = clone $this;
        $new->NumberOfLabels = $NumberOfLabels;

        return $new;
    }

    /**
     * @return null | float
     */
    public function getWeightLb() : ?float
    {
        return $this->WeightLb;
    }

    /**
     * @param null | float $WeightLb
     * @return static
     */
    public function withWeightLb(?float $WeightLb) : static
    {
        $new = clone $this;
        $new->WeightLb = $WeightLb;

        return $new;
    }

    /**
     * @return null | float
     */
    public function getWeightOz() : ?float
    {
        return $this->WeightOz;
    }

    /**
     * @param null | float $WeightOz
     * @return static
     */
    public function withWeightOz(?float $WeightOz) : static
    {
        $new = clone $this;
        $new->WeightOz = $WeightOz;

        return $new;
    }

    /**
     * @return null | 'Unknown' | 'None' | 'DDU' | 'ADC' | 'ASF' | 'NDC' | 'SCF' | 'Other'
     */
    public function getEntryFacility() : ?string
    {
        return $this->EntryFacility;
    }

    /**
     * @param null | 'Unknown' | 'None' | 'DDU' | 'ADC' | 'ASF' | 'NDC' | 'SCF' | 'Other' $EntryFacility
     * @return static
     */
    public function withEntryFacility(?string $EntryFacility) : static
    {
        $new = clone $this;
        $new->EntryFacility = $EntryFacility;

        return $new;
    }

    /**
     * @return null | 'Unknown' | 'FiveDigit' | 'ThreeDigit' | 'NDC' | 'SCF' | 'MixedNDC' | 'Other'
     */
    public function getSortType() : ?string
    {
        return $this->SortType;
    }

    /**
     * @param null | 'Unknown' | 'FiveDigit' | 'ThreeDigit' | 'NDC' | 'SCF' | 'MixedNDC' | 'Other' $SortType
     * @return static
     */
    public function withSortType(?string $SortType) : static
    {
        $new = clone $this;
        $new->SortType = $SortType;

        return $new;
    }

    /**
     * @return null | 'Unknown' | 'MarketingMail' | 'Periodicals' | 'NewsPeriodicals' | 'BoundMedia' | 'ParcelSelect' | 'OtherPackageService'
     */
    public function getEnclosedServiceType() : ?string
    {
        return $this->EnclosedServiceType;
    }

    /**
     * @param null | 'Unknown' | 'MarketingMail' | 'Periodicals' | 'NewsPeriodicals' | 'BoundMedia' | 'ParcelSelect' | 'OtherPackageService' $EnclosedServiceType
     * @return static
     */
    public function withEnclosedServiceType(?string $EnclosedServiceType) : static
    {
        $new = clone $this;
        $new->EnclosedServiceType = $EnclosedServiceType;

        return $new;
    }

    /**
     * @return null | 'Unknown' | 'Letters' | 'Flats' | 'Irregular Parcels' | 'Machinable Parcels' | 'Non-Machinable Parcels'
     */
    public function getEnclosedPackageType() : ?string
    {
        return $this->EnclosedPackageType;
    }

    /**
     * @param null | 'Unknown' | 'Letters' | 'Flats' | 'Irregular Parcels' | 'Machinable Parcels' | 'Non-Machinable Parcels' $EnclosedPackageType
     * @return static
     */
    public function withEnclosedPackageType(?string $EnclosedPackageType) : static
    {
        $new = clone $this;
        $new->EnclosedPackageType = $EnclosedPackageType;

        return $new;
    }
}

