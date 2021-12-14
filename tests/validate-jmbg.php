<?php
// @codingStandardsIgnoreFile

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

use function Oblak\validateJMBG;

final class JMBGValidationTest extends TestCase {
    public function test_validateJMBG() {
        $this->assertTrue(validateJMBG(1703990715178));
        $this->assertFalse(validateJMBG(1703000715170));
        $this->assertFalse(validateJMBG(1703990715170));
        $this->assertFalse(validateJMBG(8803990715178));
        $this->assertFalse(validateJMBG(1217990715178));
        $this->assertTrue(validateJMBG(1703990605178));
        $this->assertTrue(validateJMBG(1703990665178));
        $this->assertFalse(validateJMBG(1703990715178000));
        $this->assertFalse(validateJMBG(1703990715));
    }
}
