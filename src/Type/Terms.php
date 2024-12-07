<?php

namespace Knightar\StampsSoapClient\Type;

class Terms
{
    /**
     * @var bool
     */
    private bool $TermsGP;

    /**
     * @var bool
     */
    private bool $TermsAR;

    /**
     * @var bool
     */
    private bool $TermsSL;

    /**
     * @var bool
     */
    private bool $TermsDX;

    /**
     * @var bool
     */
    private bool $TermsFX;

    /**
     * @var bool
     */
    private bool $TermsUPS;

    /**
     * @var bool
     */
    private bool $TermsCM;

    /**
     * @var bool
     */
    private bool $TermsCanadaPost;

    /**
     * @var bool
     */
    private bool $TermsParcelGuard;

    /**
     * @return bool
     */
    public function getTermsGP() : bool
    {
        return $this->TermsGP;
    }

    /**
     * @param bool $TermsGP
     * @return static
     */
    public function withTermsGP(bool $TermsGP) : static
    {
        $new = clone $this;
        $new->TermsGP = $TermsGP;

        return $new;
    }

    /**
     * @return bool
     */
    public function getTermsAR() : bool
    {
        return $this->TermsAR;
    }

    /**
     * @param bool $TermsAR
     * @return static
     */
    public function withTermsAR(bool $TermsAR) : static
    {
        $new = clone $this;
        $new->TermsAR = $TermsAR;

        return $new;
    }

    /**
     * @return bool
     */
    public function getTermsSL() : bool
    {
        return $this->TermsSL;
    }

    /**
     * @param bool $TermsSL
     * @return static
     */
    public function withTermsSL(bool $TermsSL) : static
    {
        $new = clone $this;
        $new->TermsSL = $TermsSL;

        return $new;
    }

    /**
     * @return bool
     */
    public function getTermsDX() : bool
    {
        return $this->TermsDX;
    }

    /**
     * @param bool $TermsDX
     * @return static
     */
    public function withTermsDX(bool $TermsDX) : static
    {
        $new = clone $this;
        $new->TermsDX = $TermsDX;

        return $new;
    }

    /**
     * @return bool
     */
    public function getTermsFX() : bool
    {
        return $this->TermsFX;
    }

    /**
     * @param bool $TermsFX
     * @return static
     */
    public function withTermsFX(bool $TermsFX) : static
    {
        $new = clone $this;
        $new->TermsFX = $TermsFX;

        return $new;
    }

    /**
     * @return bool
     */
    public function getTermsUPS() : bool
    {
        return $this->TermsUPS;
    }

    /**
     * @param bool $TermsUPS
     * @return static
     */
    public function withTermsUPS(bool $TermsUPS) : static
    {
        $new = clone $this;
        $new->TermsUPS = $TermsUPS;

        return $new;
    }

    /**
     * @return bool
     */
    public function getTermsCM() : bool
    {
        return $this->TermsCM;
    }

    /**
     * @param bool $TermsCM
     * @return static
     */
    public function withTermsCM(bool $TermsCM) : static
    {
        $new = clone $this;
        $new->TermsCM = $TermsCM;

        return $new;
    }

    /**
     * @return bool
     */
    public function getTermsCanadaPost() : bool
    {
        return $this->TermsCanadaPost;
    }

    /**
     * @param bool $TermsCanadaPost
     * @return static
     */
    public function withTermsCanadaPost(bool $TermsCanadaPost) : static
    {
        $new = clone $this;
        $new->TermsCanadaPost = $TermsCanadaPost;

        return $new;
    }

    /**
     * @return bool
     */
    public function getTermsParcelGuard() : bool
    {
        return $this->TermsParcelGuard;
    }

    /**
     * @param bool $TermsParcelGuard
     * @return static
     */
    public function withTermsParcelGuard(bool $TermsParcelGuard) : static
    {
        $new = clone $this;
        $new->TermsParcelGuard = $TermsParcelGuard;

        return $new;
    }
}

