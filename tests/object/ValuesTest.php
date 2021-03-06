<?php

use const phln\object\values;

class ValuesTest extends \Phln\Build\PhpUnit\TestCase
{
    public function getTestedFn(): string
    {
        return values;
    }

    /** @test */
    public function it_returns_values()
    {
        $this->assertEquals([1, 2, 3], $this->callFn(['a' => 1, 'b' => 2, 'c' => 3]));
    }

    /** @test */
    public function it_can_be_used_as_callback()
    {
        $this->assertEquals([1, 2, 3], call_user_func($this->getResolvedFn(), ['a' => 1, 'b' => 2, 'c' => 3]));
    }
}
