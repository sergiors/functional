<?php

namespace Sergiors\Functional\Tests;

class SumTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function sum()
    {
        $this->assertEquals(10, sum([1, 2, 3, 4]));
        $this->assertEquals(1500, sum([100, 400, 1000]));
    }
}
