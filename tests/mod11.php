<?php
// @codingStandardsIgnoreFile

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

use function Oblak\mod11;

final class Mod11ValidationTest extends TestCase {
    public function test_mod11() {
        $this->assertEquals(mod11(111114), 0);
        $this->assertEquals(mod11(111123), null);
        $this->assertNotEquals(mod11(111118), null);
        $this->assertNotEquals(mod11(111118), 0);
    }
}
