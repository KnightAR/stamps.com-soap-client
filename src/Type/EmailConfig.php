<?php

namespace Knightar\StampsSoapClient\Type;

class EmailConfig
{
    /**
     * @var null | \Knightar\StampsSoapClient\Type\ArrayOfContentBlock
     */
    private ?\Knightar\StampsSoapClient\Type\ArrayOfContentBlock $ContentBlocks = null;

    /**
     * @var string
     */
    private string $FromName;

    /**
     * @var null | string
     */
    private ?string $ReplyToEmail = null;

    /**
     * @var null | \Knightar\StampsSoapClient\Type\ArrayOfBccEmail
     */
    private ?\Knightar\StampsSoapClient\Type\ArrayOfBccEmail $BCCEmails = null;

    /**
     * @return null | \Knightar\StampsSoapClient\Type\ArrayOfContentBlock
     */
    public function getContentBlocks() : ?\Knightar\StampsSoapClient\Type\ArrayOfContentBlock
    {
        return $this->ContentBlocks;
    }

    /**
     * @param null | \Knightar\StampsSoapClient\Type\ArrayOfContentBlock $ContentBlocks
     * @return static
     */
    public function withContentBlocks(?\Knightar\StampsSoapClient\Type\ArrayOfContentBlock $ContentBlocks) : static
    {
        $new = clone $this;
        $new->ContentBlocks = $ContentBlocks;

        return $new;
    }

    /**
     * @return string
     */
    public function getFromName() : string
    {
        return $this->FromName;
    }

    /**
     * @param string $FromName
     * @return static
     */
    public function withFromName(string $FromName) : static
    {
        $new = clone $this;
        $new->FromName = $FromName;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getReplyToEmail() : ?string
    {
        return $this->ReplyToEmail;
    }

    /**
     * @param null | string $ReplyToEmail
     * @return static
     */
    public function withReplyToEmail(?string $ReplyToEmail) : static
    {
        $new = clone $this;
        $new->ReplyToEmail = $ReplyToEmail;

        return $new;
    }

    /**
     * @return null | \Knightar\StampsSoapClient\Type\ArrayOfBccEmail
     */
    public function getBCCEmails() : ?\Knightar\StampsSoapClient\Type\ArrayOfBccEmail
    {
        return $this->BCCEmails;
    }

    /**
     * @param null | \Knightar\StampsSoapClient\Type\ArrayOfBccEmail $BCCEmails
     * @return static
     */
    public function withBCCEmails(?\Knightar\StampsSoapClient\Type\ArrayOfBccEmail $BCCEmails) : static
    {
        $new = clone $this;
        $new->BCCEmails = $BCCEmails;

        return $new;
    }
}

