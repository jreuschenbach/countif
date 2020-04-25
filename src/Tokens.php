<?php

namespace jr\countif;
use \Iterator;
use \Countable;

class Tokens implements Iterator, Countable
{
    /**  @var array */
    private $_tokens = array();

    private $_index = 0;

    public function __construct(array $tokens)
    {
        $this->_tokens = $tokens;
    }

    public function current()
    {
        return $this->_tokens[$this->_index];
    }

    public function next()
    {
        $this->_index++;
    }

    public function key()
    {
        return $this->_index;
    }

    public function valid()
    {
        return array_key_exists($this->_index, $this->_tokens);
    }

    public function rewind()
    {
        $this->_index = 0;
    }

    public function count()
    {
        return count($this->_tokens);
    }
}