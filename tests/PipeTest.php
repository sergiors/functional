<?php

namespace Sergiors\Functional\Tests;

use Sergiors\Functional as F;

class PipeTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function pipe()
    {
        $f1 = F\pipe(
            function ($x) {
                return $x + 2;
            },
            function ($y) {
                return $y * 4;
            }
        );
        $this->assertEquals($f1(10), 48);

        $f2 = F\pipe(
            function ($x, $y) {
                return $x * $y;
            },
            function ($x) {
                return $x / 2;
            }
        );
        $this->assertEquals($f2(10, 10), 50);

        $f3 = F\pipe(
            function ($x) {
                return "foo($x)";
            },
            function ($x) {
                return "bar($x)";
            },
            function ($x) {
                return "baz($x)";
            }
        );
        $this->assertSame($f3('x'), 'baz(bar(foo(x)))');

        $f4 = F\pipe('deg2rad', 'cos');
        $this->assertEquals($f4(360), cos(deg2rad(360)));
    }
}
