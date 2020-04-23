<?php

use PHPUnit\Framework\TestCase;
use jr\countif\Tokens;

class TokensTest extends TestCase
{
    public function testInstance()
    {
        $this->assertInstanceOf(Tokens::class, new Tokens());
    }
}
