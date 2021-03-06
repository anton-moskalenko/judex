<?php

namespace Judex\Checks\CheckEmpty;

use PHPUnit\Framework\TestCase;
use Judex\Assert;

/**
 * Check assert class.
 */
class CheckTest extends TestCase
{
    /**
     * Tests {@link Assert::empty()} method (default values).
     *
     * * Arrange: defines {@link Assert} in {@link \Judex\Checks\CheckEmpty\Exception} catch.
     * * Act: calls {@link Assert::empty()} method.
     * * Assert: checks default values.
     */
    public function testTrueDefault(): void
    {
        Assert::empty([]);

        try
        {
            Assert::empty(['test']);
        }
        catch (Exception $e)
        {
            $this->assertEquals('Empty expected, but not empty value provided.', $e->getMessage());
            $this->assertEquals(0x05, $e->getCode());
            $this->assertEquals([], $e->getData());
            $this->assertNull($e->getPrevious());
        }
    }

    /**
     * Tests {@link Assert::empty()} method (manual values).
     *
     * * Arrange: defines {@link Assert} in {@link \Judex\Checks\CheckEmpty\Exception} catch.
     * * Act: calls {@link Assert::empty()} method.
     * * Assert: checks manual values.
     */
    public function testTrueManual(): void
    {
        Assert::empty([], 'Test.', ['a' => 'b']);

        try
        {
            Assert::empty(['test'], 'Test.', ['a' => 'b']);
        }
        catch (Exception $e)
        {
            $this->assertEquals('Test.', $e->getMessage());
            $this->assertEquals(0x05, $e->getCode());
            $this->assertEquals(['a' => 'b'], $e->getData());
            $this->assertNull($e->getPrevious());
        }
    }
}