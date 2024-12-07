<?php

namespace Knightar\StampsSoapClient\Type;

class ServicesV22
{
    /**
     * @var 'Unknown' | 'US-FC' | 'US-PM' | 'US-XM' | 'US-MM' | 'US-BP' | 'US-LM' | 'US-EMI' | 'US-PMI' | 'US-FCI' | 'US-CM' | 'US-PS' | 'DHL-PE' | 'DHL-PG' | 'DHL-BPME' | 'DHL-BPMG' | 'DHL-MPE' | 'DHL-MPG' | 'AS-IPA' | 'AS-ISAL' | 'AS-EPKT' | 'DHL-PIPA' | 'GG-IPA' | 'GG-ISAL' | 'GG-EPKT' | 'IBC-IPA' | 'IBC-ISAL' | 'IBC-EPKT' | 'RRD-IPA' | 'RRD-ISAL' | 'RRD-EPKT' | 'AS-GNRC' | 'GG-GNRC' | 'RRD-GNRC' | 'SC-GPE' | 'SC-GPP' | 'SC-GPESS' | 'SC-GPPSS' | 'DHL-EWW' | 'FX-GD' | 'FX-HD' | 'FX-2D' | 'FX-ES' | 'FX-SO' | 'FX-PO' | 'FX-GDI' | 'FX-EI' | 'FX-PI' | 'SC-GPLSS' | 'US-RG' | 'SC-GPL' | 'UPS-NDAE' | 'UPS-NDA' | 'UPS-NDAS' | 'UPS-2DAA' | 'UPS-2DA' | 'UPS-3DS' | 'UPS-GD' | 'UPS-SD' | 'UPS-WES' | 'UPS-WESP' | 'UPS-WED' | 'UPS-WSR' | 'SC-GPFCI' | 'SC-GPFCISS' | 'SC-GPPMI' | 'SC-GPPMISS' | 'SC-GPEMI' | 'SC-GPEMISS' | 'SC-GPFCSS' | 'SC-GPPSSS' | 'CP-PM' | 'CP-XP' | 'CP-EP' | 'CP-RP' | 'CP-PMW' | 'CP-PMWU' | 'CP-XPI' | 'CP-XPU' | 'CP-EPU' | 'CP-TPI' | 'CP-TPU' | 'CP-SPIA' | 'CP-SPIS' | 'CP-SPUA' | 'CP-IPA' | 'CP-IPS' | 'FX-2DAM' | 'FX-FO' | 'FX-FI' | 'US-RETURN' | 'DHL-PIPL' | 'DHL-PIS' | 'DHL-PI' | 'DHL-PID' | 'DHL-PEM' | 'UPS-GDS' | 'US-GA'
     */
    private string $ServiceType;

    /**
     * @var float
     */
    private float $Amount;

    /**
     * @var int
     */
    private int $CubicPricingTier;

    /**
     * @var bool
     */
    private bool $IsMetroRate;

    /**
     * @var 'All' | 'USPS' | 'FedEx' | 'DHLExpress' | 'UPS' | 'CanadaPost' | 'DhlECommerce' | 'Zorbit'
     */
    private string $Carrier;

    /**
     * @return 'Unknown' | 'US-FC' | 'US-PM' | 'US-XM' | 'US-MM' | 'US-BP' | 'US-LM' | 'US-EMI' | 'US-PMI' | 'US-FCI' | 'US-CM' | 'US-PS' | 'DHL-PE' | 'DHL-PG' | 'DHL-BPME' | 'DHL-BPMG' | 'DHL-MPE' | 'DHL-MPG' | 'AS-IPA' | 'AS-ISAL' | 'AS-EPKT' | 'DHL-PIPA' | 'GG-IPA' | 'GG-ISAL' | 'GG-EPKT' | 'IBC-IPA' | 'IBC-ISAL' | 'IBC-EPKT' | 'RRD-IPA' | 'RRD-ISAL' | 'RRD-EPKT' | 'AS-GNRC' | 'GG-GNRC' | 'RRD-GNRC' | 'SC-GPE' | 'SC-GPP' | 'SC-GPESS' | 'SC-GPPSS' | 'DHL-EWW' | 'FX-GD' | 'FX-HD' | 'FX-2D' | 'FX-ES' | 'FX-SO' | 'FX-PO' | 'FX-GDI' | 'FX-EI' | 'FX-PI' | 'SC-GPLSS' | 'US-RG' | 'SC-GPL' | 'UPS-NDAE' | 'UPS-NDA' | 'UPS-NDAS' | 'UPS-2DAA' | 'UPS-2DA' | 'UPS-3DS' | 'UPS-GD' | 'UPS-SD' | 'UPS-WES' | 'UPS-WESP' | 'UPS-WED' | 'UPS-WSR' | 'SC-GPFCI' | 'SC-GPFCISS' | 'SC-GPPMI' | 'SC-GPPMISS' | 'SC-GPEMI' | 'SC-GPEMISS' | 'SC-GPFCSS' | 'SC-GPPSSS' | 'CP-PM' | 'CP-XP' | 'CP-EP' | 'CP-RP' | 'CP-PMW' | 'CP-PMWU' | 'CP-XPI' | 'CP-XPU' | 'CP-EPU' | 'CP-TPI' | 'CP-TPU' | 'CP-SPIA' | 'CP-SPIS' | 'CP-SPUA' | 'CP-IPA' | 'CP-IPS' | 'FX-2DAM' | 'FX-FO' | 'FX-FI' | 'US-RETURN' | 'DHL-PIPL' | 'DHL-PIS' | 'DHL-PI' | 'DHL-PID' | 'DHL-PEM' | 'UPS-GDS' | 'US-GA'
     */
    public function getServiceType() : string
    {
        return $this->ServiceType;
    }

