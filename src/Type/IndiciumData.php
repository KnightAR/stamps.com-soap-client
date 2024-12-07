<?php

namespace Knightar\StampsSoapClient\Type;

class IndiciumData
{
    /**
     * @var mixed
     */
    private mixed $IBI;

    /**
     * @var mixed
     */
    private mixed $IBILite;

    /**
     * @return mixed
     */
    public function getIBI() : mixed
    {
        return $this->IBI;
    }

    /**
     * @param mixed $IBI
     * @return static
     */
    public function withIBI(mixed $IBI) : static
    {
        $new = clone $this;
        $new->IBI = $IBI;

        return $new;
    }

    /**
     * @return mixed
     */
    public function getIBILite() : mixed
    {
        return $this->IBILite;
    }

    /**
     * @param mixed $IBILite
     * @return static
     */
    public function withIBILite(mixed $IBILite) : static
    {
        $new = clone $this;
        $new->IBILite = $IBILite;

        return $new;
    }
}

