<?php

namespace Knightar\StampsSoapClient\Type;

class ContainerLabelV1
{
    /**
     * @var string
     */
    private string $ContainerTrackingNumber;

    /**
     * @var string
     */
    private string $ContainerUrl;

    /**
     * @var string
     */
    private string $StampsTxId;

    /**
     * @return string
     */
    public function getContainerTrackingNumber() : string
    {
        return $this->ContainerTrackingNumber;
    }

    /**
     * @param string $ContainerTrackingNumber
     * @return static
     */
    public function withContainerTrackingNumber(string $ContainerTrackingNumber) : static
    {
        $new = clone $this;
        $new->ContainerTrackingNumber = $ContainerTrackingNumber;

        return $new;
    }

    /**
     * @return string
     */
    public function getContainerUrl() : string
    {
        return $this->ContainerUrl;
    }

    /**
     * @param string $ContainerUrl
     * @return static
     */
    public function withContainerUrl(string $ContainerUrl) : static
    {
        $new = clone $this;
        $new->ContainerUrl = $ContainerUrl;

        return $new;
    }

    /**
     * @return string
     */
    public function getStampsTxId() : string
    {
        return $this->StampsTxId;
    }

    /**
     * @param string $StampsTxId
     * @return static
     */
    public function withStampsTxId(string $StampsTxId) : static
    {
        $new = clone $this;
        $new->StampsTxId = $StampsTxId;

        return $new;
    }
}