    /**
     * @param 'Unknown' | 'US-FC' | 'US-PM' | 'US-XM' | 'US-MM' | 'US-BP' | 'US-LM' | 'US-EMI' | 'US-PMI' | 'US-FCI' | 'US-CM' | 'US-PS' | 'DHL-PE' | 'DHL-PG' | 'DHL-BPME' | 'DHL-BPMG' | 'DHL-MPE' | 'DHL-MPG' | 'AS-IPA' | 'AS-ISAL' | 'AS-EPKT' | 'DHL-PIPA' | 'GG-IPA' | 'GG-ISAL' | 'GG-EPKT' | 'IBC-IPA' | 'IBC-ISAL' | 'IBC-EPKT' | 'RRD-IPA' | 'RRD-ISAL' | 'RRD-EPKT' | 'AS-GNRC' | 'GG-GNRC' | 'RRD-GNRC' | 'SC-GPE' | 'SC-GPP' | 'SC-GPESS' | 'SC-GPPSS' | 'DHL-EWW' | 'FX-GD' | 'FX-HD' | 'FX-2D' | 'FX-ES' | 'FX-SO' | 'FX-PO' | 'FX-GDI' | 'FX-EI' | 'FX-PI' | 'SC-GPLSS' | 'US-RG' | 'SC-GPL' | 'UPS-NDAE' | 'UPS-NDA' | 'UPS-NDAS' | 'UPS-2DAA' | 'UPS-2DA' | 'UPS-3DS' | 'UPS-GD' | 'UPS-SD' | 'UPS-WES' | 'UPS-WESP' | 'UPS-WED' | 'UPS-WSR' | 'SC-GPFCI' | 'SC-GPFCISS' | 'SC-GPPMI' | 'SC-GPPMISS' | 'SC-GPEMI' | 'SC-GPEMISS' | 'SC-GPFCSS' | 'SC-GPPSSS' | 'CP-PM' | 'CP-XP' | 'CP-EP' | 'CP-RP' | 'CP-PMW' | 'CP-PMWU' | 'CP-XPI' | 'CP-XPU' | 'CP-EPU' | 'CP-TPI' | 'CP-TPU' | 'CP-SPIA' | 'CP-SPIS' | 'CP-SPUA' | 'CP-IPA' | 'CP-IPS' | 'FX-2DAM' | 'FX-FO' | 'FX-FI' | 'US-RETURN' | 'DHL-PIPL' | 'DHL-PIS' | 'DHL-PI' | 'DHL-PID' | 'DHL-PEM' | 'UPS-GDS' | 'US-GA' $ServiceType
     * @return static
     */
    public function withServiceType(string $ServiceType) : static
    {
        $new = clone $this;
        $new->ServiceType = $ServiceType;

        return $new;
    }

    /**
     * @return float
     */
    public function getAmount() : float
    {
        return $this->Amount;
    }

    /**
     * @param float $Amount
     * @return static
     */
    public function withAmount(float $Amount) : static
    {
        $new = clone $this;
        $new->Amount = $Amount;

        return $new;
    }

    /**
     * @return int
     */
    public function getCubicPricingTier() : int
    {
        return $this->CubicPricingTier;
    }

    /**
     * @param int $CubicPricingTier
     * @return static
     */
    public function withCubicPricingTier(int $CubicPricingTier) : static
    {
        $new = clone $this;
        $new->CubicPricingTier = $CubicPricingTier;

        return $new;
    }

    /**
     * @return bool
     */
    public function getIsMetroRate() : bool
    {
        return $this->IsMetroRate;
    }

    /**
     * @param bool $IsMetroRate
     * @return static
     */
    public function withIsMetroRate(bool $IsMetroRate) : static
    {
        $new = clone $this;
        $new->IsMetroRate = $IsMetroRate;

        return $new;
    }

    /**
     * @return 'All' | 'USPS' | 'FedEx' | 'DHLExpress' | 'UPS' | 'CanadaPost' | 'DhlECommerce' | 'Zorbit'
     */
    public function getCarrier() : string
    {
        return $this->Carrier;
    }

    /**
     * @param 'All' | 'USPS' | 'FedEx' | 'DHLExpress' | 'UPS' | 'CanadaPost' | 'DhlECommerce' | 'Zorbit' $Carrier
     * @return static
     */
    public function withCarrier(string $Carrier) : static
    {
        $new = clone $this;
        $new->Carrier = $Carrier;

        return $new;
    }
}

