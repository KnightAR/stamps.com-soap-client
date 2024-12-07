<?php

namespace Knightar\StampsSoapClient\Type;

use Phpro\SoapClient\Type\ResultInterface;

class ResubmitPurchaseResponse implements ResultInterface
{
    /**
     * @var string
     */
    private string $Authenticator;

    /**
     * @var int
     */
    private int $TransactionID;

    /**
     * @var float
     */
    private float $ChargedAmount;

    /**
     * @var float
     */
    private float $PendingAmount;

    /**
     * @var int
     */
    private int $WaitIntervalSeconds;

    /**
     * @var 'Pending' | 'Processing' | 'Success' | 'Rejected'
     */
    private string $PurchaseStatus;

    /**
     * @var null | string
     */
    private ?string $RejectionReason = null;

    /**
     * @return string
     */
    public function getAuthenticator() : string
    {
        return $this->Authenticator;
    }

    /**
     * @param string $Authenticator
     * @return static
     */
    public function withAuthenticator(string $Authenticator) : static
    {
        $new = clone $this;
        $new->Authenticator = $Authenticator;

        return $new;
    }

    /**
     * @return int
     */
    public function getTransactionID() : int
    {
        return $this->TransactionID;
    }

    /**
     * @param int $TransactionID
     * @return static
     */
    public function withTransactionID(int $TransactionID) : static
    {
        $new = clone $this;
        $new->TransactionID = $TransactionID;

        return $new;
    }

    /**
     * @return float
     */
    public function getChargedAmount() : float
    {
        return $this->ChargedAmount;
    }

    /**
     * @param float $ChargedAmount
     * @return static
     */
    public function withChargedAmount(float $ChargedAmount) : static
    {
        $new = clone $this;
        $new->ChargedAmount = $ChargedAmount;

        return $new;
    }

    /**
     * @return float
     */
    public function getPendingAmount() : float
    {
        return $this->PendingAmount;
    }

    /**
     * @param float $PendingAmount
     * @return static
     */
    public function withPendingAmount(float $PendingAmount) : static
    {
        $new = clone $this;
        $new->PendingAmount = $PendingAmount;

        return $new;
    }

    /**
     * @return int
     */
    public function getWaitIntervalSeconds() : int
    {
        return $this->WaitIntervalSeconds;
    }

    /**
     * @param int $WaitIntervalSeconds
     * @return static
     */
    public function withWaitIntervalSeconds(int $WaitIntervalSeconds) : static
    {
        $new = clone $this;
        $new->WaitIntervalSeconds = $WaitIntervalSeconds;

        return $new;
    }

    /**
     * @return 'Pending' | 'Processing' | 'Success' | 'Rejected'
     */
    public function getPurchaseStatus() : string
    {
        return $this->PurchaseStatus;
    }

    /**
     * @param 'Pending' | 'Processing' | 'Success' | 'Rejected' $PurchaseStatus
     * @return static
     */
    public function withPurchaseStatus(string $PurchaseStatus) : static
    {
        $new = clone $this;
        $new->PurchaseStatus = $PurchaseStatus;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getRejectionReason() : ?string
    {
        return $this->RejectionReason;
    }

    /**
     * @param null | string $RejectionReason
     * @return static
     */
    public function withRejectionReason(?string $RejectionReason) : static
    {
        $new = clone $this;
        $new->RejectionReason = $RejectionReason;

        return $new;
    }
}

