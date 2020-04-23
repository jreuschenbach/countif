<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use jr\countif\TokenParser;
use jr\countif\Tokens;

class TokenParserTest extends TestCase
{
    public function testInstance(): void
    {
        $pTokens = new Tokens();
        $this->assertInstanceOf(TokenParser::class, new TokenParser($pTokens));
    }
}
