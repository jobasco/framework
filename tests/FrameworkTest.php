<?php

declare(strict_types=1);

namespace Microlytephp\Framework;

use PHPUnit\Framework\TestCase;

class FrameworkTest extends TestCase
{
    protected Framework $framework;

    protected function setUp(): void
    {
        $this->framework = new Framework();
    }

    public function testIsInstanceOfFramework(): void
    {
        $actual = $this->framework;
        $this->assertInstanceOf(Framework::class, $actual);
    }
}
