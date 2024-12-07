<?php

namespace Knightar\StampsSoapClient\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetCodewordQuestionsResponse implements ResultInterface
{
    /**
     * @var string
     */
    private string $Codeword1Question;

    /**
     * @var string
     */
    private string $Codeword2Question;

    /**
     * @return string
     */
    public function getCodeword1Question() : string
    {
        return $this->Codeword1Question;
    }

    /**
     * @param string $Codeword1Question
     * @return static
     */
    public function withCodeword1Question(string $Codeword1Question) : static
    {
        $new = clone $this;
        $new->Codeword1Question = $Codeword1Question;

        return $new;
    }

    /**
     * @return string
     */
    public function getCodeword2Question() : string
    {
        return $this->Codeword2Question;
    }

    /**
     * @param string $Codeword2Question
     * @return static
     */
    public function withCodeword2Question(string $Codeword2Question) : static
    {
        $new = clone $this;
        $new->Codeword2Question = $Codeword2Question;

        return $new;
    }
}

