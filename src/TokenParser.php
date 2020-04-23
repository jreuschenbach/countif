<?php

namespace jr\countif;

class TokenParser
{
    /** @var Tokens */
    private $_pTokens = null;

    public function __construct(Tokens $pTokenizer)
    {
        $this->_pTokens = $pTokenizer;
    }
}