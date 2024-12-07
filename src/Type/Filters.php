<?php

namespace Knightar\StampsSoapClient\Type;

class Filters
{
    /**
     * @var null | \DateTimeInterface
     */
    private ?\DateTimeInterface $PrintDateMin = null;

    /**
     * @var null | \DateTimeInterface
     */
    private ?\DateTimeInterface $PrintDateMax = null;

    /**
     * @var null | \Knightar\StampsSoapClient\Type\ArrayOfSearchFor
     */
    private ?\Knightar\StampsSoapClient\Type\ArrayOfSearchFor $SearchCriteria = null;

    /**
     * @return null | \DateTimeInterface
     */
    public function getPrintDateMin() : ?\DateTimeInterface
    {
        return $this->PrintDateMin;
    }

    /**
     * @param null | \DateTimeInterface $PrintDateMin
     * @return static
     */
    public function withPrintDateMin(?\DateTimeInterface $PrintDateMin) : static
    {
        $new = clone $this;
        $new->PrintDateMin = $PrintDateMin;

        return $new;
    }

    /**
     * @return null | \DateTimeInterface
     */
    public function getPrintDateMax() : ?\DateTimeInterface
    {
        return $this->PrintDateMax;
    }

    /**
     * @param null | \DateTimeInterface $PrintDateMax
     * @return static
     */
    public function withPrintDateMax(?\DateTimeInterface $PrintDateMax) : static
    {
        $new = clone $this;
        $new->PrintDateMax = $PrintDateMax;

        return $new;
    }

    /**
     * @return null | \Knightar\StampsSoapClient\Type\ArrayOfSearchFor
     */
    public function getSearchCriteria() : ?\Knightar\StampsSoapClient\Type\ArrayOfSearchFor
    {
        return $this->SearchCriteria;
    }

    /**
     * @param null | \Knightar\StampsSoapClient\Type\ArrayOfSearchFor $SearchCriteria
     * @return static
     */
    public function withSearchCriteria(?\Knightar\StampsSoapClient\Type\ArrayOfSearchFor $SearchCriteria) : static
    {
        $new = clone $this;
        $new->SearchCriteria = $SearchCriteria;

        return $new;
    }
}

