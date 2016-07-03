<?php

namespace Sergiors\Functional\Tests;

use Sergiors\Functional as F;

class HoldTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function hold()
    {
        $hold = F\hold('array_filter', F\_, function ($x) {
            return $x > 10;
        });

        $this->assertEquals([20, 15], array_values($hold([5, 20, 10, 15])));

        $upper = F\hold('strtoupper');
        $this->assertEquals('HELLO', $upper('hello'));
    }

    /**
     * @test
     */
    public function composeFuncs()
    {
        $pipe = F\pipe(
            F\hold('array_slice', F\_, 2),
            F\hold('array_map', function ($x) {
                return $x * 2;
            }),
            F\hold('implode', ',')
        );

        $xs = [10, 20, 30, 40, 50];

        $this->assertEquals('60,80,100', $pipe($xs));
    }
}
