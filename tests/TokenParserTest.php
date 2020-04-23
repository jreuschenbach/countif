<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use jr\countif\Tokenizer;
use jr\countif\TokenParser;

class TokenParserTest extends TestCase
{
    public function testInstance()
    {
        $pTokenizer = new Tokenizer();
        $this->assertInstanceOf(TokenParser::class, new TokenParser($pTokenizer));
    }
}
