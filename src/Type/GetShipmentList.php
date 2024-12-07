<?php

namespace Knightar\StampsSoapClient\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetShipmentList implements RequestInterface
{
    /**
     * @var null | string
     */
    private ?string $Authenticator = null;

    /**
     * @var null | \Knightar\StampsSoapClient\Type\Credentials
     */
    private ?\Knightar\StampsSoapClient\Type\Credentials $Credentials = null;

    /**
     * @var null | int
     */
    private ?int $ShipmentsPerPage = null;

    /**
     * @var \Knightar\StampsSoapClient\Type\Filters
     */
    private \Knightar\StampsSoapClient\Type\Filters $Filters;

    /**
     * @var null | \Knightar\StampsSoapClient\Type\ArrayOfIncludeField
     */
    private ?\Knightar\StampsSoapClient\Type\ArrayOfIncludeField $IncludeFields = null;

    /**
     * Constructor
     *
     * @param \Knightar\StampsSoapClient\Type\Filters $Filters
     * @param null | \Knightar\StampsSoapClient\Type\ArrayOfIncludeField $IncludeFields
     * @param null | int $ShipmentsPerPage
     * @param null | string $Authenticator
     * @param null | \Knightar\StampsSoapClient\Type\Credentials $Credentials
     */
    public function __construct(
        \Knightar\StampsSoapClient\Type\Filters              $Filters,
        ?\Knightar\StampsSoapClient\Type\ArrayOfIncludeField $IncludeFields = null,
        ?int                                                 $ShipmentsPerPage = null,
        ?string                                              $Authenticator = null,
        ?\Knightar\StampsSoapClient\Type\Credentials         $Credentials = null
    )
    {
        $this->Authenticator = $Authenticator;
        $this->Credentials = $Credentials;
        $this->ShipmentsPerPage = $ShipmentsPerPage;
        $this->Filters = $Filters;
        $this->IncludeFields = $IncludeFields;
    }

    /**
     * @return null | string
     */
    public function getAuthenticator() : ?string
    {
        return $this->Authenticator;
    }

    /**
     * @param null | string $Authenticator
     * @return static
     */
    public function withAuthenticator(?string $Authenticator) : static
    {
        $new = clone $this;
        $new->Authenticator = $Authenticator;

        return $new;
    }

    /**
     * @return null | \Knightar\StampsSoapClient\Type\Credentials
     */
    public function getCredentials() : ?\Knightar\StampsSoapClient\Type\Credentials
    {
        return $this->Credentials;
    }

    /**
     * @param null | \Knightar\StampsSoapClient\Type\Credentials $Credentials
     * @return static
     */
    public function withCredentials(?\Knightar\StampsSoapClient\Type\Credentials $Credentials) : static
    {
        $new = clone $this;
        $new->Credentials = $Credentials;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getShipmentsPerPage() : ?int
    {
        return $this->ShipmentsPerPage;
    }

    /**
     * @param null | int $ShipmentsPerPage
     * @return static
     */
    public function withShipmentsPerPage(?int $ShipmentsPerPage) : static
    {
        $new = clone $this;
        $new->ShipmentsPerPage = $ShipmentsPerPage;

        return $new;
    }

    /**
     * @return \Knightar\StampsSoapClient\Type\Filters
     */
    public function getFilters() : \Knightar\StampsSoapClient\Type\Filters
    {
        return $this->Filters;
    }

    /**
     * @param \Knightar\StampsSoapClient\Type\Filters $Filters
     * @return static
     */
    public function withFilters(\Knightar\StampsSoapClient\Type\Filters $Filters) : static
    {
        $new = clone $this;
        $new->Filters = $Filters;

        return $new;
    }

    /**
     * @return null | \Knightar\StampsSoapClient\Type\ArrayOfIncludeField
     */
    public function getIncludeFields() : ?\Knightar\StampsSoapClient\Type\ArrayOfIncludeField
    {
        return $this->IncludeFields;
    }

    /**
     * @param null | \Knightar\StampsSoapClient\Type\ArrayOfIncludeField $IncludeFields
     * @return static
     */
    public function withIncludeFields(?\Knightar\StampsSoapClient\Type\ArrayOfIncludeField $IncludeFields) : static
    {
        $new = clone $this;
        $new->IncludeFields = $IncludeFields;

        return $new;
    }
}

