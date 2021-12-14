<?php
// @codingStandardsIgnoreFile

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

use function Oblak\validatePIB;

final class PIBValidationTest extends TestCase {
    public function test_validatePIB() {
        $this->assertTrue(validatePIB(112497859));
        $this->assertFalse(validatePIB(112497851));
        $this->assertFalse(validatePIB(100000000));
        $this->assertFalse(validatePIB(11249785));
        $this->assertFalse(validatePIB(11249785900));
    }
}
