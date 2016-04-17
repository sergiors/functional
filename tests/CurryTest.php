<?php

namespace Sergiors\Functional\Tests;

class CurryTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function curry()
    {
        $greeter = function ($greeting, $separator, $emphasis, $name) {
            return $greeting.$separator.$name.$emphasis;
        };

        $hello = curry($greeter, 'Hello', ', ', '.');
        $this->assertEquals('Hello, Jack.', $hello('Jack'));

        $addFourNumbers = curry(function ($x, $y, $z, $xx) {
            return $x + $y + $z + $xx;
        });

        $f = $addFourNumbers(1, 2);
        $g = $f(3);
        $this->assertEquals(10, $g(4));

        $four = curry(function ($a, $b, $c, $d) {
            return $a + $b + $c + $d;
        });
        $x = $four(1);
        $y = $x(2);
        $z = $y(3);
        $this->assertEquals(10, $z(4));

        $this->assertEquals(10, $four(1, 2, 3, 4));
    }
}
