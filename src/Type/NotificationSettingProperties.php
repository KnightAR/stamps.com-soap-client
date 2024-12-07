<?php

namespace Knightar\StampsSoapClient\Type;

class NotificationSettingProperties
{
    /**
     * @var null | \Knightar\StampsSoapClient\Type\ArrayOfTrigger
     */
    private ?\Knightar\StampsSoapClient\Type\ArrayOfTrigger $Triggers = null;

    /**
     * @var null | \Knightar\StampsSoapClient\Type\EmailConfig
     */
    private ?\Knightar\StampsSoapClient\Type\EmailConfig $EmailConfig = null;

    /**
     * @var null | bool
     */
    private ?bool $AllowSMSOptIn = null;

    /**
     * @return null | \Knightar\StampsSoapClient\Type\ArrayOfTrigger
     */
    public function getTriggers() : ?\Knightar\StampsSoapClient\Type\ArrayOfTrigger
    {
        return $this->Triggers;
    }

    /**
     * @param null | \Knightar\StampsSoapClient\Type\ArrayOfTrigger $Triggers
     * @return static
     */
    public function withTriggers(?\Knightar\StampsSoapClient\Type\ArrayOfTrigger $Triggers) : static
    {
        $new = clone $this;
        $new->Triggers = $Triggers;

        return $new;
    }

    /**
     * @return null | \Knightar\StampsSoapClient\Type\EmailConfig
     */
    public function getEmailConfig() : ?\Knightar\StampsSoapClient\Type\EmailConfig
    {
        return $this->EmailConfig;
    }

    /**
     * @param null | \Knightar\StampsSoapClient\Type\EmailConfig $EmailConfig
     * @return static
     */
    public function withEmailConfig(?\Knightar\StampsSoapClient\Type\EmailConfig $EmailConfig) : static
    {
        $new = clone $this;
        $new->EmailConfig = $EmailConfig;

        return $new;
    }

    /**
     * @return null | bool
     */
    public function getAllowSMSOptIn() : ?bool
    {
        return $this->AllowSMSOptIn;
    }

    /**
     * @param null | bool $AllowSMSOptIn
     * @return static
     */
    public function withAllowSMSOptIn(?bool $AllowSMSOptIn) : static
    {
        $new = clone $this;
        $new->AllowSMSOptIn = $AllowSMSOptIn;

        return $new;
    }
}

