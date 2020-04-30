<?php

namespace jr\countif;

class Token
{
    /** @var int */
    private $_id = null;

    /** @var string */
    private $_text = '';

    /** @var int */
    private $_line = 0;

    public function __construct(array $phpToken)
    {
        $this->_id = $phpToken[0];
        $this->_text = $phpToken[1];
        $this->_line = $phpToken[2];
    }

    public function getId(): int
    {
        return $this->_id;
    }

    public function getText(): string
    {
        return $this->_text;
    }

    public function getLine(): int
    {
        return $this->_line;
    }
}