<?php

namespace Sergiors\Functional\Tests;

use function Sergiors\Functional\filter;

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

        $odds = filter($odd);

        // array_filter preserves the keys
        $this->assertEquals([1, 3, 5, 7], array_values($odds([1, 2, 3, 4, 5, 6, 7, 8])));
        $this->assertEquals([2, 4, 6, 8], array_values(filter($even, [1, 2, 3, 4, 5, 6, 7, 8])));
    }
}
