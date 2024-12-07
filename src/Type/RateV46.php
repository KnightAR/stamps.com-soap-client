<?php

namespace Knightar\StampsSoapClient\Type;

class RateV46
{
    /**
     * @var \Knightar\StampsSoapClient\Type\Address
     */
    private \Knightar\StampsSoapClient\Type\Address $From;

    /**
     * @var \Knightar\StampsSoapClient\Type\Address
     */
    private \Knightar\StampsSoapClient\Type\Address $To;

    /**
     * @var null | float
     */
    private ?float $Amount = null;

    /**
     * @var null | float
     */
    private ?float $MaxAmount = null;

    /**
     * @var null | 'Unknown' | 'US-FC' | 'US-PM' | 'US-XM' | 'US-MM' | 'US-BP' | 'US-LM' | 'US-EMI' | 'US-PMI' | 'US-FCI' | 'US-CM' | 'US-PS' | 'DHL-PE' | 'DHL-PG' | 'DHL-BPME' | 'DHL-BPMG' | 'DHL-MPE' | 'DHL-MPG' | 'AS-IPA' | 'AS-ISAL' | 'AS-EPKT' | 'DHL-PIPA' | 'GG-IPA' | 'GG-ISAL' | 'GG-EPKT' | 'IBC-IPA' | 'IBC-ISAL' | 'IBC-EPKT' | 'RRD-IPA' | 'RRD-ISAL' | 'RRD-EPKT' | 'AS-GNRC' | 'GG-GNRC' | 'RRD-GNRC' | 'SC-GPE' | 'SC-GPP' | 'SC-GPESS' | 'SC-GPPSS' | 'DHL-EWW' | 'FX-GD' | 'FX-HD' | 'FX-2D' | 'FX-ES' | 'FX-SO' | 'FX-PO' | 'FX-GDI' | 'FX-EI' | 'FX-PI' | 'SC-GPLSS' | 'US-RG' | 'SC-GPL' | 'UPS-NDAE' | 'UPS-NDA' | 'UPS-NDAS' | 'UPS-2DAA' | 'UPS-2DA' | 'UPS-3DS' | 'UPS-GD' | 'UPS-SD' | 'UPS-WES' | 'UPS-WESP' | 'UPS-WED' | 'UPS-WSR' | 'SC-GPFCI' | 'SC-GPFCISS' | 'SC-GPPMI' | 'SC-GPPMISS' | 'SC-GPEMI' | 'SC-GPEMISS' | 'SC-GPFCSS' | 'SC-GPPSSS' | 'CP-PM' | 'CP-XP' | 'CP-EP' | 'CP-RP' | 'CP-PMW' | 'CP-PMWU' | 'CP-XPI' | 'CP-XPU' | 'CP-EPU' | 'CP-TPI' | 'CP-TPU' | 'CP-SPIA' | 'CP-SPIS' | 'CP-SPUA' | 'CP-IPA' | 'CP-IPS' | 'FX-2DAM' | 'FX-FO' | 'FX-FI' | 'US-RETURN' | 'DHL-PIPL' | 'DHL-PIS' | 'DHL-PI' | 'DHL-PID' | 'DHL-PEM' | 'UPS-GDS' | 'US-GA'
     */
    private ?string $ServiceType = null;

    /**
     * @var null | string
     */
    private ?string $ServiceDescription = null;

    /**
     * @var null | string
     */
    private ?string $PrintLayout = 'Normal';

    /**
     * @var null | string
     */
    private ?string $DeliverDays = null;

    /**
     * @var null | float
     */
    private ?float $WeightLb = 0.0;

    /**
     * @var null | float
     */
    private ?float $WeightOz = null;

