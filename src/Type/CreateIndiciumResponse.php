<?php

namespace Knightar\StampsSoapClient\Type;

use Phpro\SoapClient\Type\ResultInterface;

class CreateIndiciumResponse implements ResultInterface
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
     * @var null | string
     */
    private ?string $EncodedTrackingNumber = null;

    /**
     * @var null | string
     */
    private ?string $BannerText = null;

    /**
     * @var null | string
     */
    private ?string $TrailingSuperScript = null;

    /**
     * @var null | string
     */
    private ?string $ReturnTrackingNumber = null;

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
     * @var null | \Knightar\StampsSoapClient\Type\ArrayOfBase64Binary
     */
    private ?\Knightar\StampsSoapClient\Type\ArrayOfBase64Binary $ImageData = null;

    /**
     * @var null | \Knightar\StampsSoapClient\Type\HoldForPickUpFacility
     */
    private ?\Knightar\StampsSoapClient\Type\HoldForPickUpFacility $HoldForPickUpFacility = null;

    /**
     * @var null | string
     */
    private ?string $FormURL = null;

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
     * @var null | string
     */
    private ?string $labelCategory = null;

    /**
     * @var null | mixed
     */
    private mixed $IndiciumData = null;

    /**
     * @var null | string
     */
    private ?string $LabelID = null;

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
     * @return null | string
     */
    public function getEncodedTrackingNumber() : ?string
    {
        return $this->EncodedTrackingNumber;
    }

    /**
     * @param null | string $EncodedTrackingNumber
     * @return static
     */
    public function withEncodedTrackingNumber(?string $EncodedTrackingNumber) : static
    {
        $new = clone $this;
        $new->EncodedTrackingNumber = $EncodedTrackingNumber;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getBannerText() : ?string
    {
        return $this->BannerText;
    }

    /**
     * @param null | string $BannerText
     * @return static
     */
    public function withBannerText(?string $BannerText) : static
    {
        $new = clone $this;
        $new->BannerText = $BannerText;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getTrailingSuperScript() : ?string
    {
        return $this->TrailingSuperScript;
    }

    /**
     * @param null | string $TrailingSuperScript
     * @return static
     */
    public function withTrailingSuperScript(?string $TrailingSuperScript) : static
    {
        $new = clone $this;
        $new->TrailingSuperScript = $TrailingSuperScript;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getReturnTrackingNumber() : ?string
    {
        return $this->ReturnTrackingNumber;
    }

    /**
     * @param null | string $ReturnTrackingNumber
     * @return static
     */
    public function withReturnTrackingNumber(?string $ReturnTrackingNumber) : static
    {
        $new = clone $this;
        $new->ReturnTrackingNumber = $ReturnTrackingNumber;

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

    /**
     * @return null | \Knightar\StampsSoapClient\Type\HoldForPickUpFacility
     */
    public function getHoldForPickUpFacility() : ?\Knightar\StampsSoapClient\Type\HoldForPickUpFacility
    {
        return $this->HoldForPickUpFacility;
    }

    /**
     * @param null | \Knightar\StampsSoapClient\Type\HoldForPickUpFacility $HoldForPickUpFacility
     * @return static
     */
    public function withHoldForPickUpFacility(?\Knightar\StampsSoapClient\Type\HoldForPickUpFacility $HoldForPickUpFacility) : static
    {
        $new = clone $this;
        $new->HoldForPickUpFacility = $HoldForPickUpFacility;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getFormURL() : ?string
    {
        return $this->FormURL;
    }

    /**
     * @param null | string $FormURL
     * @return static
     */
    public function withFormURL(?string $FormURL) : static
    {
        $new = clone $this;
        $new->FormURL = $FormURL;

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
     * @return null | string
     */
    public function getLabelCategory() : ?string
    {
        return $this->labelCategory;
    }

    /**
     * @param null | string $labelCategory
     * @return static
     */
    public function withLabelCategory(?string $labelCategory) : static
    {
        $new = clone $this;
        $new->labelCategory = $labelCategory;

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
     * @return null | string
     */
    public function getLabelID() : ?string
    {
        return $this->LabelID;
    }

    /**
     * @param null | string $LabelID
     * @return static
     */
    public function withLabelID(?string $LabelID) : static
    {
        $new = clone $this;
        $new->LabelID = $LabelID;

        return $new;
    }
}

