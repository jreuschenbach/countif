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

        $paths = ['resources/2.php', 'resources/4.php'];

        $this->assertEquals(6, $CountIf->count($paths));
    }
}
