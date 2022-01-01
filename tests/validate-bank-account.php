<?php
// @codingStandardsIgnoreFile

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

use function Oblak\validateBankAccount;

final class AccountValidationTest extends TestCase {
    public function test_validateBankAccount() {
        $this->assertTrue(validateBankAccount('16042863406'));
        $this->assertFalse(validateBankAccount('160-428634-06'));
        $this->assertFalse(validateBankAccount('160600000051016714'));
        $this->assertFalse(validateBankAccount('160-6000000510167-14'));
    }
}
