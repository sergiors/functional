<?php

namespace Sergiors\Functional\Tests;

use Sergiors\Functional as F;

class DropwhileTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function dropwhile()
    {
        $xss = [2, 4, 6, 8, 7, 10, 12];
        $even = function ($x) {
            return $x % 2 === 0;
        };
        $odd = function ($x) {
            return $x & 1;
        };

        $this->assertEquals([7, 10, 12], F\dropwhile($even, $xss));
        $this->assertEquals([4, 8, 7, 9], F\dropwhile($odd, [1, 3, 5, 4, 8, 7, 9]));
    }

    /**
     * @test
     */
    public function shouldReturnEmptyArray()
    {
        $odd = function ($x) {
            return $x & 1;
        };

        $this->assertEquals([], F\dropwhile($odd, [11, 13]));
        $this->assertEquals([], F\dropwhile($odd, []));
    }
}
