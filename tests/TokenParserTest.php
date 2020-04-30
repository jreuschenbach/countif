<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use jr\countif\TokenParser;
use jr\countif\Tokens;
use jr\countif\Token;

class TokenParserTest extends TestCase
{
    /** @var int */
    private $_dummyListenerCalled = 0;

    public function testInstance(): void
    {
        $this->assertInstanceOf(TokenParser::class, new TokenParser());
    }

    public function testListener()
    {
        $Token = new Token(array(T_IF, 'if', 1));
        $Tokens = new Tokens(array($Token));
        $TokenParser = new TokenParser();
        $TokenParser->addListener(T_IF, array($this, 'dummyListener'));
        $TokenParser->parse($Tokens);

        $this->assertEquals(1, $this->_dummyListenerCalled);
    }

    public function dummyListener()
    {
        $this->_dummyListenerCalled++;
    }
}
