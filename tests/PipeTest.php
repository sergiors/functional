<?php

namespace Sergiors\Functional\Tests;

use function Sergiors\Functional\pipe;

class PipeTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function pipe()
    {
        $f1 = pipe(
            function ($x) { return $x + 2; },
            function ($y) { return $y * 4; }
        );
        $this->assertEquals(48, $f1(10));

        $f2 = pipe(
            function ($x, $y) { return $x * $y; },
            function ($x)     { return $x / 2; }
        );
        $this->assertEquals(50, $f2(10, 10));

        $f3 = pipe(
            function ($x) { return "foo($x)"; },
            function ($x) { return "bar($x)"; },
            function ($x) { return "baz($x)"; }
        );
        $this->assertSame('baz(bar(foo(x)))', $f3('x'));

        $f4 = pipe('deg2rad', 'cos');
        $this->assertEquals(cos(deg2rad(360)), $f4(360));
    }
}
