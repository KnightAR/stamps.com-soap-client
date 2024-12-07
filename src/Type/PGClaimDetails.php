<?php

namespace Knightar\StampsSoapClient\Type;

class PGClaimDetails
{
    /**
     * @var 'Damaged' | 'Lost'
     */
    private string $ClaimType;

    /**
     * @var float
     */
    private float $AmountRequested;

    /**
     * @var float
     */
    private float $AmountApproved;

    /**
     * @var \DateTimeInterface
     */
    private \DateTimeInterface $EventDate;

    /**
     * @var 'Unknown' | 'Received' | 'PendingRecipientVerification' | 'PendingAdditionalInfo' | 'PendingReview' | 'Approved' | 'Closed'
     */
    private string $Status;

    /**
     * @var null | 'Unknown' | 'RecipientDeniedClaim' | 'InvalidProofOfValue' | 'InvalidProofOfDamage' | 'InvalidProofOfLoss' | 'InvalidProofOfValueAndDamage' | 'InvalidProofOfValueAndLoss' | 'Other' | 'Auto' | 'Manual' | 'Paid' | 'PendingPayment' | 'ClaimExpired' | 'ByCustomer' | 'ByAgent'
     */
    private ?string $StatusDetail = null;

    /**
     * @return 'Damaged' | 'Lost'
     */
    public function getClaimType() : string
    {
        return $this->ClaimType;
    }

    /**
     * @param 'Damaged' | 'Lost' $ClaimType
     * @return static
     */
    public function withClaimType(string $ClaimType) : static
    {
        $new = clone $this;
        $new->ClaimType = $ClaimType;

        return $new;
    }

    /**
     * @return float
     */
    public function getAmountRequested() : float
    {
        return $this->AmountRequested;
    }

    /**
     * @param float $AmountRequested
     * @return static
     */
    public function withAmountRequested(float $AmountRequested) : static
    {
        $new = clone $this;
        $new->AmountRequested = $AmountRequested;

        return $new;
    }

    /**
     * @return float
     */
    public function getAmountApproved() : float
    {
        return $this->AmountApproved;
    }

    /**
     * @param float $AmountApproved
     * @return static
     */
    public function withAmountApproved(float $AmountApproved) : static
    {
        $new = clone $this;
        $new->AmountApproved = $AmountApproved;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getEventDate() : \DateTimeInterface
    {
        return $this->EventDate;
    }

    /**
     * @param \DateTimeInterface $EventDate
     * @return static
     */
    public function withEventDate(\DateTimeInterface $EventDate) : static
    {
        $new = clone $this;
        $new->EventDate = $EventDate;

        return $new;
    }

    /**
     * @return 'Unknown' | 'Received' | 'PendingRecipientVerification' | 'PendingAdditionalInfo' | 'PendingReview' | 'Approved' | 'Closed'
     */
    public function getStatus() : string
    {
        return $this->Status;
    }

    /**
     * @param 'Unknown' | 'Received' | 'PendingRecipientVerification' | 'PendingAdditionalInfo' | 'PendingReview' | 'Approved' | 'Closed' $Status
     * @return static
     */
    public function withStatus(string $Status) : static
    {
        $new = clone $this;
        $new->Status = $Status;

        return $new;
    }

    /**
     * @return null | 'Unknown' | 'RecipientDeniedClaim' | 'InvalidProofOfValue' | 'InvalidProofOfDamage' | 'InvalidProofOfLoss' | 'InvalidProofOfValueAndDamage' | 'InvalidProofOfValueAndLoss' | 'Other' | 'Auto' | 'Manual' | 'Paid' | 'PendingPayment' | 'ClaimExpired' | 'ByCustomer' | 'ByAgent'
     */
    public function getStatusDetail() : ?string
    {
        return $this->StatusDetail;
    }

    /**
     * @param null | 'Unknown' | 'RecipientDeniedClaim' | 'InvalidProofOfValue' | 'InvalidProofOfDamage' | 'InvalidProofOfLoss' | 'InvalidProofOfValueAndDamage' | 'InvalidProofOfValueAndLoss' | 'Other' | 'Auto' | 'Manual' | 'Paid' | 'PendingPayment' | 'ClaimExpired' | 'ByCustomer' | 'ByAgent' $StatusDetail
     * @return static
     */
    public function withStatusDetail(?string $StatusDetail) : static
    {
        $new = clone $this;
        $new->StatusDetail = $StatusDetail;

        return $new;
    }
}

