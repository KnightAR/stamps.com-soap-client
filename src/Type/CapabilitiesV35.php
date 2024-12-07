<?php

namespace Knightar\StampsSoapClient\Type;

use \Knightar\StampsSoapClient\Type\CapabilitiesV34;

class CapabilitiesV35 extends CapabilitiesV34
{
    /**
     * @var bool
     */
    private bool $CanPrintCanadaPost;

    /**
     * @return bool
     */
    public function getCanPrintCanadaPost() : bool
    {
        return $this->CanPrintCanadaPost;
    }

    /**
     * @param bool $CanPrintCanadaPost
     * @return static
     */
    public function withCanPrintCanadaPost(bool $CanPrintCanadaPost) : static
    {
        $new = clone $this;
        $new->CanPrintCanadaPost = $CanPrintCanadaPost;

        return $new;
    }
}

