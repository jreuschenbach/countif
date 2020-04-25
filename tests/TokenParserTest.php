<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use jr\countif\TokenParser;
use jr\countif\Tokens;

class TokenParserTest extends TestCase
{
    /** @var int */
    private $_dummyListenerCalled = 0;

    public function testInstance(): void
    {
        $pTokens = new Tokens(array());
        $this->assertInstanceOf(TokenParser::class, new TokenParser($pTokens));
    }

    public function testListener()
    {
        $pTokens = new Tokens(array(array(T_IF, 'if', 1)));
        $pTokenParser = new TokenParser($pTokens);
        $pTokenParser->addListener(T_IF, array($this, 'dummyListener'));
        $pTokenParser->parse();

        $this->assertEquals(1, $this->_dummyListenerCalled);
    }

    public function dummyListener()
    {
        $this->_dummyListenerCalled++;
    }
}
