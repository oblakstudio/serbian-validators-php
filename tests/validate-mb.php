<?php
// @codingStandardsIgnoreFile

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

use function Oblak\validateMB;

final class MBValidationTest extends TestCase {
    public function test_validatePIB() {
        $this->assertTrue(validateMB(66143627));
        $this->assertFalse(validateMB(66143628));
        $this->assertFalse(validateMB(6614362));
        $this->assertFalse(validateMB(661436200));
    }
}
