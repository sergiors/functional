<?php

namespace Sergiors\Functional\Tests;

use Sergiors\Functional as F;

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

        $y = F\map($inc);
        $this->assertEquals($y([1, 2, 3, 4, 5, 6, 7, 8, 9]), [2, 3, 4, 5, 6, 7, 8, 9, 10]);
        $this->assertEquals(F\map($plus2, [1, 2, 3, 4, 5, 6, 7, 8, 9]), [3, 4, 5, 6, 7, 8, 9, 10, 11]);
    }
}
