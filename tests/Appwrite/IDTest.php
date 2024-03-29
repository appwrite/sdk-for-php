<?php

namespace Appwrite;

use PHPUnit\Framework\TestCase;

final class IDTest extends TestCase {
    public function testUnique(): void {
        $this->assertSame('unique()', ID::unique());
    }

    public function testCustom(): void {
        $this->assertSame('custom', ID::custom('custom'));
    }
}
