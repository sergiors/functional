<?php

namespace Sergiors\Functional\Tests;

class MapTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function map()
    {
        $inc = function ($x) {
            return $x + 1;
        };

        $plus2 = function ($x) {
            return $x + 2;
        };

        $y = map($inc);
        $this->assertEquals([2, 3, 4, 5, 6, 7, 8, 9, 10], $y([1, 2, 3, 4, 5, 6, 7, 8, 9]));
        $this->assertEquals([3, 4, 5, 6, 7, 8, 9, 10, 11], map($plus2, [1, 2, 3, 4, 5, 6, 7, 8, 9]));
    }
}
