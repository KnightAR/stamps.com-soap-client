<?php

namespace Knightar\StampsSoapClient\Type;

use Phpro\SoapClient\Type\ResultInterface;

class CreateNetStampsIndiciaResponse implements ResultInterface
{
    /**
     * @var string
     */
    private string $Authenticator;

    /**
     * @var string
     */
    private string $IntegratorTxId;

    /**
     * @var string
     */
    private string $StampsTxId;

    /**
     * @var null | string
     */
    private ?string $URL = null;

    /**
     * @var \Knightar\StampsSoapClient\Type\PostageBalance
     */
    private \Knightar\StampsSoapClient\Type\PostageBalance $PostageBalance;

    /**
     * @var 'Success' | 'PartialSuccess' | 'Failed'
     */
    private string $NetstampsStatus;

    /**
     * @var int
     */
    private int $NetstampsIssued;

    /**
     * @var string
     */
    private string $ErrorReason;

    /**
     * @var string
     */
    private string $Mac;

    /**
     * @var null | \Knightar\StampsSoapClient\Type\ArrayOfIndiciumData
     */
    private ?\Knightar\StampsSoapClient\Type\ArrayOfIndiciumData $IndiciaData = null;

    /**
     * @var null | string
     */
    private ?string $PrintLayout = null;

    /**
     * @var null | string
     */
    private ?string $Reference1 = null;

    /**
     * @var null | string
     */
    private ?string $Reference2 = null;

    /**
     * @var null | string
     */
    private ?string $Reference3 = null;

    /**
     * @var null | string
     */
    private ?string $Reference4 = null;

    /**
     * @var null | \Knightar\StampsSoapClient\Type\ArrayOfBase64Binary
     */
    private ?\Knightar\StampsSoapClient\Type\ArrayOfBase64Binary $ImageData = null;

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
     * @return string
     */
    public function getIntegratorTxId() : string
    {
        return $this->IntegratorTxId;
    }

    /**
     * @param string $IntegratorTxId
     * @return static
     */
    public function withIntegratorTxId(string $IntegratorTxId) : static
    {
        $new = clone $this;
        $new->IntegratorTxId = $IntegratorTxId;

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

    /**
     * @return null | string
     */
    public function getURL() : ?string
    {
        return $this->URL;
    }

    /**
     * @param null | string $URL
     * @return static
     */
    public function withURL(?string $URL) : static
    {
        $new = clone $this;
        $new->URL = $URL;

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
     * @return 'Success' | 'PartialSuccess' | 'Failed'
     */
    public function getNetstampsStatus() : string
    {
        return $this->NetstampsStatus;
    }

    /**
     * @param 'Success' | 'PartialSuccess' | 'Failed' $NetstampsStatus
     * @return static
     */
    public function withNetstampsStatus(string $NetstampsStatus) : static
    {
        $new = clone $this;
        $new->NetstampsStatus = $NetstampsStatus;

        return $new;
    }

    /**
     * @return int
     */
    public function getNetstampsIssued() : int
    {
        return $this->NetstampsIssued;
    }

    /**
     * @param int $NetstampsIssued
     * @return static
     */
    public function withNetstampsIssued(int $NetstampsIssued) : static
    {
        $new = clone $this;
        $new->NetstampsIssued = $NetstampsIssued;

        return $new;
    }

    /**
     * @return string
     */
    public function getErrorReason() : string
    {
        return $this->ErrorReason;
    }

    /**
     * @param string $ErrorReason
     * @return static
     */
    public function withErrorReason(string $ErrorReason) : static
    {
        $new = clone $this;
        $new->ErrorReason = $ErrorReason;

        return $new;
    }

    /**
     * @return string
     */
    public function getMac() : string
    {
        return $this->Mac;
    }

    /**
     * @param string $Mac
     * @return static
     */
    public function withMac(string $Mac) : static
    {
        $new = clone $this;
        $new->Mac = $Mac;

        return $new;
    }

    /**
     * @return null | \Knightar\StampsSoapClient\Type\ArrayOfIndiciumData
     */
    public function getIndiciaData() : ?\Knightar\StampsSoapClient\Type\ArrayOfIndiciumData
    {
        return $this->IndiciaData;
    }

    /**
     * @param null | \Knightar\StampsSoapClient\Type\ArrayOfIndiciumData $IndiciaData
     * @return static
     */
    public function withIndiciaData(?\Knightar\StampsSoapClient\Type\ArrayOfIndiciumData $IndiciaData) : static
    {
        $new = clone $this;
        $new->IndiciaData = $IndiciaData;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getPrintLayout() : ?string
    {
        return $this->PrintLayout;
    }

    /**
     * @param null | string $PrintLayout
     * @return static
     */
    public function withPrintLayout(?string $PrintLayout) : static
    {
        $new = clone $this;
        $new->PrintLayout = $PrintLayout;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getReference1() : ?string
    {
        return $this->Reference1;
    }

    /**
     * @param null | string $Reference1
     * @return static
     */
    public function withReference1(?string $Reference1) : static
    {
        $new = clone $this;
        $new->Reference1 = $Reference1;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getReference2() : ?string
    {
        return $this->Reference2;
    }

    /**
     * @param null | string $Reference2
     * @return static
     */
    public function withReference2(?string $Reference2) : static
    {
        $new = clone $this;
        $new->Reference2 = $Reference2;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getReference3() : ?string
    {
        return $this->Reference3;
    }

    /**
     * @param null | string $Reference3
     * @return static
     */
    public function withReference3(?string $Reference3) : static
    {
        $new = clone $this;
        $new->Reference3 = $Reference3;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getReference4() : ?string
    {
        return $this->Reference4;
    }

    /**
     * @param null | string $Reference4
     * @return static
     */
    public function withReference4(?string $Reference4) : static
    {
        $new = clone $this;
        $new->Reference4 = $Reference4;

        return $new;
    }

    /**
     * @return null | \Knightar\StampsSoapClient\Type\ArrayOfBase64Binary
     */
    public function getImageData() : ?\Knightar\StampsSoapClient\Type\ArrayOfBase64Binary
    {
        return $this->ImageData;
    }

    /**
     * @param null | \Knightar\StampsSoapClient\Type\ArrayOfBase64Binary $ImageData
     * @return static
     */
    public function withImageData(?\Knightar\StampsSoapClient\Type\ArrayOfBase64Binary $ImageData) : static
    {
        $new = clone $this;
        $new->ImageData = $ImageData;

        return $new;
    }
}

