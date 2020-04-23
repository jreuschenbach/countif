<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use jr\countif\TokenParser;
use jr\countif\Tokenizer;

class TokenParserTest extends TestCase
{
    public function testInstance(): void
    {
        $pTokenizer = new Tokenizer();
        $this->assertInstanceOf(TokenParser::class, new TokenParser($pTokenizer));
    }
}
