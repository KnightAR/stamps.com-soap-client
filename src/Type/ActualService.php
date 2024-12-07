<?php

namespace Knightar\StampsSoapClient\Type;

class ActualService
{
    /**
     * @var 'Unknown' | 'US-FC' | 'US-PM' | 'US-XM' | 'US-MM' | 'US-BP' | 'US-LM' | 'US-EMI' | 'US-PMI' | 'US-FCI' | 'US-CM' | 'US-PS' | 'DHL-PE' | 'DHL-PG' | 'DHL-BPME' | 'DHL-BPMG' | 'DHL-MPE' | 'DHL-MPG' | 'AS-IPA' | 'AS-ISAL' | 'AS-EPKT' | 'DHL-PIPA' | 'GG-IPA' | 'GG-ISAL' | 'GG-EPKT' | 'IBC-IPA' | 'IBC-ISAL' | 'IBC-EPKT' | 'RRD-IPA' | 'RRD-ISAL' | 'RRD-EPKT' | 'AS-GNRC' | 'GG-GNRC' | 'RRD-GNRC' | 'SC-GPE' | 'SC-GPP' | 'SC-GPESS' | 'SC-GPPSS' | 'DHL-EWW' | 'FX-GD' | 'FX-HD' | 'FX-2D' | 'FX-ES' | 'FX-SO' | 'FX-PO' | 'FX-GDI' | 'FX-EI' | 'FX-PI' | 'SC-GPLSS' | 'US-RG' | 'SC-GPL' | 'UPS-NDAE' | 'UPS-NDA' | 'UPS-NDAS' | 'UPS-2DAA' | 'UPS-2DA' | 'UPS-3DS' | 'UPS-GD' | 'UPS-SD' | 'UPS-WES' | 'UPS-WESP' | 'UPS-WED' | 'UPS-WSR' | 'SC-GPFCI' | 'SC-GPFCISS' | 'SC-GPPMI' | 'SC-GPPMISS' | 'SC-GPEMI' | 'SC-GPEMISS' | 'SC-GPFCSS' | 'SC-GPPSSS' | 'CP-PM' | 'CP-XP' | 'CP-EP' | 'CP-RP' | 'CP-PMW' | 'CP-PMWU' | 'CP-XPI' | 'CP-XPU' | 'CP-EPU' | 'CP-TPI' | 'CP-TPU' | 'CP-SPIA' | 'CP-SPIS' | 'CP-SPUA' | 'CP-IPA' | 'CP-IPS' | 'FX-2DAM' | 'FX-FO' | 'FX-FI' | 'US-RETURN' | 'DHL-PIPL' | 'DHL-PIS' | 'DHL-PI' | 'DHL-PID' | 'DHL-PEM' | 'UPS-GDS' | 'US-GA'
     */
    private string $ActualServiceType;

    /**
     * @var float
     */
    private float $AdjustedAmount;

    /**
     * @return 'Unknown' | 'US-FC' | 'US-PM' | 'US-XM' | 'US-MM' | 'US-BP' | 'US-LM' | 'US-EMI' | 'US-PMI' | 'US-FCI' | 'US-CM' | 'US-PS' | 'DHL-PE' | 'DHL-PG' | 'DHL-BPME' | 'DHL-BPMG' | 'DHL-MPE' | 'DHL-MPG' | 'AS-IPA' | 'AS-ISAL' | 'AS-EPKT' | 'DHL-PIPA' | 'GG-IPA' | 'GG-ISAL' | 'GG-EPKT' | 'IBC-IPA' | 'IBC-ISAL' | 'IBC-EPKT' | 'RRD-IPA' | 'RRD-ISAL' | 'RRD-EPKT' | 'AS-GNRC' | 'GG-GNRC' | 'RRD-GNRC' | 'SC-GPE' | 'SC-GPP' | 'SC-GPESS' | 'SC-GPPSS' | 'DHL-EWW' | 'FX-GD' | 'FX-HD' | 'FX-2D' | 'FX-ES' | 'FX-SO' | 'FX-PO' | 'FX-GDI' | 'FX-EI' | 'FX-PI' | 'SC-GPLSS' | 'US-RG' | 'SC-GPL' | 'UPS-NDAE' | 'UPS-NDA' | 'UPS-NDAS' | 'UPS-2DAA' | 'UPS-2DA' | 'UPS-3DS' | 'UPS-GD' | 'UPS-SD' | 'UPS-WES' | 'UPS-WESP' | 'UPS-WED' | 'UPS-WSR' | 'SC-GPFCI' | 'SC-GPFCISS' | 'SC-GPPMI' | 'SC-GPPMISS' | 'SC-GPEMI' | 'SC-GPEMISS' | 'SC-GPFCSS' | 'SC-GPPSSS' | 'CP-PM' | 'CP-XP' | 'CP-EP' | 'CP-RP' | 'CP-PMW' | 'CP-PMWU' | 'CP-XPI' | 'CP-XPU' | 'CP-EPU' | 'CP-TPI' | 'CP-TPU' | 'CP-SPIA' | 'CP-SPIS' | 'CP-SPUA' | 'CP-IPA' | 'CP-IPS' | 'FX-2DAM' | 'FX-FO' | 'FX-FI' | 'US-RETURN' | 'DHL-PIPL' | 'DHL-PIS' | 'DHL-PI' | 'DHL-PID' | 'DHL-PEM' | 'UPS-GDS' | 'US-GA'
     */
    public function getActualServiceType() : string
    {
        return $this->ActualServiceType;
    }

