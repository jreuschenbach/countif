<?php

use PHPUnit\Framework\TestCase;
use jr\countif\CountIf;

class CountIfTest extends TestCase
{
    public function testInstance()
    {
        $this->assertInstanceOf(CountIf::class, new CountIf());
    }

    public function testCount()
    {
        $CountIf = new CountIf();
        $this->assertEquals(7, $CountIf->count('resources'));
    }
}
