<?php

namespace Sergiors\Functional\Tests;

use Sergiors\Functional as F;

class TakewhileTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function takewhile()
    {
        $xss = [2, 4, 6, 8, 7, 10, 12];
        $even = function ($x) {
            return $x % 2 === 0;
        };
        $odd = function ($x) {
            return $x & 1;
        };

        $this->assertEquals([2, 4, 6, 8], F\takewhile($even, $xss));
        $this->assertEquals([1, 3, 5], F\takewhile($odd, [1, 3, 5, 4, 8, 7, 9]));

    }

    /**
     * @test
     */
    public function shouldReturnEmptyArray()
    {
        $odd = function ($x) {
            return $x & 1;
        };

        $this->assertEquals([], F\takewhile($odd, [8, 10, 12, 11]));
        $this->assertEquals([], F\takewhile($odd, []));
    }
}
