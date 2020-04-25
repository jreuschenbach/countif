<?php

use PHPUnit\Framework\TestCase;
use jr\countif\Tokens;

class TokensTest extends TestCase
{
    public function testInstance()
    {
        $this->assertInstanceOf(Tokens::class, new Tokens(array()));
    }

    public function testIterable()
    {
        $pTokens = new Tokens(array(0, 1, 2));

        $this->assertCount(3, $pTokens);
        $iterations = 0;

        foreach ($pTokens as $index => $token)
        {
            $iterations++;
            $this->assertEquals($index, $token);
        }

        $this->assertEquals(3, $iterations);
    }
}
