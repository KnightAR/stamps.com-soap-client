<?php

namespace Knightar\StampsSoapClient\Type;

class ArrayOfSearchFor
{
    /**
     * @var array<int<0,max>, 'All' | 'Refund' | 'Adjustments' | 'ClaimEligibleLostOrDamaged' | 'ClaimIneligible' | 'ClaimReceived' | 'ClaimPendingReview' | 'ClaimPendingAdditionalInfo' | 'ClaimApproved' | 'ClaimRejected' | 'OutstandingLabels' | 'PayOnUse' | 'DHLExpress' | 'FedEx' | 'PayOnUseReturn' | 'ClaimPendingRecipientVerification' | 'ClaimEligibleDamaged'>
     */
    private array $SearchFor;

    /**
     * @return array<int<0,max>, 'All' | 'Refund' | 'Adjustments' | 'ClaimEligibleLostOrDamaged' | 'ClaimIneligible' | 'ClaimReceived' | 'ClaimPendingReview' | 'ClaimPendingAdditionalInfo' | 'ClaimApproved' | 'ClaimRejected' | 'OutstandingLabels' | 'PayOnUse' | 'DHLExpress' | 'FedEx' | 'PayOnUseReturn' | 'ClaimPendingRecipientVerification' | 'ClaimEligibleDamaged'>
     */
    public function getSearchFor() : array
    {
        return $this->SearchFor;
    }

    /**
     * @param array<int<0,max>, 'All' | 'Refund' | 'Adjustments' | 'ClaimEligibleLostOrDamaged' | 'ClaimIneligible' | 'ClaimReceived' | 'ClaimPendingReview' | 'ClaimPendingAdditionalInfo' | 'ClaimApproved' | 'ClaimRejected' | 'OutstandingLabels' | 'PayOnUse' | 'DHLExpress' | 'FedEx' | 'PayOnUseReturn' | 'ClaimPendingRecipientVerification' | 'ClaimEligibleDamaged'> $SearchFor
     * @return static
     */
    public function withSearchFor(array $SearchFor) : static
    {
        $new = clone $this;
        $new->SearchFor = $SearchFor;

        return $new;
    }
}

