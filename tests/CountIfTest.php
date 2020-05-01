<?php

use PHPUnit\Framework\TestCase;
use jr\countif\CountIf;

class CountIfTest extends TestCase
{
    public function testInstance(): void
    {
        $this->assertInstanceOf(CountIf::class, new CountIf());
    }

    public function testCount(): void
    {
        $CountIf = new CountIf();
        $this->assertEquals(7, $CountIf->count('resources'));
    }
}
