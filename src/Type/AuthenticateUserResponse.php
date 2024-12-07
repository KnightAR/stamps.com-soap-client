<?php

namespace Knightar\StampsSoapClient\Type;

use Phpro\SoapClient\Type\ResultInterface;

class AuthenticateUserResponse implements ResultInterface
{
    /**
     * @var string
     */
    private string $Authenticator;

    /**
     * @var null | \DateTimeInterface
     */
    private ?\DateTimeInterface $LastLoginTime = null;

    /**
     * @var bool
     */
    private bool $ClearCredential;

    /**
     * @var string
     */
    private string $LoginBannerText;

    /**
     * @var bool
     */
    private bool $PasswordExpired;

    /**
     * @var bool
     */
    private bool $CodewordsSet;

    /**
     * @return string
     */
    public function getAuthenticator() : string
    {
        return $this->Authenticator;
    }

    /**
     * @param string $Authenticator
     * @return static
     */
    public function withAuthenticator(string $Authenticator) : static
    {
        $new = clone $this;
        $new->Authenticator = $Authenticator;

        return $new;
    }

    /**
     * @return null | \DateTimeInterface
     */
    public function getLastLoginTime() : ?\DateTimeInterface
    {
        return $this->LastLoginTime;
    }

    /**
     * @param null | \DateTimeInterface $LastLoginTime
     * @return static
     */
    public function withLastLoginTime(?\DateTimeInterface $LastLoginTime) : static
    {
        $new = clone $this;
        $new->LastLoginTime = $LastLoginTime;

        return $new;
    }

    /**
     * @return bool
     */
    public function getClearCredential() : bool
    {
        return $this->ClearCredential;
    }

    /**
     * @param bool $ClearCredential
     * @return static
     */
    public function withClearCredential(bool $ClearCredential) : static
    {
        $new = clone $this;
        $new->ClearCredential = $ClearCredential;

        return $new;
    }

    /**
     * @return string
     */
    public function getLoginBannerText() : string
    {
        return $this->LoginBannerText;
    }

    /**
     * @param string $LoginBannerText
     * @return static
     */
    public function withLoginBannerText(string $LoginBannerText) : static
    {
        $new = clone $this;
        $new->LoginBannerText = $LoginBannerText;

        return $new;
    }

    /**
     * @return bool
     */
    public function getPasswordExpired() : bool
    {
        return $this->PasswordExpired;
    }

    /**
     * @param bool $PasswordExpired
     * @return static
     */
    public function withPasswordExpired(bool $PasswordExpired) : static
    {
        $new = clone $this;
        $new->PasswordExpired = $PasswordExpired;

        return $new;
    }

    /**
     * @return bool
     */
    public function getCodewordsSet() : bool
    {
        return $this->CodewordsSet;
    }

    /**
     * @param bool $CodewordsSet
     * @return static
     */
    public function withCodewordsSet(bool $CodewordsSet) : static
    {
        $new = clone $this;
        $new->CodewordsSet = $CodewordsSet;

        return $new;
    }
}

