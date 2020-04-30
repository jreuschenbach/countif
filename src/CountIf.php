<?php

namespace jr\countif;

class CountIf
{
    /** @var int */
    private $_countIf = 0;

    public function count(string $path): int
    {
        $this->_countIf = 0;

        $this->processDirectory($path);

        return $this->_countIf;
    }

    private function processDirectory($path)
    {
        if (!is_dir($path))
        {
            throw new InvalidDirectoryException($path);
        }

        $handle = opendir($path);
        while ($filePath = readdir($handle))
        {
            if ($this->isValidPhpFile($path.'/'.$filePath))
            {
                $this->processFile($path.'/'.$filePath);
            }
            elseif ($this->isSubDirectory($filePath))
            {
                $this->processDirectory($path.'/'.$filePath);
            }
        }
    }

    private function isSubDirectory($dirPath)
    {
        return $dirPath != '.' && $dirPath != '..';
    }

    private function isValidPhpFile($filePath)
    {
        return is_file($filePath) &&
            substr_compare($filePath, '.php', 4);
    }

    private function processFile(string $filePath): void
    {
        $Tokenizer = new Tokenizer();
        $Tokens = $Tokenizer->scan(file_get_contents($filePath));

        $TokenParser = new TokenParser();
        $TokenParser->addListener(T_IF, array($this, 'ifListener'));
        $TokenParser->parse($Tokens);
    }

    public function ifListener(): void
    {
        $this->_countIf++;
    }
}