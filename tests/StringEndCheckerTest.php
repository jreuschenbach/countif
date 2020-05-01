<?php

use PHPUnit\Framework\TestCase;
use jr\countif\StringEndChecker;

class StringEndCheckerTest extends TestCase
{
    public function testInstance()
    {
        $this->assertInstanceOf(StringEndChecker::class, new StringEndChecker());
    }

    public function testIs()
    {
        $StringEndChecker = new StringEndChecker();
        $this->assertTrue($StringEndChecker->is('test.php', '.php'));
        $this->assertFalse($StringEndChecker->is('test.php', '.html'));
    }
}
