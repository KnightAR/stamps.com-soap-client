<?php

namespace Knightar\StampsSoapClient\Type;

use \Knightar\StampsSoapClient\Type\Address;

class AMSAddress extends Address
{
    /**
     * @var bool
     */
    private bool $HasPrefixRange;

    /**
     * @var null | 'All' | 'Even' | 'Odd'
     */
    private ?string $PrefixRangeType = null;

    /**
     * @var null | string
     */
    private ?string $PrefixRangeStart = null;

    /**
     * @var null | string
     */
    private ?string $PrefixRangeEnd = null;

    /**
     * @var bool
     */
    private bool $HasSuffixRange;

    /**
     * @var null | 'All' | 'Even' | 'Odd'
     */
    private ?string $SuffixRangeType = null;

    /**
     * @var null | string
     */
    private ?string $SuffixRangeStart = null;

    /**
     * @var null | string
     */
    private ?string $SuffixRangeEnd = null;

    /**
     * @var int
     */
    private int $Rank;

    /**
     * @var bool
     */
    private bool $WasDefault;

    /**
     * @var bool
     */
    private bool $Displayable;

    /**
     * @var \DateTimeInterface
     */
    private \DateTimeInterface $ExpirationDate;

    /**
     * @return bool
     */
    public function getHasPrefixRange() : bool
    {
        return $this->HasPrefixRange;
    }

    /**
     * @param bool $HasPrefixRange
     * @return static
     */
    public function withHasPrefixRange(bool $HasPrefixRange) : static
    {
        $new = clone $this;
        $new->HasPrefixRange = $HasPrefixRange;

        return $new;
    }

    /**
     * @return null | 'All' | 'Even' | 'Odd'
     */
    public function getPrefixRangeType() : ?string
    {
        return $this->PrefixRangeType;
    }

    /**
     * @param null | 'All' | 'Even' | 'Odd' $PrefixRangeType
     * @return static
     */
    public function withPrefixRangeType(?string $PrefixRangeType) : static
    {
        $new = clone $this;
        $new->PrefixRangeType = $PrefixRangeType;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getPrefixRangeStart() : ?string
    {
        return $this->PrefixRangeStart;
    }

    /**
     * @param null | string $PrefixRangeStart
     * @return static
     */
    public function withPrefixRangeStart(?string $PrefixRangeStart) : static
    {
        $new = clone $this;
        $new->PrefixRangeStart = $PrefixRangeStart;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getPrefixRangeEnd() : ?string
    {
        return $this->PrefixRangeEnd;
    }

    /**
     * @param null | string $PrefixRangeEnd
     * @return static
     */
    public function withPrefixRangeEnd(?string $PrefixRangeEnd) : static
    {
        $new = clone $this;
        $new->PrefixRangeEnd = $PrefixRangeEnd;

        return $new;
    }

    /**
     * @return bool
     */
    public function getHasSuffixRange() : bool
    {
        return $this->HasSuffixRange;
    }

    /**
     * @param bool $HasSuffixRange
     * @return static
     */
    public function withHasSuffixRange(bool $HasSuffixRange) : static
    {
        $new = clone $this;
        $new->HasSuffixRange = $HasSuffixRange;

        return $new;
    }

    /**
     * @return null | 'All' | 'Even' | 'Odd'
     */
    public function getSuffixRangeType() : ?string
    {
        return $this->SuffixRangeType;
    }

    /**
     * @param null | 'All' | 'Even' | 'Odd' $SuffixRangeType
     * @return static
     */
    public function withSuffixRangeType(?string $SuffixRangeType) : static
    {
        $new = clone $this;
        $new->SuffixRangeType = $SuffixRangeType;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getSuffixRangeStart() : ?string
    {
        return $this->SuffixRangeStart;
    }

    /**
     * @param null | string $SuffixRangeStart
     * @return static
     */
    public function withSuffixRangeStart(?string $SuffixRangeStart) : static
    {
        $new = clone $this;
        $new->SuffixRangeStart = $SuffixRangeStart;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getSuffixRangeEnd() : ?string
    {
        return $this->SuffixRangeEnd;
    }

    /**
     * @param null | string $SuffixRangeEnd
     * @return static
     */
    public function withSuffixRangeEnd(?string $SuffixRangeEnd) : static
    {
        $new = clone $this;
        $new->SuffixRangeEnd = $SuffixRangeEnd;

        return $new;
    }

    /**
     * @return int
     */
    public function getRank() : int
    {
        return $this->Rank;
    }

    /**
     * @param int $Rank
     * @return static
     */
    public function withRank(int $Rank) : static
    {
        $new = clone $this;
        $new->Rank = $Rank;

        return $new;
    }

    /**
     * @return bool
     */
    public function getWasDefault() : bool
    {
        return $this->WasDefault;
    }

    /**
     * @param bool $WasDefault
     * @return static
     */
    public function withWasDefault(bool $WasDefault) : static
    {
        $new = clone $this;
        $new->WasDefault = $WasDefault;

        return $new;
    }

    /**
     * @return bool
     */
    public function getDisplayable() : bool
    {
        return $this->Displayable;
    }

    /**
     * @param bool $Displayable
     * @return static
     */
    public function withDisplayable(bool $Displayable) : static
    {
        $new = clone $this;
        $new->Displayable = $Displayable;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getExpirationDate() : \DateTimeInterface
    {
        return $this->ExpirationDate;
    }

    /**
     * @param \DateTimeInterface $ExpirationDate
     * @return static
     */
    public function withExpirationDate(\DateTimeInterface $ExpirationDate) : static
    {
        $new = clone $this;
        $new->ExpirationDate = $ExpirationDate;

        return $new;
    }
}

