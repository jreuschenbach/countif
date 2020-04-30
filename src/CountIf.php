<?php

namespace jr\countif;

class CountIf
{
    /** @var int */
    private $_countIf = 0;

    public function count(array $paths): int
    {
        $this->_countIf = 0;

        foreach ($paths as $filePath)
        {
            $Tokenizer = new Tokenizer();
            $Tokens = $Tokenizer->scan(file_get_contents($filePath));

            $TokenParser = new TokenParser();
            $TokenParser->addListener(T_IF, array($this, 'ifListener'));
            $TokenParser->parse($Tokens);
        }

        return $this->_countIf;
    }

    public function ifListener(): void
    {
        $this->_countIf++;
    }
}