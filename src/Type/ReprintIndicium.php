<?php

namespace Knightar\StampsSoapClient\Type;

use Phpro\SoapClient\Type\RequestInterface;

class ReprintIndicium implements RequestInterface
{
    /**
     * @var \Knightar\StampsSoapClient\Type\ReprintIndiciumRequest
     */
    private \Knightar\StampsSoapClient\Type\ReprintIndiciumRequest $indiciumRequest;

    /**
     * Constructor
     *
     * @param \Knightar\StampsSoapClient\Type\ReprintIndiciumRequest $indiciumRequest
     */
    public function __construct(\Knightar\StampsSoapClient\Type\ReprintIndiciumRequest $indiciumRequest)
    {
        $this->indiciumRequest = $indiciumRequest;
    }

    /**
     * @return \Knightar\StampsSoapClient\Type\ReprintIndiciumRequest
     */
    public function getIndiciumRequest() : \Knightar\StampsSoapClient\Type\ReprintIndiciumRequest
    {
        return $this->indiciumRequest;
    }

    /**
     * @param \Knightar\StampsSoapClient\Type\ReprintIndiciumRequest $indiciumRequest
     * @return static
     */
    public function withIndiciumRequest(\Knightar\StampsSoapClient\Type\ReprintIndiciumRequest $indiciumRequest) : static
    {
        $new = clone $this;
        $new->indiciumRequest = $indiciumRequest;

        return $new;
    }
}

