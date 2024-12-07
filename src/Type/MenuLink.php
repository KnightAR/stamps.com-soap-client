<?php

namespace Knightar\StampsSoapClient\Type;

class MenuLink
{
    /**
     * @var string
     */
    private string $Url;

    /**
     * @var string
     */
    private string $Text;

    /**
     * @return string
     */
    public function getUrl() : string
    {
        return $this->Url;
    }

    /**
     * @param string $Url
     * @return static
     */
    public function withUrl(string $Url) : static
    {
        $new = clone $this;
        $new->Url = $Url;

        return $new;
    }

    /**
     * @return string
     */
    public function getText() : string
    {
        return $this->Text;
    }

    /**
     * @param string $Text
     * @return static
     */
    public function withText(string $Text) : static
    {
        $new = clone $this;
        $new->Text = $Text;

        return $new;
    }
}

