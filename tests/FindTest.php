<?php

namespace Sergiors\Functional\Tests;

use Sergiors\Functional as F;

class FindTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function find()
    {
        $odd = function ($x) {
            return $x & 1;
        };

        $even = function ($x) {
            return !($x & 1);
        };

        $this->assertEquals(3, F\find($odd, [2, 3, 4, 5, 6, 7, 8]));
        $this->assertEquals(4, F\find($even, [5, 7, 4, 5, 6, 7, 8]));
    }
}
