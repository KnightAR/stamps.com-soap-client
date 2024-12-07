<?php

namespace Knightar\StampsSoapClient\Type;

class Colors
{
    /**
     * @var null | string
     */
    private ?string $Primary = null;

    /**
     * @var null | string
     */
    private ?string $Secondary = null;

    /**
     * @var null | string
     */
    private ?string $Tertiary = null;

    /**
     * @return null | string
     */
    public function getPrimary() : ?string
    {
        return $this->Primary;
    }

    /**
     * @param null | string $Primary
     * @return static
     */
    public function withPrimary(?string $Primary) : static
    {
        $new = clone $this;
        $new->Primary = $Primary;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getSecondary() : ?string
    {
        return $this->Secondary;
    }

    /**
     * @param null | string $Secondary
     * @return static
     */
    public function withSecondary(?string $Secondary) : static
    {
        $new = clone $this;
        $new->Secondary = $Secondary;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getTertiary() : ?string
    {
        return $this->Tertiary;
    }

    /**
     * @param null | string $Tertiary
     * @return static
     */
    public function withTertiary(?string $Tertiary) : static
    {
        $new = clone $this;
        $new->Tertiary = $Tertiary;

        return $new;
    }
}

