<?php declare(strict_types=1);

use jr\countif\Dummy;
use PHPUnit\Framework\TestCase;

class DummyTestTest extends TestCase
{
    public function testAutoloader(): void
    {
        $this->assertInstanceOf(Dummy::class, new Dummy());
    }
}
