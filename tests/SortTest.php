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
        $xs = F\sort([1, 100, 2, 4, 3]);

        $this->assertEquals([1, 2, 3, 4, 100], $xs(function ($l, $r) {
            return $l - $r;
        }));

        // $this->assertEquals([100, 4, 3, 2, 1], $xs(function ($l, $r) {
        //     return $r - $l;
        // }));

    }
}
