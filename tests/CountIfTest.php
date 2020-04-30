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
        $pCountIf = new CountIf();

        $this->assertEquals(2, $pCountIf->count('resources/2.php'));
    }
}
