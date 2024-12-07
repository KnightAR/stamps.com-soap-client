<?php

namespace Knightar\StampsSoapClient\Type;

use Phpro\SoapClient\Type\ResultInterface;

class CreateManifestResponse implements ResultInterface
{
    /**
     * @var string
     */
    private string $Authenticator;

    /**
     * @var null | string
     */
    private ?string $IntegratorTxID = null;

    /**
     * @var \Knightar\StampsSoapClient\Type\ArrayOfEndOfDayManifest
     */
    private \Knightar\StampsSoapClient\Type\ArrayOfEndOfDayManifest $EndOfDayManifests;

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
     * @return null | string
     */
    public function getIntegratorTxID() : ?string
    {
        return $this->IntegratorTxID;
    }

    /**
     * @param null | string $IntegratorTxID
     * @return static
     */
    public function withIntegratorTxID(?string $IntegratorTxID) : static
    {
        $new = clone $this;
        $new->IntegratorTxID = $IntegratorTxID;

        return $new;
    }

    /**
     * @return \Knightar\StampsSoapClient\Type\ArrayOfEndOfDayManifest
     */
    public function getEndOfDayManifests() : \Knightar\StampsSoapClient\Type\ArrayOfEndOfDayManifest
    {
        return $this->EndOfDayManifests;
    }

    /**
     * @param \Knightar\StampsSoapClient\Type\ArrayOfEndOfDayManifest $EndOfDayManifests
     * @return static
     */
    public function withEndOfDayManifests(\Knightar\StampsSoapClient\Type\ArrayOfEndOfDayManifest $EndOfDayManifests) : static
    {
        $new = clone $this;
        $new->EndOfDayManifests = $EndOfDayManifests;

        return $new;
    }
}

