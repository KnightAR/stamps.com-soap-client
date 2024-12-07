<?php

namespace Knightar\StampsSoapClient\Type;

use Phpro\SoapClient\Type\ResultInterface;

class CreateMailingLabelIndiciaResponse implements ResultInterface
{
    /**
     * @var string
     */
    private string $Authenticator;

    /**
     * @var string
     */
    private string $StampsTxId;

    /**
     * @var string
     */
    private string $Url;

    /**
     * @var \Knightar\StampsSoapClient\Type\ArrayOfString
     */
    private \Knightar\StampsSoapClient\Type\ArrayOfString $ConfirmationNumbers;

    /**
     * @var \Knightar\StampsSoapClient\Type\PostageBalance
     */
    private \Knightar\StampsSoapClient\Type\PostageBalance $PostageBalance;

    /**
     * @var int
     */
    private int $IssuedLabelCount;

    /**
     * @var string
     */
    private string $ErrorReason;

    /**
     * @var string
     */
    private string $Mac;

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
    private ?\Knightar\StampsSoapClient\Type\ArrayOfBase64Binary $IndiciumData = null;

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
     * @return string
     */
    public function getUrl() : string
    {
        return $this->Url;
    }

    /**
     * @param string $Url
     * @return static
     */
    public function withUrl(string $Url) : static
    {
        $new = clone $this;
        $new->Url = $Url;

        return $new;
    }

    /**
     * @return \Knightar\StampsSoapClient\Type\ArrayOfString
     */
    public function getConfirmationNumbers() : \Knightar\StampsSoapClient\Type\ArrayOfString
    {
        return $this->ConfirmationNumbers;
    }

    /**
     * @param \Knightar\StampsSoapClient\Type\ArrayOfString $ConfirmationNumbers
     * @return static
     */
    public function withConfirmationNumbers(\Knightar\StampsSoapClient\Type\ArrayOfString $ConfirmationNumbers) : static
    {
        $new = clone $this;
        $new->ConfirmationNumbers = $ConfirmationNumbers;

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
     * @return int
     */
    public function getIssuedLabelCount() : int
    {
        return $this->IssuedLabelCount;
    }

    /**
     * @param int $IssuedLabelCount
     * @return static
     */
    public function withIssuedLabelCount(int $IssuedLabelCount) : static
    {
        $new = clone $this;
        $new->IssuedLabelCount = $IssuedLabelCount;

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
    public function getIndiciumData() : ?\Knightar\StampsSoapClient\Type\ArrayOfBase64Binary
    {
        return $this->IndiciumData;
    }

    /**
     * @param null | \Knightar\StampsSoapClient\Type\ArrayOfBase64Binary $IndiciumData
     * @return static
     */
    public function withIndiciumData(?\Knightar\StampsSoapClient\Type\ArrayOfBase64Binary $IndiciumData) : static
    {
        $new = clone $this;
        $new->IndiciumData = $IndiciumData;

        return $new;
    }
}

