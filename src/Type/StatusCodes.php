<?php

namespace Knightar\StampsSoapClient\Type;

class StatusCodes
{
    /**
     * @var int
     */
    private int $ReturnCode;

    /**
     * @var null | \Knightar\StampsSoapClient\Type\ArrayOfFootnote
     */
    private ?\Knightar\StampsSoapClient\Type\ArrayOfFootnote $Footnotes = null;

    /**
     * @var null | \Knightar\StampsSoapClient\Type\ArrayOfDpvFootnote
     */
    private ?\Knightar\StampsSoapClient\Type\ArrayOfDpvFootnote $DpvFootnotes = null;

    /**
     * @var null | \Knightar\StampsSoapClient\Type\ArrayOfInt
     */
    private ?\Knightar\StampsSoapClient\Type\ArrayOfInt $SdcFootnotes = null;

    /**
     * @return int
     */
    public function getReturnCode() : int
    {
        return $this->ReturnCode;
    }

    /**
     * @param int $ReturnCode
     * @return static
     */
    public function withReturnCode(int $ReturnCode) : static
    {
        $new = clone $this;
        $new->ReturnCode = $ReturnCode;

        return $new;
    }

    /**
     * @return null | \Knightar\StampsSoapClient\Type\ArrayOfFootnote
     */
    public function getFootnotes() : ?\Knightar\StampsSoapClient\Type\ArrayOfFootnote
    {
        return $this->Footnotes;
    }

    /**
     * @param null | \Knightar\StampsSoapClient\Type\ArrayOfFootnote $Footnotes
     * @return static
     */
    public function withFootnotes(?\Knightar\StampsSoapClient\Type\ArrayOfFootnote $Footnotes) : static
    {
        $new = clone $this;
        $new->Footnotes = $Footnotes;

        return $new;
    }

    /**
     * @return null | \Knightar\StampsSoapClient\Type\ArrayOfDpvFootnote
     */
    public function getDpvFootnotes() : ?\Knightar\StampsSoapClient\Type\ArrayOfDpvFootnote
    {
        return $this->DpvFootnotes;
    }

    /**
     * @param null | \Knightar\StampsSoapClient\Type\ArrayOfDpvFootnote $DpvFootnotes
     * @return static
     */
    public function withDpvFootnotes(?\Knightar\StampsSoapClient\Type\ArrayOfDpvFootnote $DpvFootnotes) : static
    {
        $new = clone $this;
        $new->DpvFootnotes = $DpvFootnotes;

        return $new;
    }

    /**
     * @return null | \Knightar\StampsSoapClient\Type\ArrayOfInt
     */
    public function getSdcFootnotes() : ?\Knightar\StampsSoapClient\Type\ArrayOfInt
    {
        return $this->SdcFootnotes;
    }

    /**
     * @param null | \Knightar\StampsSoapClient\Type\ArrayOfInt $SdcFootnotes
     * @return static
     */
    public function withSdcFootnotes(?\Knightar\StampsSoapClient\Type\ArrayOfInt $SdcFootnotes) : static
    {
        $new = clone $this;
        $new->SdcFootnotes = $SdcFootnotes;

        return $new;
    }
}

