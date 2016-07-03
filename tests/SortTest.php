<?php

namespace Sergiors\Functional\Tests;

use Sergiors\Functional as F;

class SortTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function sort()
    {
        $this->assertEquals([1, 2, 3, 4, 99, 100], F\sort([1, 100, 2, 4, 99, 3]));
        $this->assertEquals(['a', 'b', 'c', 'd'], F\sort(['b', 'a', 'c', 'd']));
    }
}
