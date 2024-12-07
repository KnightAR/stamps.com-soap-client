<?php

namespace Knightar\StampsSoapClient\Type;

class CostCodeInfoV1
{
    /**
     * @var int
     */
    private int $id;

    /**
     * @var string
     */
    private string $name;

    /**
     * @return int
     */
    public function getId() : int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return static
     */
    public function withId(int $id) : static
    {
        $new = clone $this;
        $new->id = $id;

        return $new;
    }

    /**
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return static
     */
    public function withName(string $name) : static
    {
        $new = clone $this;
        $new->name = $name;

        return $new;
    }
}

