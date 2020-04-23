<?php

namespace jr\countif;

class TokenParser
{
    /** @var Tokenizer */
    private $_pTokenizer = null;

    public function __construct(Tokenizer $pTokenizer)
    {
        $this->_pTokenizer = $pTokenizer;
    }
}