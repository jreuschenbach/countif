<?php

use PHPUnit\Framework\TestCase;
use jr\countif\CountIf;
use jr\countif\InvalidDirectoryException;

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

    public function testUnreadableDirectory()
    {
        $catched = false;
        $CountIf = new CountIf();
        try
        {
            $CountIf->count('asd');
        }
        catch (InvalidDirectoryException $pException)
        {
            $catched = true;
        }

        $this->assertTrue($catched);
    }
}
