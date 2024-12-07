<?php

namespace Knightar\StampsSoapClient\Type;

use \Knightar\StampsSoapClient\Type\CapabilitiesV38;

class CapabilitiesV39 extends CapabilitiesV38
{
    /**
     * @var bool
     */
    private bool $CanUseAutomationRules;

    /**
     * @var bool
     */
    private bool $CanUseAdvancedAutomationRules;

    /**
     * @var bool
     */
    private bool $CanUseFBA;

    /**
     * @return bool
     */
    public function getCanUseAutomationRules() : bool
    {
        return $this->CanUseAutomationRules;
    }

    /**
     * @param bool $CanUseAutomationRules
     * @return static
     */
    public function withCanUseAutomationRules(bool $CanUseAutomationRules) : static
    {
        $new = clone $this;
        $new->CanUseAutomationRules = $CanUseAutomationRules;

        return $new;
    }

    /**
     * @return bool
     */
    public function getCanUseAdvancedAutomationRules() : bool
    {
        return $this->CanUseAdvancedAutomationRules;
    }

    /**
     * @param bool $CanUseAdvancedAutomationRules
     * @return static
     */
    public function withCanUseAdvancedAutomationRules(bool $CanUseAdvancedAutomationRules) : static
    {
        $new = clone $this;
        $new->CanUseAdvancedAutomationRules = $CanUseAdvancedAutomationRules;

        return $new;
    }

    /**
     * @return bool
     */
    public function getCanUseFBA() : bool
    {
        return $this->CanUseFBA;
    }

    /**
     * @param bool $CanUseFBA
     * @return static
     */
    public function withCanUseFBA(bool $CanUseFBA) : static
    {
        $new = clone $this;
        $new->CanUseFBA = $CanUseFBA;

        return $new;
    }
}

