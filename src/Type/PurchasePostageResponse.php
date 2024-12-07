<?php

namespace Knightar\StampsSoapClient\Type;

use Phpro\SoapClient\Type\ResultInterface;

class PurchasePostageResponse implements ResultInterface
{
    /**
     * @var string
     */
    private string $Authenticator;

    /**
     * @var 'Pending' | 'Processing' | 'Success' | 'Rejected'
     */
    private string $PurchaseStatus;

    /**
     * @var int
     */
    private int $TransactionID;

    /**
     * @var \Knightar\StampsSoapClient\Type\PostageBalance
     */
    private \Knightar\StampsSoapClient\Type\PostageBalance $PostageBalance;

    /**
     * @var null | string
     */
    private ?string $RejectionReason = null;

    /**
     * @var bool
     */
    private bool $MIRequired;

    /**
     * @var null | string
     */
    private ?string $ProcessorTransactionID = null;

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
     * @return \Knightar\StampsSoapClient\Type\PostageBalance
     */
    public function getPostageBalance() : \Knightar\StampsSoapClient\Type\PostageBalance
    {
        return $this->PostageBalance;
    }

    /**
     * @param \Knightar\StampsSoapClient\Type\PostageBalance $PostageBalance
     * @return static
     */
    public function withPostageBalance(\Knightar\StampsSoapClient\Type\PostageBalance $PostageBalance) : static
    {
        $new = clone $this;
        $new->PostageBalance = $PostageBalance;

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

    /**
     * @return bool
     */
    public function getMIRequired() : bool
    {
        return $this->MIRequired;
    }

    /**
     * @param bool $MIRequired
     * @return static
     */
    public function withMIRequired(bool $MIRequired) : static
    {
        $new = clone $this;
        $new->MIRequired = $MIRequired;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getProcessorTransactionID() : ?string
    {
        return $this->ProcessorTransactionID;
    }

    /**
     * @param null | string $ProcessorTransactionID
     * @return static
     */
    public function withProcessorTransactionID(?string $ProcessorTransactionID) : static
    {
        $new = clone $this;
        $new->ProcessorTransactionID = $ProcessorTransactionID;

        return $new;
    }
}

