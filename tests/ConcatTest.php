<?php

namespace Sergiors\Functional\Tests;

use Sergiors\Functional as F;

class ConcatTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function concat()
    {
        $xs = F\concat([1, 2, 3]);
        $this->assertEquals([1, 2, 3, 4], $xs([4]));
    }

    /**
     * @test
     */
    public function shouldConcatMoreThanTwoArgs()
    {
        $xs = F\concat(['a'], ['b'], ['c'], ['d']);
        $this->assertEquals(['a', 'b', 'c', 'd'], $xs);
    }
}
