<?php

namespace Knightar\StampsSoapClient\Type;

use Phpro\SoapClient\Type\ResultInterface;

class ChangePlanResponse implements ResultInterface
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

