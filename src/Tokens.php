<?php

namespace jr\countif;

class Tokens
{
    /**  @var array */
    private $_tokens = array();

    public function __construct(array $tokens)
    {
        $this->_tokens = $tokens;
    }
}