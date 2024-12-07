<?php

namespace Knightar\StampsSoapClient\Type;

use \Knightar\StampsSoapClient\Type\CapabilitiesV13;

class CapabilitiesV14 extends CapabilitiesV13
{
    /**
     * @var bool
     */
    private bool $DisableLabelLogo;

    /**
     * @return bool
     */
    public function getDisableLabelLogo() : bool
    {
        return $this->DisableLabelLogo;
    }

    /**
     * @param bool $DisableLabelLogo
     * @return static
     */
    public function withDisableLabelLogo(bool $DisableLabelLogo) : static
    {
        $new = clone $this;
        $new->DisableLabelLogo = $DisableLabelLogo;

        return $new;
    }
}

