<?php

use PHPUnit\Framework\TestCase;
use jr\countif\Token;

class TokenTest extends TestCase
{
    public function testInstance()
    {
        $this->assertInstanceOf(Token::class, new Token(array(T_IF, 'if', 1)));
    }

    public function testDataObject()
    {
        $pToken = new Token(array(T_IF, 'if', 1));

        $this->assertEquals(T_IF, $pToken->getId());
        $this->assertEquals('if', $pToken->getText());
        $this->assertEquals(1, $pToken->getLine());
    }
}
