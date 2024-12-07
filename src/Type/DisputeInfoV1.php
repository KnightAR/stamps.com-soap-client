<?php

namespace Knightar\StampsSoapClient\Type;

class DisputeInfoV1
{
    /**
     * @var 'Pending' | 'Approved' | 'Rejected'
     */
    private string $DisputeStatus;

    /**
     * @var \DateTimeInterface
     */
    private \DateTimeInterface $DisputeCreateDate;

    /**
     * @var \DateTimeInterface
     */
    private \DateTimeInterface $DisputeLastUpdateDate;

    /**
     * @return 'Pending' | 'Approved' | 'Rejected'
     */
    public function getDisputeStatus() : string
    {
        return $this->DisputeStatus;
    }

    /**
     * @param 'Pending' | 'Approved' | 'Rejected' $DisputeStatus
     * @return static
     */
    public function withDisputeStatus(string $DisputeStatus) : static
    {
        $new = clone $this;
        $new->DisputeStatus = $DisputeStatus;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDisputeCreateDate() : \DateTimeInterface
    {
        return $this->DisputeCreateDate;
    }

    /**
     * @param \DateTimeInterface $DisputeCreateDate
     * @return static
     */
    public function withDisputeCreateDate(\DateTimeInterface $DisputeCreateDate) : static
    {
        $new = clone $this;
        $new->DisputeCreateDate = $DisputeCreateDate;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDisputeLastUpdateDate() : \DateTimeInterface
    {
        return $this->DisputeLastUpdateDate;
    }

    /**
     * @param \DateTimeInterface $DisputeLastUpdateDate
     * @return static
     */
    public function withDisputeLastUpdateDate(\DateTimeInterface $DisputeLastUpdateDate) : static
    {
        $new = clone $this;
        $new->DisputeLastUpdateDate = $DisputeLastUpdateDate;

        return $new;
    }
}

