<?php

namespace Knightar\StampsSoapClient\Type;

class ReferencesV3
{
    /**
     * @var string
     */
    private string $UserName;

    /**
     * @var null | string
     */
    private ?string $CostCode = null;

    /**
     * @var null | string
     */
    private ?string $Memo = null;

    /**
     * @var null | string
     */
    private ?string $OrderId = null;

    /**
     * @var null | string
     */
    private ?string $Reference1 = null;

    /**
     * @var null | string
     */
    private ?string $Reference2 = null;

    /**
     * @var null | string
     */
    private ?string $Reference3 = null;

    /**
     * @var null | string
     */
    private ?string $Reference4 = null;

    /**
     * @return string
     */
    public function getUserName() : string
    {
        return $this->UserName;
    }

    /**
     * @param string $UserName
     * @return static
     */
    public function withUserName(string $UserName) : static
    {
        $new = clone $this;
        $new->UserName = $UserName;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getCostCode() : ?string
    {
        return $this->CostCode;
    }

    /**
     * @param null | string $CostCode
     * @return static
     */
    public function withCostCode(?string $CostCode) : static
    {
        $new = clone $this;
        $new->CostCode = $CostCode;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getMemo() : ?string
    {
        return $this->Memo;
    }

    /**
     * @param null | string $Memo
     * @return static
     */
    public function withMemo(?string $Memo) : static
    {
        $new = clone $this;
        $new->Memo = $Memo;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getOrderId() : ?string
    {
        return $this->OrderId;
    }

    /**
     * @param null | string $OrderId
     * @return static
     */
    public function withOrderId(?string $OrderId) : static
    {
        $new = clone $this;
        $new->OrderId = $OrderId;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getReference1() : ?string
    {
        return $this->Reference1;
    }

    /**
     * @param null | string $Reference1
     * @return static
     */
    public function withReference1(?string $Reference1) : static
    {
        $new = clone $this;
        $new->Reference1 = $Reference1;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getReference2() : ?string
    {
        return $this->Reference2;
    }

    /**
     * @param null | string $Reference2
     * @return static
     */
    public function withReference2(?string $Reference2) : static
    {
        $new = clone $this;
        $new->Reference2 = $Reference2;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getReference3() : ?string
    {
        return $this->Reference3;
    }

    /**
     * @param null | string $Reference3
     * @return static
     */
    public function withReference3(?string $Reference3) : static
    {
        $new = clone $this;
        $new->Reference3 = $Reference3;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getReference4() : ?string
    {
        return $this->Reference4;
    }

    /**
     * @param null | string $Reference4
     * @return static
     */
    public function withReference4(?string $Reference4) : static
    {
        $new = clone $this;
        $new->Reference4 = $Reference4;

        return $new;
    }
}

