<?php

namespace Knightar\StampsSoapClient\Type;

use \Knightar\StampsSoapClient\Type\CapabilitiesV7;

class CapabilitiesV8 extends CapabilitiesV7
{
    /**
     * @var bool
     */
    private bool $AllowUspsMPosLabel;

    /**
     * @var bool
     */
    private bool $DisableConversationToken;

    /**
     * @var bool
     */
    private bool $CanPrintCubic;

    /**
     * @return bool
     */
    public function getAllowUspsMPosLabel() : bool
    {
        return $this->AllowUspsMPosLabel;
    }

    /**
     * @param bool $AllowUspsMPosLabel
     * @return static
     */
    public function withAllowUspsMPosLabel(bool $AllowUspsMPosLabel) : static
    {
        $new = clone $this;
        $new->AllowUspsMPosLabel = $AllowUspsMPosLabel;

        return $new;
    }

    /**
     * @return bool
     */
    public function getDisableConversationToken() : bool
    {
        return $this->DisableConversationToken;
    }

    /**
     * @param bool $DisableConversationToken
     * @return static
     */
    public function withDisableConversationToken(bool $DisableConversationToken) : static
    {
        $new = clone $this;
        $new->DisableConversationToken = $DisableConversationToken;

        return $new;
    }

    /**
     * @return bool
     */
    public function getCanPrintCubic() : bool
    {
        return $this->CanPrintCubic;
    }

    /**
     * @param bool $CanPrintCubic
     * @return static
     */
    public function withCanPrintCubic(bool $CanPrintCubic) : static
    {
        $new = clone $this;
        $new->CanPrintCubic = $CanPrintCubic;

        return $new;
    }
}

