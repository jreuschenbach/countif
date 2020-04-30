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
        $Tokens = $this->createTokens();

        $this->assertCount(3, $Tokens);
        $iterations = 0;

        foreach ($Tokens as $index => $token)
        {
            $this->assertInstanceOf(Token::class, $token);
            $iterations++;
        }

        $this->assertEquals(3, $iterations);
    }

    private function createTokens(): Tokens
    {
        $Token1 = new Token(array(T_IF, 'if', 1));
        $Token2 = new Token(array(T_IF, 'if', 2));
        $Token3 = new Token(array(T_IF, 'if', 3));
        $Tokens = new Tokens(array($Token1, $Token2, $Token3));
        return $Tokens;
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
