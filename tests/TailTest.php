<?php

namespace Sergiors\Functional\Tests;

class TailTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function tail()
    {
        $this->assertEquals([2, 3, 4], tail([1, 2, 3, 4]));
        $this->assertEquals(['b', 'c', 'd'], tail(['a', 'b', 'c', 'd']));
    }
}
