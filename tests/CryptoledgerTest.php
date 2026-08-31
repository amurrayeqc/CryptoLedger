<?php
/**
 * Tests for CryptoLedger
 */

use PHPUnit\Framework\TestCase;
use Cryptoledger\Cryptoledger;

class CryptoledgerTest extends TestCase {
    private Cryptoledger $instance;

    protected function setUp(): void {
        $this->instance = new Cryptoledger(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Cryptoledger::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
