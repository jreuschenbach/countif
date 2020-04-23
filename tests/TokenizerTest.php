<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use jr\countif\Tokenizer;

class TokenizerTest extends TestCase
{
    public function testInstance()
    {
        $this->assertInstanceOf(Tokenizer::class, new Tokenizer());
    }

    public function testTokenizing()
    {
        $pTokenizer = new Tokenizer();
        $testCode = 'echo "Hallo Welt!";';
        $this->assertIsArray($pTokenizer->scan($testCode));
    }
}
