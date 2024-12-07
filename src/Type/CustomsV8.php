<?php

namespace Knightar\StampsSoapClient\Type;

class CustomsV8
{
    /**
     * @var 'Commercial Sample' | 'Gift' | 'Document' | 'Returned Goods' | 'Other' | 'Merchandise' | 'Humanitarian Donation' | 'Dangerous Goods'
     */
    private string $ContentType;

    /**
     * @var null | string
     */
    private ?string $Comments = null;

    /**
     * @var null | string
     */
    private ?string $LicenseNumber = null;

    /**
     * @var null | string
     */
    private ?string $CertificateNumber = null;

    /**
     * @var null | string
     */
    private ?string $InvoiceNumber = null;

    /**
     * @var null | string
     */
    private ?string $OtherDescribe = null;

    /**
     * @var \Knightar\StampsSoapClient\Type\ArrayOfCustomsLine
     */
    private \Knightar\StampsSoapClient\Type\ArrayOfCustomsLine $CustomsLines;

    /**
     * @var null | string
     */
    private ?string $CustomsSigner = null;

    /**
     * @var null | string
     */
    private ?string $PassportNumber = null;

    /**
     * @var null | \DateTimeInterface
     */
    private ?\DateTimeInterface $PassportIssueDate = null;

    /**
     * @var null | \DateTimeInterface
     */
    private ?\DateTimeInterface $PassportExpiryDate = null;

    /**
     * @var null | string
     */
    private ?string $ImportLicenseNumber = null;

    /**
     * @var null | string
     */
    private ?string $SendersCustomsReference = null;

    /**
     * @return 'Commercial Sample' | 'Gift' | 'Document' | 'Returned Goods' | 'Other' | 'Merchandise' | 'Humanitarian Donation' | 'Dangerous Goods'
     */
    public function getContentType() : string
    {
        return $this->ContentType;
    }

    /**
     * @param 'Commercial Sample' | 'Gift' | 'Document' | 'Returned Goods' | 'Other' | 'Merchandise' | 'Humanitarian Donation' | 'Dangerous Goods' $ContentType
     * @return static
     */
    public function withContentType(string $ContentType) : static
    {
        $new = clone $this;
        $new->ContentType = $ContentType;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getComments() : ?string
    {
        return $this->Comments;
    }

    /**
     * @param null | string $Comments
     * @return static
     */
    public function withComments(?string $Comments) : static
    {
        $new = clone $this;
        $new->Comments = $Comments;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getLicenseNumber() : ?string
    {
        return $this->LicenseNumber;
    }

    /**
     * @param null | string $LicenseNumber
     * @return static
     */
    public function withLicenseNumber(?string $LicenseNumber) : static
    {
        $new = clone $this;
        $new->LicenseNumber = $LicenseNumber;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getCertificateNumber() : ?string
    {
        return $this->CertificateNumber;
    }

    /**
     * @param null | string $CertificateNumber
     * @return static
     */
    public function withCertificateNumber(?string $CertificateNumber) : static
    {
        $new = clone $this;
        $new->CertificateNumber = $CertificateNumber;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getInvoiceNumber() : ?string
    {
        return $this->InvoiceNumber;
    }

    /**
     * @param null | string $InvoiceNumber
     * @return static
     */
    public function withInvoiceNumber(?string $InvoiceNumber) : static
    {
        $new = clone $this;
        $new->InvoiceNumber = $InvoiceNumber;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getOtherDescribe() : ?string
    {
        return $this->OtherDescribe;
    }

    /**
     * @param null | string $OtherDescribe
     * @return static
     */
    public function withOtherDescribe(?string $OtherDescribe) : static
    {
        $new = clone $this;
        $new->OtherDescribe = $OtherDescribe;

        return $new;
    }

    /**
     * @return \Knightar\StampsSoapClient\Type\ArrayOfCustomsLine
     */
    public function getCustomsLines() : \Knightar\StampsSoapClient\Type\ArrayOfCustomsLine
    {
        return $this->CustomsLines;
    }

    /**
     * @param \Knightar\StampsSoapClient\Type\ArrayOfCustomsLine $CustomsLines
     * @return static
     */
    public function withCustomsLines(\Knightar\StampsSoapClient\Type\ArrayOfCustomsLine $CustomsLines) : static
    {
        $new = clone $this;
        $new->CustomsLines = $CustomsLines;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getCustomsSigner() : ?string
    {
        return $this->CustomsSigner;
    }

    /**
     * @param null | string $CustomsSigner
     * @return static
     */
    public function withCustomsSigner(?string $CustomsSigner) : static
    {
        $new = clone $this;
        $new->CustomsSigner = $CustomsSigner;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getPassportNumber() : ?string
    {
        return $this->PassportNumber;
    }

    /**
     * @param null | string $PassportNumber
     * @return static
     */
    public function withPassportNumber(?string $PassportNumber) : static
    {
        $new = clone $this;
        $new->PassportNumber = $PassportNumber;

        return $new;
    }

    /**
     * @return null | \DateTimeInterface
     */
    public function getPassportIssueDate() : ?\DateTimeInterface
    {
        return $this->PassportIssueDate;
    }

    /**
     * @param null | \DateTimeInterface $PassportIssueDate
     * @return static
     */
    public function withPassportIssueDate(?\DateTimeInterface $PassportIssueDate) : static
    {
        $new = clone $this;
        $new->PassportIssueDate = $PassportIssueDate;

        return $new;
    }

    /**
     * @return null | \DateTimeInterface
     */
    public function getPassportExpiryDate() : ?\DateTimeInterface
    {
        return $this->PassportExpiryDate;
    }

    /**
     * @param null | \DateTimeInterface $PassportExpiryDate
     * @return static
     */
    public function withPassportExpiryDate(?\DateTimeInterface $PassportExpiryDate) : static
    {
        $new = clone $this;
        $new->PassportExpiryDate = $PassportExpiryDate;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getImportLicenseNumber() : ?string
    {
        return $this->ImportLicenseNumber;
    }

    /**
     * @param null | string $ImportLicenseNumber
     * @return static
     */
    public function withImportLicenseNumber(?string $ImportLicenseNumber) : static
    {
        $new = clone $this;
        $new->ImportLicenseNumber = $ImportLicenseNumber;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getSendersCustomsReference() : ?string
    {
        return $this->SendersCustomsReference;
    }

    /**
     * @param null | string $SendersCustomsReference
     * @return static
     */
    public function withSendersCustomsReference(?string $SendersCustomsReference) : static
    {
        $new = clone $this;
        $new->SendersCustomsReference = $SendersCustomsReference;

        return $new;
    }
}

