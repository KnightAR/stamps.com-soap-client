<?php

namespace Knightar\StampsSoapClient\Type;

use Phpro\SoapClient\Type\ResultInterface;

class CreateEnvelopeIndiciumResponse implements ResultInterface
{
    /**
     * @var string
     */
    private string $Authenticator;

    /**
     * @var string
     */
    private string $IntegratorTxID;

    /**
     * @var null | string
     */
    private ?string $TrackingNumber = null;

    /**
     * @var \Knightar\StampsSoapClient\Type\RateV46
     */
    private \Knightar\StampsSoapClient\Type\RateV46 $Rate;

    /**
     * @var string
     */
    private string $StampsTxID;

    /**
     * @var string
     */
    private string $URL;

    /**
     * @var \Knightar\StampsSoapClient\Type\PostageBalance
     */
    private \Knightar\StampsSoapClient\Type\PostageBalance $PostageBalance;

    /**
     * @var string
     */
    private string $Mac;

    /**
     * @var string
     */
    private string $PostageHash;

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
     * @var null | mixed
     */
    private mixed $IndiciumData = null;

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
    public function getIntegratorTxID() : string
    {
        return $this->IntegratorTxID;
    }

    /**
     * @param string $IntegratorTxID
     * @return static
     */
    public function withIntegratorTxID(string $IntegratorTxID) : static
    {
        $new = clone $this;
        $new->IntegratorTxID = $IntegratorTxID;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getTrackingNumber() : ?string
    {
        return $this->TrackingNumber;
    }

    /**
     * @param null | string $TrackingNumber
     * @return static
     */
    public function withTrackingNumber(?string $TrackingNumber) : static
    {
        $new = clone $this;
        $new->TrackingNumber = $TrackingNumber;

        return $new;
    }

    /**
     * @return \Knightar\StampsSoapClient\Type\RateV46
     */
    public function getRate() : \Knightar\StampsSoapClient\Type\RateV46
    {
        return $this->Rate;
    }

    /**
     * @param \Knightar\StampsSoapClient\Type\RateV46 $Rate
     * @return static
     */
    public function withRate(\Knightar\StampsSoapClient\Type\RateV46 $Rate) : static
    {
        $new = clone $this;
        $new->Rate = $Rate;

        return $new;
    }

    /**
     * @return string
     */
    public function getStampsTxID() : string
    {
        return $this->StampsTxID;
    }

    /**
     * @param string $StampsTxID
     * @return static
     */
    public function withStampsTxID(string $StampsTxID) : static
    {
        $new = clone $this;
        $new->StampsTxID = $StampsTxID;

        return $new;
    }

    /**
     * @return string
     */
    public function getURL() : string
    {
        return $this->URL;
    }

    /**
     * @param string $URL
     * @return static
     */
    public function withURL(string $URL) : static
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
     * @return string
     */
    public function getPostageHash() : string
    {
        return $this->PostageHash;
    }

    /**
     * @param string $PostageHash
     * @return static
     */
    public function withPostageHash(string $PostageHash) : static
    {
        $new = clone $this;
        $new->PostageHash = $PostageHash;

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
     * @return null | mixed
     */
    public function getIndiciumData() : mixed
    {
        return $this->IndiciumData;
    }

    /**
     * @param null | mixed $IndiciumData
     * @return static
     */
    public function withIndiciumData(mixed $IndiciumData) : static
    {
        $new = clone $this;
        $new->IndiciumData = $IndiciumData;

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

