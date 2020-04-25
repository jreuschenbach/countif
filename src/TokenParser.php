<?php

namespace jr\countif;

class TokenParser
{
    /** @var Tokens */
    private $_pTokens = null;

    /** @var array */
    private $_listener = [];

    public function __construct(Tokens $pTokenizer)
    {
        $this->_pTokens = $pTokenizer;
    }

    public function addListener($tokenIndex, $callback)
    {
        $this->_listener[$tokenIndex] []= $callback;
    }

    public function parse()
    {
        foreach ($this->_pTokens as $token)
        {
            if (is_array($token) && array_key_exists($token[0], $this->_listener))
            {
                $this->callListener($this->_listener[$token[0]]);
            }
        }
    }

    private function callListener(array $listeners)
    {
        foreach ($listeners as $listener)
        {
            call_user_func($listener);
        }
    }
}