<?php

namespace Knightar\StampsSoapClient\Type;

use Phpro\SoapClient\Type\ResultInterface;

class EnumNetStampsLayoutsResponse implements ResultInterface
{
    /**
     * @var string
     */
    private string $Authenticator;

    /**
     * @var \Knightar\StampsSoapClient\Type\ArrayOfNetStampsLayout
     */
    private \Knightar\StampsSoapClient\Type\ArrayOfNetStampsLayout $Layouts;

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
     * @return \Knightar\StampsSoapClient\Type\ArrayOfNetStampsLayout
     */
    public function getLayouts() : \Knightar\StampsSoapClient\Type\ArrayOfNetStampsLayout
    {
        return $this->Layouts;
    }

    /**
     * @param \Knightar\StampsSoapClient\Type\ArrayOfNetStampsLayout $Layouts
     * @return static
     */
    public function withLayouts(\Knightar\StampsSoapClient\Type\ArrayOfNetStampsLayout $Layouts) : static
    {
        $new = clone $this;
        $new->Layouts = $Layouts;

        return $new;
    }
}

