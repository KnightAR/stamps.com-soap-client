<?php

namespace Knightar\StampsSoapClient\Type;

class NetStampsLayout
{
    /**
     * @var string
     */
    private string $Name;

    /**
     * @var string
     */
    private string $Description;

    /**
     * @var string
     */
    private string $SerialNumberPattern;

    /**
     * @var int
     */
    private int $NumRows;

    /**
     * @var int
     */
    private int $NumColumns;

    /**
     * @var string
     */
    private string $BackgroundImageURL;

    /**
     * @var int
     */
    private int $BackgroundImageWidthPx;

    /**
     * @var int
     */
    private int $BackgroundImageHeightPx;

    /**
     * @var string
     */
    private string $EmptyNetStampImageURL;

    /**
     * @var string
     */
    private string $UsedNetStampImageURL;

    /**
     * @var string
     */
    private string $PrintedNetStampImageURL;

    /**
     * @var int
     */
    private int $NetStampImageWidthPx;

    /**
     * @var int
     */
    private int $NetStampImageHeightPx;

    /**
     * @var int
     */
    private int $Row1StartsAtPx;

    /**
     * @var int
     */
    private int $Column1StartsAtPx;

    /**
     * @var int
     */
    private int $HorizontalSpaceBetweenNetStampsPx;

    /**
     * @var int
     */
    private int $VerticalSpaceBetweenNetStampsPx;

    /**
     * @return string
     */
    public function getName() : string
    {
        return $this->Name;
    }

    /**
     * @param string $Name
     * @return static
     */
    public function withName(string $Name) : static
    {
        $new = clone $this;
        $new->Name = $Name;

        return $new;
    }

    /**
     * @return string
     */
    public function getDescription() : string
    {
        return $this->Description;
    }

    /**
     * @param string $Description
     * @return static
     */
    public function withDescription(string $Description) : static
    {
        $new = clone $this;
        $new->Description = $Description;

        return $new;
    }

    /**
     * @return string
     */
    public function getSerialNumberPattern() : string
    {
        return $this->SerialNumberPattern;
    }

    /**
     * @param string $SerialNumberPattern
     * @return static
     */
    public function withSerialNumberPattern(string $SerialNumberPattern) : static
    {
        $new = clone $this;
        $new->SerialNumberPattern = $SerialNumberPattern;

        return $new;
    }

    /**
     * @return int
     */
    public function getNumRows() : int
    {
        return $this->NumRows;
    }

    /**
     * @param int $NumRows
     * @return static
     */
    public function withNumRows(int $NumRows) : static
    {
        $new = clone $this;
        $new->NumRows = $NumRows;

        return $new;
    }

    /**
     * @return int
     */
    public function getNumColumns() : int
    {
        return $this->NumColumns;
    }

    /**
     * @param int $NumColumns
     * @return static
     */
    public function withNumColumns(int $NumColumns) : static
    {
        $new = clone $this;
        $new->NumColumns = $NumColumns;

        return $new;
    }

    /**
     * @return string
     */
    public function getBackgroundImageURL() : string
    {
        return $this->BackgroundImageURL;
    }

    /**
     * @param string $BackgroundImageURL
     * @return static
     */
    public function withBackgroundImageURL(string $BackgroundImageURL) : static
    {
        $new = clone $this;
        $new->BackgroundImageURL = $BackgroundImageURL;

        return $new;
    }

    /**
     * @return int
     */
    public function getBackgroundImageWidthPx() : int
    {
        return $this->BackgroundImageWidthPx;
    }

    /**
     * @param int $BackgroundImageWidthPx
     * @return static
     */
    public function withBackgroundImageWidthPx(int $BackgroundImageWidthPx) : static
    {
        $new = clone $this;
        $new->BackgroundImageWidthPx = $BackgroundImageWidthPx;

        return $new;
    }

    /**
     * @return int
     */
    public function getBackgroundImageHeightPx() : int
    {
        return $this->BackgroundImageHeightPx;
    }

    /**
     * @param int $BackgroundImageHeightPx
     * @return static
     */
    public function withBackgroundImageHeightPx(int $BackgroundImageHeightPx) : static
    {
        $new = clone $this;
        $new->BackgroundImageHeightPx = $BackgroundImageHeightPx;

        return $new;
    }

