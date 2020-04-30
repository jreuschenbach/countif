<?php

namespace jr\countif;
use \Iterator;
use \Countable;

class Tokens implements Iterator, Countable
{
    /**  @var array */
    private $_tokens = array();

    /** @var int */
    private $_index = 0;

    public function __construct(array $tokens)
    {
        $this->_tokens = $tokens;

        $this->validate();
    }

    private function validate(): void
    {
        $checkMethod = function($pToken)
        {
            if (!$pToken instanceof Token)
            {
                throw new InvalidTokenException();
            }
        };

        array_map($checkMethod, $this->_tokens);
    }

    public function current(): Token
    {
        return $this->_tokens[$this->_index];
    }

    public function next(): void
    {
        $this->_index++;
    }

    public function key(): int
    {
        return $this->_index;
    }

    public function valid(): bool
    {
        return array_key_exists($this->_index, $this->_tokens);
    }

    public function rewind(): void
    {
        $this->_index = 0;
    }

    public function count(): int
    {
        return count($this->_tokens);
    }
}