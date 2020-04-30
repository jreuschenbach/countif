<?php

namespace jr\countif;

class TokenParser
{
    /** @var array */
    private $_listener = [];

    public function addListener($tokenIndex, $callback): void
    {
        $this->_listener[$tokenIndex] []= $callback;
    }

    public function parse(Tokens $Tokens): void
    {
        foreach ($Tokens as $pToken)
        {
            if ($this->someoneIsListening($pToken))
            {
                $this->callListener($this->_listener[$pToken->getId()]);
            }
        }
    }

    private function someoneIsListening(Token $Token): bool
    {
        return array_key_exists($Token->getId(), $this->_listener);
    }

    private function callListener(array $listeners): void
    {
        foreach ($listeners as $listener)
        {
            call_user_func($listener);
        }
    }
}