<?php

namespace Knightar\StampsSoapClient\Type;

class RefundStatusV1
{
    /**
     * @var string
     */
    private string $PostageRefundId;

    /**
     * @var null | int
     */
    private ?int $ClaimNumber = null;

    /**
     * @var \DateTimeInterface
     */
    private \DateTimeInterface $RequestDate;

    /**
     * @var 'Pending' | 'Processing' | 'Complete' | 'Duplicate'
     */
    private string $PostageRefundStatus;

    /**
     * @var null | \DateTimeInterface
     */
    private ?\DateTimeInterface $EstimatedPostageRefundCompletionDate = null;

    /**
     * @var float
     */
    private float $PostageAmountRequested;

    /**
     * @var float
     */
    private float $PostageAmountApproved;

    /**
     * @var null | string
     */
    private ?string $PostageRefundResult = null;

    /**
     * @var null | 'Pending' | 'Processing' | 'Complete' | 'Duplicate'
     */
    private ?string $InsuranceRefundStatus = null;

    /**
     * @var null | \DateTimeInterface
     */
    private ?\DateTimeInterface $EstimatedInsuranceRefundCompletionDate = null;

    /**
     * @var null | float
     */
    private ?float $InsuranceAmountRequested = null;

    /**
     * @var null | float
     */
    private ?float $InsuranceAmountApproved = null;

    /**
     * @return string
     */
    public function getPostageRefundId() : string
    {
        return $this->PostageRefundId;
    }

    /**
     * @param string $PostageRefundId
     * @return static
     */
    public function withPostageRefundId(string $PostageRefundId) : static
    {
        $new = clone $this;
        $new->PostageRefundId = $PostageRefundId;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getClaimNumber() : ?int
    {
        return $this->ClaimNumber;
    }

    /**
     * @param null | int $ClaimNumber
     * @return static
     */
    public function withClaimNumber(?int $ClaimNumber) : static
    {
        $new = clone $this;
        $new->ClaimNumber = $ClaimNumber;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getRequestDate() : \DateTimeInterface
    {
        return $this->RequestDate;
    }

    /**
     * @param \DateTimeInterface $RequestDate
     * @return static
     */
    public function withRequestDate(\DateTimeInterface $RequestDate) : static
    {
        $new = clone $this;
        $new->RequestDate = $RequestDate;

        return $new;
    }

    /**
     * @return 'Pending' | 'Processing' | 'Complete' | 'Duplicate'
     */
    public function getPostageRefundStatus() : string
    {
        return $this->PostageRefundStatus;
    }

    /**
     * @param 'Pending' | 'Processing' | 'Complete' | 'Duplicate' $PostageRefundStatus
     * @return static
     */
    public function withPostageRefundStatus(string $PostageRefundStatus) : static
    {
        $new = clone $this;
        $new->PostageRefundStatus = $PostageRefundStatus;

        return $new;
    }

    /**
     * @return null | \DateTimeInterface
     */
    public function getEstimatedPostageRefundCompletionDate() : ?\DateTimeInterface
    {
        return $this->EstimatedPostageRefundCompletionDate;
    }

    /**
     * @param null | \DateTimeInterface $EstimatedPostageRefundCompletionDate
     * @return static
     */
    public function withEstimatedPostageRefundCompletionDate(?\DateTimeInterface $EstimatedPostageRefundCompletionDate) : static
    {
        $new = clone $this;
        $new->EstimatedPostageRefundCompletionDate = $EstimatedPostageRefundCompletionDate;

        return $new;
    }

    /**
     * @return float
     */
    public function getPostageAmountRequested() : float
    {
        return $this->PostageAmountRequested;
    }

    /**
     * @param float $PostageAmountRequested
     * @return static
     */
    public function withPostageAmountRequested(float $PostageAmountRequested) : static
    {
        $new = clone $this;
        $new->PostageAmountRequested = $PostageAmountRequested;

        return $new;
    }

    /**
     * @return float
     */
    public function getPostageAmountApproved() : float
    {
        return $this->PostageAmountApproved;
    }

    /**
     * @param float $PostageAmountApproved
     * @return static
     */
    public function withPostageAmountApproved(float $PostageAmountApproved) : static
    {
        $new = clone $this;
        $new->PostageAmountApproved = $PostageAmountApproved;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getPostageRefundResult() : ?string
    {
        return $this->PostageRefundResult;
    }

    /**
     * @param null | string $PostageRefundResult
     * @return static
     */
    public function withPostageRefundResult(?string $PostageRefundResult) : static
    {
        $new = clone $this;
        $new->PostageRefundResult = $PostageRefundResult;

        return $new;
    }

    /**
     * @return null | 'Pending' | 'Processing' | 'Complete' | 'Duplicate'
     */
    public function getInsuranceRefundStatus() : ?string
    {
        return $this->InsuranceRefundStatus;
    }

    /**
     * @param null | 'Pending' | 'Processing' | 'Complete' | 'Duplicate' $InsuranceRefundStatus
     * @return static
     */
    public function withInsuranceRefundStatus(?string $InsuranceRefundStatus) : static
    {
        $new = clone $this;
        $new->InsuranceRefundStatus = $InsuranceRefundStatus;

        return $new;
    }

    /**
     * @return null | \DateTimeInterface
     */
    public function getEstimatedInsuranceRefundCompletionDate() : ?\DateTimeInterface
    {
        return $this->EstimatedInsuranceRefundCompletionDate;
    }

    /**
     * @param null | \DateTimeInterface $EstimatedInsuranceRefundCompletionDate
     * @return static
     */
    public function withEstimatedInsuranceRefundCompletionDate(?\DateTimeInterface $EstimatedInsuranceRefundCompletionDate) : static
    {
        $new = clone $this;
        $new->EstimatedInsuranceRefundCompletionDate = $EstimatedInsuranceRefundCompletionDate;

        return $new;
    }

    /**
     * @return null | float
     */
    public function getInsuranceAmountRequested() : ?float
    {
        return $this->InsuranceAmountRequested;
    }

    /**
     * @param null | float $InsuranceAmountRequested
     * @return static
     */
    public function withInsuranceAmountRequested(?float $InsuranceAmountRequested) : static
    {
        $new = clone $this;
        $new->InsuranceAmountRequested = $InsuranceAmountRequested;

        return $new;
    }

    /**
     * @return null | float
     */
    public function getInsuranceAmountApproved() : ?float
    {
        return $this->InsuranceAmountApproved;
    }

    /**
     * @param null | float $InsuranceAmountApproved
     * @return static
     */
    public function withInsuranceAmountApproved(?float $InsuranceAmountApproved) : static
    {
        $new = clone $this;
        $new->InsuranceAmountApproved = $InsuranceAmountApproved;

        return $new;
    }
}

