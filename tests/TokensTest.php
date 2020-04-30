<?php

use PHPUnit\Framework\TestCase;
use jr\countif\Tokens;
use jr\countif\Token;
use jr\countif\InvalidTokenException;

class TokensTest extends TestCase
{
    public function testInstance()
    {
        $this->assertInstanceOf(Tokens::class, new Tokens(array()));
    }

    public function testIterable()
    {
        $pTokens = $this->createTokens();

        $this->assertCount(3, $pTokens);
        $iterations = 0;

        foreach ($pTokens as $index => $token)
        {
            $this->assertInstanceOf(Token::class, $token);
            $iterations++;
        }

        $this->assertEquals(3, $iterations);
    }

    private function createTokens(): Tokens
    {
        $pToken1 = new Token(array(T_IF, 'if', 1));
        $pToken2 = new Token(array(T_IF, 'if', 2));
        $pToken3 = new Token(array(T_IF, 'if', 3));
        $pTokens = new Tokens(array($pToken1, $pToken2, $pToken3));
        return $pTokens;
    }

    public function testInvalidValidation()
    {
        $catched = false;

        try
        {
            new Tokens(array(1));
        }
        catch (InvalidTokenException $pException)
        {
            $catched = true;
        }

        $this->assertTrue($catched);
    }
}
