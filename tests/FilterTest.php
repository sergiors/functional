<?php

namespace Sergiors\Functional\Tests;

class FilterTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function filter()
    {
        $odd = function ($x) {
            return $x & 1;
        };

        $even = function ($x) {
            return !($x & 1);
        };

        $this->assertEquals([1, 3, 5, 7], filter($odd, [1, 2, 3, 4, 5, 6, 7, 8]));
        $this->assertEquals([2, 4, 6, 8], filter($even, [1, 2, 3, 4, 5, 6, 7, 8]));
    }
}
