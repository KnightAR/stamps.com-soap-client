<?php

namespace Knightar\StampsSoapClient\Type;

class Invoice
{
    /**
     * @var string
     */
    private string $ControlID;

    /**
     * @var string
     */
    private string $InvoiceNumber;

    /**
     * @var null | float
     */
    private ?float $InvoiceAmount = null;

    /**
     * @var null | \DateTimeInterface
     */
    private ?\DateTimeInterface $InvoiceDate = null;

    /**
     * @return string
     */
    public function getControlID() : string
    {
        return $this->ControlID;
    }

    /**
     * @param string $ControlID
     * @return static
     */
    public function withControlID(string $ControlID) : static
    {
        $new = clone $this;
        $new->ControlID = $ControlID;

        return $new;
    }

    /**
     * @return string
     */
    public function getInvoiceNumber() : string
    {
        return $this->InvoiceNumber;
    }

    /**
     * @param string $InvoiceNumber
     * @return static
     */
    public function withInvoiceNumber(string $InvoiceNumber) : static
    {
        $new = clone $this;
        $new->InvoiceNumber = $InvoiceNumber;

        return $new;
    }

    /**
     * @return null | float
     */
    public function getInvoiceAmount() : ?float
    {
        return $this->InvoiceAmount;
    }

    /**
     * @param null | float $InvoiceAmount
     * @return static
     */
    public function withInvoiceAmount(?float $InvoiceAmount) : static
    {
        $new = clone $this;
        $new->InvoiceAmount = $InvoiceAmount;

        return $new;
    }

    /**
     * @return null | \DateTimeInterface
     */
    public function getInvoiceDate() : ?\DateTimeInterface
    {
        return $this->InvoiceDate;
    }

    /**
     * @param null | \DateTimeInterface $InvoiceDate
     * @return static
     */
    public function withInvoiceDate(?\DateTimeInterface $InvoiceDate) : static
    {
        $new = clone $this;
        $new->InvoiceDate = $InvoiceDate;

        return $new;
    }
}

