<?php
/**
 * Tests for BlockExplorerPlus
 */

use PHPUnit\Framework\TestCase;
use Blockexplorerplus\Blockexplorerplus;

class BlockexplorerplusTest extends TestCase {
    private Blockexplorerplus $instance;

    protected function setUp(): void {
        $this->instance = new Blockexplorerplus(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Blockexplorerplus::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