    /**
     * @var null | 'Unknown' | 'Postcard' | 'Letter' | 'Large Envelope or Flat' | 'Thick Envelope' | 'Package' | 'Flat Rate Box' | 'Small Flat Rate Box' | 'Large Flat Rate Box' | 'Flat Rate Envelope' | 'Flat Rate Padded Envelope' | 'Large Package' | 'Oversized Package' | 'Regional Rate Box A' | 'Regional Rate Box B' | 'Legal Flat Rate Envelope' | 'Regional Rate Box C' | 'OpenAndDistribute Half Tray Box' | 'OpenAndDistribute Full Tray Box' | 'OpenAndDistribute EMM Tray Box' | 'OpenAndDistribute Flat Tub Tray Box' | 'Express Envelope' | 'Documents' | 'Envelope' | 'Pak' | '10 KG Box' | '25 KG Box' | 'Express Box Large' | 'Express Box Medium' | 'Express Box Small' | 'Tube' | 'One Rate Envelope' | 'One Rate Small Box' | 'One Rate Medium Box' | 'One Rate Large Box' | 'One Rate Extra Large Box' | 'One Rate Pak' | 'One Rate Tube' | 'Box'
     */
    private ?string $PackageType = null;

    /**
     * @var null | \Knightar\StampsSoapClient\Type\ArrayOfArrayOfAddOnTypeV20
     */
    private ?\Knightar\StampsSoapClient\Type\ArrayOfArrayOfAddOnTypeV20 $RequiresAllOf = null;

    /**
     * @var null | float
     */
    private ?float $Length = null;

    /**
     * @var null | float
     */
    private ?float $Width = null;

    /**
     * @var null | float
     */
    private ?float $Height = null;

    /**
     * @var null | \DateTimeInterface
     */
    private ?\DateTimeInterface $ShipDate = null;

    /**
     * @var null | \DateTimeInterface
     */
    private ?\DateTimeInterface $DeliveryDate = null;

    /**
     * @var null | float
     */
    private ?float $InsuredValue = null;

    /**
     * @var null | float
     */
    private ?float $RegisteredValue = null;

    /**
     * @var null | float
     */
    private ?float $CODValue = null;

    /**
     * @var null | float
     */
    private ?float $DeclaredValue = null;

    /**
     * @var null | bool
     */
    private ?bool $NonMachinable = null;

    /**
     * @var null | bool
     */
    private ?bool $RectangularShaped = null;

    /**
     * @var null | string
     */
    private ?string $Prohibitions = null;

    /**
     * @var null | string
     */
    private ?string $Restrictions = null;

    /**
     * @var null | string
     */
    private ?string $Observations = null;

    /**
     * @var null | string
     */
    private ?string $Regulations = null;

    /**
     * @var null | string
     */
    private ?string $GEMNotes = null;

    /**
     * @var null | string
     */
    private ?string $MaxDimensions = null;

    /**
     * @var null | string
     */
    private ?string $DimWeighting = null;

    /**
     * @var null | \Knightar\StampsSoapClient\Type\ArrayOfAddOnV20
     */
    private ?\Knightar\StampsSoapClient\Type\ArrayOfAddOnV20 $AddOns = null;

    /**
     * @var null | \Knightar\StampsSoapClient\Type\ArrayOfSurchargeV5
     */
    private ?\Knightar\StampsSoapClient\Type\ArrayOfSurchargeV5 $Surcharges = null;

    /**
     * @var null | int
     */
    private ?int $EffectiveWeightInOunces = null;

    /**
     * @var null | int
     */
    private ?int $Zone = null;

    /**
     * @var null | int
     */
    private ?int $RateCategory = null;

    /**
     * @var null | bool
     */
    private ?bool $CubicPricing = null;

    /**
     * @var null | 'Commercial Sample' | 'Gift' | 'Document' | 'Returned Goods' | 'Other' | 'Merchandise' | 'Humanitarian Donation' | 'Dangerous Goods'
     */
    private ?string $ContentType = null;

    /**
     * @var null | 'Unknown' | 'None' | 'DDU' | 'ADC' | 'ASF' | 'NDC' | 'SCF' | 'Other'
     */
    private ?string $EntryFacility = null;