    /**
     * @param 'Unknown' | 'US-FC' | 'US-PM' | 'US-XM' | 'US-MM' | 'US-BP' | 'US-LM' | 'US-EMI' | 'US-PMI' | 'US-FCI' | 'US-CM' | 'US-PS' | 'DHL-PE' | 'DHL-PG' | 'DHL-BPME' | 'DHL-BPMG' | 'DHL-MPE' | 'DHL-MPG' | 'AS-IPA' | 'AS-ISAL' | 'AS-EPKT' | 'DHL-PIPA' | 'GG-IPA' | 'GG-ISAL' | 'GG-EPKT' | 'IBC-IPA' | 'IBC-ISAL' | 'IBC-EPKT' | 'RRD-IPA' | 'RRD-ISAL' | 'RRD-EPKT' | 'AS-GNRC' | 'GG-GNRC' | 'RRD-GNRC' | 'SC-GPE' | 'SC-GPP' | 'SC-GPESS' | 'SC-GPPSS' | 'DHL-EWW' | 'FX-GD' | 'FX-HD' | 'FX-2D' | 'FX-ES' | 'FX-SO' | 'FX-PO' | 'FX-GDI' | 'FX-EI' | 'FX-PI' | 'SC-GPLSS' | 'US-RG' | 'SC-GPL' | 'UPS-NDAE' | 'UPS-NDA' | 'UPS-NDAS' | 'UPS-2DAA' | 'UPS-2DA' | 'UPS-3DS' | 'UPS-GD' | 'UPS-SD' | 'UPS-WES' | 'UPS-WESP' | 'UPS-WED' | 'UPS-WSR' | 'SC-GPFCI' | 'SC-GPFCISS' | 'SC-GPPMI' | 'SC-GPPMISS' | 'SC-GPEMI' | 'SC-GPEMISS' | 'SC-GPFCSS' | 'SC-GPPSSS' | 'CP-PM' | 'CP-XP' | 'CP-EP' | 'CP-RP' | 'CP-PMW' | 'CP-PMWU' | 'CP-XPI' | 'CP-XPU' | 'CP-EPU' | 'CP-TPI' | 'CP-TPU' | 'CP-SPIA' | 'CP-SPIS' | 'CP-SPUA' | 'CP-IPA' | 'CP-IPS' | 'FX-2DAM' | 'FX-FO' | 'FX-FI' | 'US-RETURN' | 'DHL-PIPL' | 'DHL-PIS' | 'DHL-PI' | 'DHL-PID' | 'DHL-PEM' | 'UPS-GDS' | 'US-GA' $ActualServiceType
     * @return static
     */
    public function withActualServiceType(string $ActualServiceType) : static
    {
        $new = clone $this;
        $new->ActualServiceType = $ActualServiceType;

        return $new;
    }

    /**
     * @return float
     */
    public function getAdjustedAmount() : float
    {
        return $this->AdjustedAmount;
    }

    /**
     * @param float $AdjustedAmount
     * @return static
     */
    public function withAdjustedAmount(float $AdjustedAmount) : static
    {
        $new = clone $this;
        $new->AdjustedAmount = $AdjustedAmount;

        return $new;
    }
}

