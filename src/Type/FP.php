<?php

namespace Knightar\StampsSoapClient\Type;

class FP
{
    /**
     * @var null | mixed
     */
    private mixed $FP1 = null;

    /**
     * @var null | mixed
     */
    private mixed $FP2 = null;

    /**
     * @var null | mixed
     */
    private mixed $FP3 = null;

    /**
     * @var null | mixed
     */
    private mixed $FP4 = null;

    /**
     * @var null | mixed
     */
    private mixed $FP5 = null;

    /**
     * @return null | mixed
     */
    public function getFP1() : mixed
    {
        return $this->FP1;
    }

    /**
     * @param null | mixed $FP1
     * @return static
     */
    public function withFP1(mixed $FP1) : static
    {
        $new = clone $this;
        $new->FP1 = $FP1;

        return $new;
    }

    /**
     * @return null | mixed
     */
    public function getFP2() : mixed
    {
        return $this->FP2;
    }

    /**
     * @param null | mixed $FP2
     * @return static
     */
    public function withFP2(mixed $FP2) : static
    {
        $new = clone $this;
        $new->FP2 = $FP2;

        return $new;
    }

    /**
     * @return null | mixed
     */
    public function getFP3() : mixed
    {
        return $this->FP3;
    }

    /**
     * @param null | mixed $FP3
     * @return static
     */
    public function withFP3(mixed $FP3) : static
    {
        $new = clone $this;
        $new->FP3 = $FP3;

        return $new;
    }

    /**
     * @return null | mixed
     */
    public function getFP4() : mixed
    {
        return $this->FP4;
    }

    /**
     * @param null | mixed $FP4
     * @return static
     */
    public function withFP4(mixed $FP4) : static
    {
        $new = clone $this;
        $new->FP4 = $FP4;

        return $new;
    }

    /**
     * @return null | mixed
     */
    public function getFP5() : mixed
    {
        return $this->FP5;
    }

    /**
     * @param null | mixed $FP5
     * @return static
     */
    public function withFP5(mixed $FP5) : static
    {
        $new = clone $this;
        $new->FP5 = $FP5;

        return $new;
    }
}

