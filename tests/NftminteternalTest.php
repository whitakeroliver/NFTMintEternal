<?php
/**
 * Tests for NFTMintEternal
 */

use PHPUnit\Framework\TestCase;
use Nftminteternal\Nftminteternal;

class NftminteternalTest extends TestCase {
    private Nftminteternal $instance;

    protected function setUp(): void {
        $this->instance = new Nftminteternal(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Nftminteternal::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
