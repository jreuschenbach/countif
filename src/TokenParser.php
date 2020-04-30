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

    public function addListener($tokenIndex, $callback): void
    {
        $this->_listener[$tokenIndex] []= $callback;
    }

    public function parse(): void
    {
        foreach ($this->_pTokens as $pToken)
        {
            if ($this->someoneIsListening($pToken))
            {
                $this->callListener($this->_listener[$pToken->getId()]);
            }
        }
    }

    private function someoneIsListening(Token $pToken): bool
    {
        return array_key_exists($pToken->getId(), $this->_listener);
    }

    private function callListener(array $listeners): void
    {
        foreach ($listeners as $listener)
        {
            call_user_func($listener);
        }
    }
}