    /**
     * @var null | 'Unknown' | 'FiveDigit' | 'ThreeDigit' | 'NDC' | 'SCF' | 'MixedNDC' | 'Other'
     */
    private ?string $SortType = null;

    /**
     * @return \Knightar\StampsSoapClient\Type\Address
     */
    public function getFrom() : \Knightar\StampsSoapClient\Type\Address
    {
        return $this->From;
    }

    /**
     * @param \Knightar\StampsSoapClient\Type\Address $From
     * @return static
     */
    public function withFrom(\Knightar\StampsSoapClient\Type\Address $From) : static
    {
        $new = clone $this;
        $new->From = $From;

        return $new;
    }

    /**
     * @return \Knightar\StampsSoapClient\Type\Address
     */
    public function getTo() : \Knightar\StampsSoapClient\Type\Address
    {
        return $this->To;
    }

    /**
     * @param \Knightar\StampsSoapClient\Type\Address $To
     * @return static
     */
    public function withTo(\Knightar\StampsSoapClient\Type\Address $To) : static
    {
        $new = clone $this;
        $new->To = $To;

        return $new;
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
     * @return null | float
     */
    public function getMaxAmount() : ?float
    {
        return $this->MaxAmount;
    }

    /**
     * @param null | float $MaxAmount
     * @return static
     */
    public function withMaxAmount(?float $MaxAmount) : static
    {
        $new = clone $this;
        $new->MaxAmount = $MaxAmount;

        return $new;
    }

    /**
     * @return null | 'Unknown' | 'US-FC' | 'US-PM' | 'US-XM' | 'US-MM' | 'US-BP' | 'US-LM' | 'US-EMI' | 'US-PMI' | 'US-FCI' | 'US-CM' | 'US-PS' | 'DHL-PE' | 'DHL-PG' | 'DHL-BPME' | 'DHL-BPMG' | 'DHL-MPE' | 'DHL-MPG' | 'AS-IPA' | 'AS-ISAL' | 'AS-EPKT' | 'DHL-PIPA' | 'GG-IPA' | 'GG-ISAL' | 'GG-EPKT' | 'IBC-IPA' | 'IBC-ISAL' | 'IBC-EPKT' | 'RRD-IPA' | 'RRD-ISAL' | 'RRD-EPKT' | 'AS-GNRC' | 'GG-GNRC' | 'RRD-GNRC' | 'SC-GPE' | 'SC-GPP' | 'SC-GPESS' | 'SC-GPPSS' | 'DHL-EWW' | 'FX-GD' | 'FX-HD' | 'FX-2D' | 'FX-ES' | 'FX-SO' | 'FX-PO' | 'FX-GDI' | 'FX-EI' | 'FX-PI' | 'SC-GPLSS' | 'US-RG' | 'SC-GPL' | 'UPS-NDAE' | 'UPS-NDA' | 'UPS-NDAS' | 'UPS-2DAA' | 'UPS-2DA' | 'UPS-3DS' | 'UPS-GD' | 'UPS-SD' | 'UPS-WES' | 'UPS-WESP' | 'UPS-WED' | 'UPS-WSR' | 'SC-GPFCI' | 'SC-GPFCISS' | 'SC-GPPMI' | 'SC-GPPMISS' | 'SC-GPEMI' | 'SC-GPEMISS' | 'SC-GPFCSS' | 'SC-GPPSSS' | 'CP-PM' | 'CP-XP' | 'CP-EP' | 'CP-RP' | 'CP-PMW' | 'CP-PMWU' | 'CP-XPI' | 'CP-XPU' | 'CP-EPU' | 'CP-TPI' | 'CP-TPU' | 'CP-SPIA' | 'CP-SPIS' | 'CP-SPUA' | 'CP-IPA' | 'CP-IPS' | 'FX-2DAM' | 'FX-FO' | 'FX-FI' | 'US-RETURN' | 'DHL-PIPL' | 'DHL-PIS' | 'DHL-PI' | 'DHL-PID' | 'DHL-PEM' | 'UPS-GDS' | 'US-GA'
     */
    public function getServiceType() : ?string
    {
        return $this->ServiceType;
    }

    /**
     * @param null | 'Unknown' | 'US-FC' | 'US-PM' | 'US-XM' | 'US-MM' | 'US-BP' | 'US-LM' | 'US-EMI' | 'US-PMI' | 'US-FCI' | 'US-CM' | 'US-PS' | 'DHL-PE' | 'DHL-PG' | 'DHL-BPME' | 'DHL-BPMG' | 'DHL-MPE' | 'DHL-MPG' | 'AS-IPA' | 'AS-ISAL' | 'AS-EPKT' | 'DHL-PIPA' | 'GG-IPA' | 'GG-ISAL' | 'GG-EPKT' | 'IBC-IPA' | 'IBC-ISAL' | 'IBC-EPKT' | 'RRD-IPA' | 'RRD-ISAL' | 'RRD-EPKT' | 'AS-GNRC' | 'GG-GNRC' | 'RRD-GNRC' | 'SC-GPE' | 'SC-GPP' | 'SC-GPESS' | 'SC-GPPSS' | 'DHL-EWW' | 'FX-GD' | 'FX-HD' | 'FX-2D' | 'FX-ES' | 'FX-SO' | 'FX-PO' | 'FX-GDI' | 'FX-EI' | 'FX-PI' | 'SC-GPLSS' | 'US-RG' | 'SC-GPL' | 'UPS-NDAE' | 'UPS-NDA' | 'UPS-NDAS' | 'UPS-2DAA' | 'UPS-2DA' | 'UPS-3DS' | 'UPS-GD' | 'UPS-SD' | 'UPS-WES' | 'UPS-WESP' | 'UPS-WED' | 'UPS-WSR' | 'SC-GPFCI' | 'SC-GPFCISS' | 'SC-GPPMI' | 'SC-GPPMISS' | 'SC-GPEMI' | 'SC-GPEMISS' | 'SC-GPFCSS' | 'SC-GPPSSS' | 'CP-PM' | 'CP-XP' | 'CP-EP' | 'CP-RP' | 'CP-PMW' | 'CP-PMWU' | 'CP-XPI' | 'CP-XPU' | 'CP-EPU' | 'CP-TPI' | 'CP-TPU' | 'CP-SPIA' | 'CP-SPIS' | 'CP-SPUA' | 'CP-IPA' | 'CP-IPS' | 'FX-2DAM' | 'FX-FO' | 'FX-FI' | 'US-RETURN' | 'DHL-PIPL' | 'DHL-PIS' | 'DHL-PI' | 'DHL-PID' | 'DHL-PEM' | 'UPS-GDS' | 'US-GA' $ServiceType
     * @return static
     */
    public function withServiceType(?string $ServiceType) : static
    {
        $new = clone $this;
        $new->ServiceType = $ServiceType;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getServiceDescription() : ?string
    {
        return $this->ServiceDescription;
    }

    /**
     * @param null | string $ServiceDescription
     * @return static
     */
    public function withServiceDescription(?string $ServiceDescription) : static
    {
        $new = clone $this;
        $new->ServiceDescription = $ServiceDescription;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getPrintLayout() : ?string
    {
        return $this->PrintLayout;
    }

    /**
     * @param null | string $PrintLayout
     * @return static
     */
    public function withPrintLayout(?string $PrintLayout) : static
    {
        $new = clone $this;
        $new->PrintLayout = $PrintLayout ?? 'Normal';

        return $new;
    }

    /**
     * @return null | string
     */
    public function getDeliverDays() : ?string
    {
        return $this->DeliverDays;
    }

    /**
     * @param null | string $DeliverDays
     * @return static
     */
    public function withDeliverDays(?string $DeliverDays) : static
    {
        $new = clone $this;
        $new->DeliverDays = $DeliverDays;

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
     * @return null | 'Unknown' | 'Postcard' | 'Letter' | 'Large Envelope or Flat' | 'Thick Envelope' | 'Package' | 'Flat Rate Box' | 'Small Flat Rate Box' | 'Large Flat Rate Box' | 'Flat Rate Envelope' | 'Flat Rate Padded Envelope' | 'Large Package' | 'Oversized Package' | 'Regional Rate Box A' | 'Regional Rate Box B' | 'Legal Flat Rate Envelope' | 'Regional Rate Box C' | 'OpenAndDistribute Half Tray Box' | 'OpenAndDistribute Full Tray Box' | 'OpenAndDistribute EMM Tray Box' | 'OpenAndDistribute Flat Tub Tray Box' | 'Express Envelope' | 'Documents' | 'Envelope' | 'Pak' | '10 KG Box' | '25 KG Box' | 'Express Box Large' | 'Express Box Medium' | 'Express Box Small' | 'Tube' | 'One Rate Envelope' | 'One Rate Small Box' | 'One Rate Medium Box' | 'One Rate Large Box' | 'One Rate Extra Large Box' | 'One Rate Pak' | 'One Rate Tube' | 'Box'
     */
    public function getPackageType() : ?string
    {
        return $this->PackageType;
    }

    /**
     * @param null | 'Unknown' | 'Postcard' | 'Letter' | 'Large Envelope or Flat' | 'Thick Envelope' | 'Package' | 'Flat Rate Box' | 'Small Flat Rate Box' | 'Large Flat Rate Box' | 'Flat Rate Envelope' | 'Flat Rate Padded Envelope' | 'Large Package' | 'Oversized Package' | 'Regional Rate Box A' | 'Regional Rate Box B' | 'Legal Flat Rate Envelope' | 'Regional Rate Box C' | 'OpenAndDistribute Half Tray Box' | 'OpenAndDistribute Full Tray Box' | 'OpenAndDistribute EMM Tray Box' | 'OpenAndDistribute Flat Tub Tray Box' | 'Express Envelope' | 'Documents' | 'Envelope' | 'Pak' | '10 KG Box' | '25 KG Box' | 'Express Box Large' | 'Express Box Medium' | 'Express Box Small' | 'Tube' | 'One Rate Envelope' | 'One Rate Small Box' | 'One Rate Medium Box' | 'One Rate Large Box' | 'One Rate Extra Large Box' | 'One Rate Pak' | 'One Rate Tube' | 'Box' $PackageType
     * @return static
     */
    public function withPackageType(?string $PackageType) : static
    {
        $new = clone $this;
        $new->PackageType = $PackageType;

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
     * @return null | float
     */
    public function getLength() : ?float
    {
        return $this->Length;
    }

    /**
     * @param null | float $Length
     * @return static
     */
    public function withLength(?float $Length) : static
    {
        $new = clone $this;
        $new->Length = $Length;

        return $new;
    }

    /**
     * @return null | float
     */
    public function getWidth() : ?float
    {
        return $this->Width;
    }

    /**
     * @param null | float $Width
     * @return static
     */
    public function withWidth(?float $Width) : static
    {
        $new = clone $this;
        $new->Width = $Width;

        return $new;
    }

    /**
     * @return null | float
     */
    public function getHeight() : ?float
    {
        return $this->Height;
    }

    /**
     * @param null | float $Height
     * @return static
     */
    public function withHeight(?float $Height) : static
    {
        $new = clone $this;
        $new->Height = $Height;

        return $new;
    }

    /**
     * @return null | \DateTimeInterface
     */
    public function getShipDate() : ?\DateTimeInterface
    {
        return $this->ShipDate;
    }

    /**
     * @param null | \DateTimeInterface $ShipDate
     * @return static
     */
    public function withShipDate(?\DateTimeInterface $ShipDate) : static
    {
        $new = clone $this;
        $new->ShipDate = $ShipDate;

        return $new;
    }

    /**
     * @return null | \DateTimeInterface
     */
    public function getDeliveryDate() : ?\DateTimeInterface
    {
        return $this->DeliveryDate;
    }

    /**
     * @param null | \DateTimeInterface $DeliveryDate
     * @return static
     */
    public function withDeliveryDate(?\DateTimeInterface $DeliveryDate) : static
    {
        $new = clone $this;
        $new->DeliveryDate = $DeliveryDate;

        return $new;
    }

    /**
     * @return null | float
     */
    public function getInsuredValue() : ?float
    {
        return $this->InsuredValue;
    }

    /**
     * @param null | float $InsuredValue
     * @return static
     */
    public function withInsuredValue(?float $InsuredValue) : static
    {
        $new = clone $this;
        $new->InsuredValue = $InsuredValue;

        return $new;
    }

    /**
     * @return null | float
     */
    public function getRegisteredValue() : ?float
    {
        return $this->RegisteredValue;
    }

    /**
     * @param null | float $RegisteredValue
     * @return static
     */
    public function withRegisteredValue(?float $RegisteredValue) : static
    {
        $new = clone $this;
        $new->RegisteredValue = $RegisteredValue;

        return $new;
    }

    /**
     * @return null | float
     */
    public function getCODValue() : ?float
    {
        return $this->CODValue;
    }

    /**
     * @param null | float $CODValue
     * @return static
     */
    public function withCODValue(?float $CODValue) : static
    {
        $new = clone $this;
        $new->CODValue = $CODValue;

        return $new;
    }

    /**
     * @return null | float
     */
    public function getDeclaredValue() : ?float
    {
        return $this->DeclaredValue;
    }

    /**
     * @param null | float $DeclaredValue
     * @return static
     */
    public function withDeclaredValue(?float $DeclaredValue) : static
    {
        $new = clone $this;
        $new->DeclaredValue = $DeclaredValue;

        return $new;
    }

    /**
     * @return null | bool
     */
    public function getNonMachinable() : ?bool
    {
        return $this->NonMachinable;
    }

    /**
     * @param null | bool $NonMachinable
     * @return static
     */
    public function withNonMachinable(?bool $NonMachinable) : static
    {
        $new = clone $this;
        $new->NonMachinable = $NonMachinable;

        return $new;
    }

    /**
     * @return null | bool
     */
    public function getRectangularShaped() : ?bool
    {
        return $this->RectangularShaped;
    }

    /**
     * @param null | bool $RectangularShaped
     * @return static
     */
    public function withRectangularShaped(?bool $RectangularShaped) : static
    {
        $new = clone $this;
        $new->RectangularShaped = $RectangularShaped;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getProhibitions() : ?string
    {
        return $this->Prohibitions;
    }

    /**
     * @param null | string $Prohibitions
     * @return static
     */
    public function withProhibitions(?string $Prohibitions) : static
    {
        $new = clone $this;
        $new->Prohibitions = $Prohibitions;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getRestrictions() : ?string
    {
        return $this->Restrictions;
    }

    /**
     * @param null | string $Restrictions
     * @return static
     */
    public function withRestrictions(?string $Restrictions) : static
    {
        $new = clone $this;
        $new->Restrictions = $Restrictions;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getObservations() : ?string
    {
        return $this->Observations;
    }

    /**
     * @param null | string $Observations
     * @return static
     */
    public function withObservations(?string $Observations) : static
    {
        $new = clone $this;
        $new->Observations = $Observations;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getRegulations() : ?string
    {
        return $this->Regulations;
    }

    /**
     * @param null | string $Regulations
     * @return static
     */
    public function withRegulations(?string $Regulations) : static
    {
        $new = clone $this;
        $new->Regulations = $Regulations;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getGEMNotes() : ?string
    {
        return $this->GEMNotes;
    }

    /**
     * @param null | string $GEMNotes
     * @return static
     */
    public function withGEMNotes(?string $GEMNotes) : static
    {
        $new = clone $this;
        $new->GEMNotes = $GEMNotes;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getMaxDimensions() : ?string
    {
        return $this->MaxDimensions;
    }

    /**
     * @param null | string $MaxDimensions
     * @return static
     */
    public function withMaxDimensions(?string $MaxDimensions) : static
    {
        $new = clone $this;
        $new->MaxDimensions = $MaxDimensions;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getDimWeighting() : ?string
    {
        return $this->DimWeighting;
    }

    /**
     * @param null | string $DimWeighting
     * @return static
     */
    public function withDimWeighting(?string $DimWeighting) : static
    {
        $new = clone $this;
        $new->DimWeighting = $DimWeighting;

        return $new;
    }

    /**
     * @return null | \Knightar\StampsSoapClient\Type\ArrayOfAddOnV20
     */
    public function getAddOns() : ?\Knightar\StampsSoapClient\Type\ArrayOfAddOnV20
    {
        return $this->AddOns;
    }

    /**
     * @param null | \Knightar\StampsSoapClient\Type\ArrayOfAddOnV20 $AddOns
     * @return static
     */
    public function withAddOns(?\Knightar\StampsSoapClient\Type\ArrayOfAddOnV20 $AddOns) : static
    {
        $new = clone $this;
        $new->AddOns = $AddOns;

        return $new;
    }

    /**
     * @return null | \Knightar\StampsSoapClient\Type\ArrayOfSurchargeV5
     */
    public function getSurcharges() : ?\Knightar\StampsSoapClient\Type\ArrayOfSurchargeV5
    {
        return $this->Surcharges;
    }

    /**
     * @param null | \Knightar\StampsSoapClient\Type\ArrayOfSurchargeV5 $Surcharges
     * @return static
     */
    public function withSurcharges(?\Knightar\StampsSoapClient\Type\ArrayOfSurchargeV5 $Surcharges) : static
    {
        $new = clone $this;
        $new->Surcharges = $Surcharges;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getEffectiveWeightInOunces() : ?int
    {
        return $this->EffectiveWeightInOunces;
    }

    /**
     * @param null | int $EffectiveWeightInOunces
     * @return static
     */
    public function withEffectiveWeightInOunces(?int $EffectiveWeightInOunces) : static
    {
        $new = clone $this;
        $new->EffectiveWeightInOunces = $EffectiveWeightInOunces;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getZone() : ?int
    {
        return $this->Zone;
    }

    /**
     * @param null | int $Zone
     * @return static
     */
    public function withZone(?int $Zone) : static
    {
        $new = clone $this;
        $new->Zone = $Zone;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getRateCategory() : ?int
    {
        return $this->RateCategory;
    }

    /**
     * @param null | int $RateCategory
     * @return static
     */
    public function withRateCategory(?int $RateCategory) : static
    {
        $new = clone $this;
        $new->RateCategory = $RateCategory;

        return $new;
    }

    /**
     * @return null | bool
     */
    public function getCubicPricing() : ?bool
    {
        return $this->CubicPricing;
    }

    /**
     * @param null | bool $CubicPricing
     * @return static
     */
    public function withCubicPricing(?bool $CubicPricing) : static
    {
        $new = clone $this;
        $new->CubicPricing = $CubicPricing;

        return $new;
    }

    /**
     * @return null | 'Commercial Sample' | 'Gift' | 'Document' | 'Returned Goods' | 'Other' | 'Merchandise' | 'Humanitarian Donation' | 'Dangerous Goods'
     */
    public function getContentType() : ?string
    {
        return $this->ContentType;
    }

    /**
     * @param null | 'Commercial Sample' | 'Gift' | 'Document' | 'Returned Goods' | 'Other' | 'Merchandise' | 'Humanitarian Donation' | 'Dangerous Goods' $ContentType
     * @return static
     */
    public function withContentType(?string $ContentType) : static
    {
        $new = clone $this;
        $new->ContentType = $ContentType;

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
}

