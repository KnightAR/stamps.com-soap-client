<?php

namespace Knightar\StampsSoapClient\Type;

use \Knightar\StampsSoapClient\Type\CapabilitiesV17;

class CapabilitiesV18 extends CapabilitiesV17
{
    /**
     * @var bool
     */
    private bool $CanPrintFCPresort;

    /**
     * @var bool
     */
    private bool $CanPrintPSPresort;

    /**
     * @var bool
     */
    private bool $CanPrintIntlPresortSinglePiece;

    /**
     * @var bool
     */
    private bool $CanConvertToFCIPresort;

    /**
     * @var bool
     */
    private bool $CanConvertToPMIPresort;

    /**
     * @var bool
     */
    private bool $CanConvertToPMEIPresort;

    /**
     * @var bool
     */
    private bool $CanConvertToFCPresort;

    /**
     * @var bool
     */
    private bool $CanConvertToPSPresort;

    /**
     * @var bool
     */
    private bool $CanConvertToIntlPresortSinglePiece;

    /**
     * @return bool
     */
    public function getCanPrintFCPresort() : bool
    {
        return $this->CanPrintFCPresort;
    }

    /**
     * @param bool $CanPrintFCPresort
     * @return static
     */
    public function withCanPrintFCPresort(bool $CanPrintFCPresort) : static
    {
        $new = clone $this;
        $new->CanPrintFCPresort = $CanPrintFCPresort;

        return $new;
    }

    /**
     * @return bool
     */
    public function getCanPrintPSPresort() : bool
    {
        return $this->CanPrintPSPresort;
    }

    /**
     * @param bool $CanPrintPSPresort
     * @return static
     */
    public function withCanPrintPSPresort(bool $CanPrintPSPresort) : static
    {
        $new = clone $this;
        $new->CanPrintPSPresort = $CanPrintPSPresort;

        return $new;
    }

    /**
     * @return bool
     */
    public function getCanPrintIntlPresortSinglePiece() : bool
    {
        return $this->CanPrintIntlPresortSinglePiece;
    }

    /**
     * @param bool $CanPrintIntlPresortSinglePiece
     * @return static
     */
    public function withCanPrintIntlPresortSinglePiece(bool $CanPrintIntlPresortSinglePiece) : static
    {
        $new = clone $this;
        $new->CanPrintIntlPresortSinglePiece = $CanPrintIntlPresortSinglePiece;

        return $new;
    }

    /**
     * @return bool
     */
    public function getCanConvertToFCIPresort() : bool
    {
        return $this->CanConvertToFCIPresort;
    }

    /**
     * @param bool $CanConvertToFCIPresort
     * @return static
     */
    public function withCanConvertToFCIPresort(bool $CanConvertToFCIPresort) : static
    {
        $new = clone $this;
        $new->CanConvertToFCIPresort = $CanConvertToFCIPresort;

        return $new;
    }

    /**
     * @return bool
     */
    public function getCanConvertToPMIPresort() : bool
    {
        return $this->CanConvertToPMIPresort;
    }

    /**
     * @param bool $CanConvertToPMIPresort
     * @return static
     */
    public function withCanConvertToPMIPresort(bool $CanConvertToPMIPresort) : static
    {
        $new = clone $this;
        $new->CanConvertToPMIPresort = $CanConvertToPMIPresort;

        return $new;
    }

    /**
     * @return bool
     */
    public function getCanConvertToPMEIPresort() : bool
    {
        return $this->CanConvertToPMEIPresort;
    }

    /**
     * @param bool $CanConvertToPMEIPresort
     * @return static
     */
    public function withCanConvertToPMEIPresort(bool $CanConvertToPMEIPresort) : static
    {
        $new = clone $this;
        $new->CanConvertToPMEIPresort = $CanConvertToPMEIPresort;

        return $new;
    }

    /**
     * @return bool
     */
    public function getCanConvertToFCPresort() : bool
    {
        return $this->CanConvertToFCPresort;
    }

    /**
     * @param bool $CanConvertToFCPresort
     * @return static
     */
    public function withCanConvertToFCPresort(bool $CanConvertToFCPresort) : static
    {
        $new = clone $this;
        $new->CanConvertToFCPresort = $CanConvertToFCPresort;

        return $new;
    }

    /**
     * @return bool
     */
    public function getCanConvertToPSPresort() : bool
    {
        return $this->CanConvertToPSPresort;
    }

    /**
     * @param bool $CanConvertToPSPresort
     * @return static
     */
    public function withCanConvertToPSPresort(bool $CanConvertToPSPresort) : static
    {
        $new = clone $this;
        $new->CanConvertToPSPresort = $CanConvertToPSPresort;

        return $new;
    }

    /**
     * @return bool
     */
    public function getCanConvertToIntlPresortSinglePiece() : bool
    {
        return $this->CanConvertToIntlPresortSinglePiece;
    }

    /**
     * @param bool $CanConvertToIntlPresortSinglePiece
     * @return static
     */
    public function withCanConvertToIntlPresortSinglePiece(bool $CanConvertToIntlPresortSinglePiece) : static
    {
        $new = clone $this;
        $new->CanConvertToIntlPresortSinglePiece = $CanConvertToIntlPresortSinglePiece;

        return $new;
    }
}

