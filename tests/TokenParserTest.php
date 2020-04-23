<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use jr\countif\TokenParser;

class TokenParserTest extends TestCase
{
    public function testInstance()
    {
        $this->assertInstanceOf(TokenParser::class, new TokenParser());
    }
}
