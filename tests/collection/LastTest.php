<?php

use const phln\collection\last;

class LastTest extends \Phln\Build\PhpUnit\TestCase
{
    public function getTestedFn(): string
    {
        return last;
    }

    /** @test */
    public function it_returns_last_element_of_array()
    {
        $this->assertEquals(3, $this->callFn([1, 2, 3]));
        $this->assertEquals(1, $this->callFn([1]));
        $this->assertNull($this->callFn([]));
    }

    /** @test */
    public function it_returns_last_character_of_string()
    {
        $this->assertEquals('o', $this->callFn('foo'));
        $this->assertEquals('f', $this->callFn('f'));
        $this->assertEquals('', $this->callFn(''));
    }

    /** @test */
    public function it_can_be_used_as_callback()
    {
        $this->assertEquals(3, call_user_func($this->getResolvedFn(), [1, 2, 3]));
    }
}
