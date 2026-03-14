<?php
/**
 * Tests for TablerIconsLib
 */

use PHPUnit\Framework\TestCase;
use Tablericonslib\Tablericonslib;

class TablericonslibTest extends TestCase {
    private Tablericonslib $instance;

    protected function setUp(): void {
        $this->instance = new Tablericonslib(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Tablericonslib::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