    /**
     * @return string
     */
    public function getEmptyNetStampImageURL() : string
    {
        return $this->EmptyNetStampImageURL;
    }

    /**
     * @param string $EmptyNetStampImageURL
     * @return static
     */
    public function withEmptyNetStampImageURL(string $EmptyNetStampImageURL) : static
    {
        $new = clone $this;
        $new->EmptyNetStampImageURL = $EmptyNetStampImageURL;

        return $new;
    }

    /**
     * @return string
     */
    public function getUsedNetStampImageURL() : string
    {
        return $this->UsedNetStampImageURL;
    }

    /**
     * @param string $UsedNetStampImageURL
     * @return static
     */
    public function withUsedNetStampImageURL(string $UsedNetStampImageURL) : static
    {
        $new = clone $this;
        $new->UsedNetStampImageURL = $UsedNetStampImageURL;

        return $new;
    }

    /**
     * @return string
     */
    public function getPrintedNetStampImageURL() : string
    {
        return $this->PrintedNetStampImageURL;
    }

    /**
     * @param string $PrintedNetStampImageURL
     * @return static
     */
    public function withPrintedNetStampImageURL(string $PrintedNetStampImageURL) : static
    {
        $new = clone $this;
        $new->PrintedNetStampImageURL = $PrintedNetStampImageURL;

        return $new;
    }

    /**
     * @return int
     */
    public function getNetStampImageWidthPx() : int
    {
        return $this->NetStampImageWidthPx;
    }

    /**
     * @param int $NetStampImageWidthPx
     * @return static
     */
    public function withNetStampImageWidthPx(int $NetStampImageWidthPx) : static
    {
        $new = clone $this;
        $new->NetStampImageWidthPx = $NetStampImageWidthPx;

        return $new;
    }

    /**
     * @return int
     */
    public function getNetStampImageHeightPx() : int
    {
        return $this->NetStampImageHeightPx;
    }

    /**
     * @param int $NetStampImageHeightPx
     * @return static
     */
    public function withNetStampImageHeightPx(int $NetStampImageHeightPx) : static
    {
        $new = clone $this;
        $new->NetStampImageHeightPx = $NetStampImageHeightPx;

        return $new;
    }

    /**
     * @return int
     */
    public function getRow1StartsAtPx() : int
    {
        return $this->Row1StartsAtPx;
    }

    /**
     * @param int $Row1StartsAtPx
     * @return static
     */
    public function withRow1StartsAtPx(int $Row1StartsAtPx) : static
    {
        $new = clone $this;
        $new->Row1StartsAtPx = $Row1StartsAtPx;

        return $new;
    }

    /**
     * @return int
     */
    public function getColumn1StartsAtPx() : int
    {
        return $this->Column1StartsAtPx;
    }

    /**
     * @param int $Column1StartsAtPx
     * @return static
     */
    public function withColumn1StartsAtPx(int $Column1StartsAtPx) : static
    {
        $new = clone $this;
        $new->Column1StartsAtPx = $Column1StartsAtPx;

        return $new;
    }

    /**
     * @return int
     */
    public function getHorizontalSpaceBetweenNetStampsPx() : int
    {
        return $this->HorizontalSpaceBetweenNetStampsPx;
    }

    /**
     * @param int $HorizontalSpaceBetweenNetStampsPx
     * @return static
     */
    public function withHorizontalSpaceBetweenNetStampsPx(int $HorizontalSpaceBetweenNetStampsPx) : static
    {
        $new = clone $this;
        $new->HorizontalSpaceBetweenNetStampsPx = $HorizontalSpaceBetweenNetStampsPx;

        return $new;
    }

    /**
     * @return int
     */
    public function getVerticalSpaceBetweenNetStampsPx() : int
    {
        return $this->VerticalSpaceBetweenNetStampsPx;
    }

    /**
     * @param int $VerticalSpaceBetweenNetStampsPx
     * @return static
     */
    public function withVerticalSpaceBetweenNetStampsPx(int $VerticalSpaceBetweenNetStampsPx) : static
    {
        $new = clone $this;
        $new->VerticalSpaceBetweenNetStampsPx = $VerticalSpaceBetweenNetStampsPx;

        return $new;
    }
}

