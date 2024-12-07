<?php

namespace Knightar\StampsSoapClient\Type;

use \Knightar\StampsSoapClient\Type\CapabilitiesV39;

class CapabilitiesV40 extends CapabilitiesV39
{
    /**
     * @var bool
     */
    private bool $CanExportPrintHistory;

    /**
     * @var bool
     */
    private bool $CanScheduleReports;

    /**
     * @var bool
     */
    private bool $CanUseRateAdvisor;

    /**
     * @var bool
     */
    private bool $CanUseBrandedEmails;

    /**
     * @return bool
     */
    public function getCanExportPrintHistory() : bool
    {
        return $this->CanExportPrintHistory;
    }

    /**
     * @param bool $CanExportPrintHistory
     * @return static
     */
    public function withCanExportPrintHistory(bool $CanExportPrintHistory) : static
    {
        $new = clone $this;
        $new->CanExportPrintHistory = $CanExportPrintHistory;

        return $new;
    }

    /**
     * @return bool
     */
    public function getCanScheduleReports() : bool
    {
        return $this->CanScheduleReports;
    }

    /**
     * @param bool $CanScheduleReports
     * @return static
     */
    public function withCanScheduleReports(bool $CanScheduleReports) : static
    {
        $new = clone $this;
        $new->CanScheduleReports = $CanScheduleReports;

        return $new;
    }

    /**
     * @return bool
     */
    public function getCanUseRateAdvisor() : bool
    {
        return $this->CanUseRateAdvisor;
    }

    /**
     * @param bool $CanUseRateAdvisor
     * @return static
     */
    public function withCanUseRateAdvisor(bool $CanUseRateAdvisor) : static
    {
        $new = clone $this;
        $new->CanUseRateAdvisor = $CanUseRateAdvisor;

        return $new;
    }

    /**
     * @return bool
     */
    public function getCanUseBrandedEmails() : bool
    {
        return $this->CanUseBrandedEmails;
    }

    /**
     * @param bool $CanUseBrandedEmails
     * @return static
     */
    public function withCanUseBrandedEmails(bool $CanUseBrandedEmails) : static
    {
        $new = clone $this;
        $new->CanUseBrandedEmails = $CanUseBrandedEmails;

        return $new;
    }
}

