<?php

namespace Sergiors\Functional\Tests;

use function Sergiors\Functional\curry;

class CurryTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function curry()
    {
        $greeter = curry(function ($greeting, $separator, $emphasis, $name) {
            return $greeting.$separator.$name.$emphasis;
        });

        $hello = $greeter('Hello', ', ', '.');
        $this->assertEquals('Hello, Jack.', $hello('Jack'));
        $this->assertEquals('Hello, James.', $hello('James'));

        $addFourNumbers = curry(function ($x, $y, $z, $xx) {
            return $x + $y + $z + $xx;
        });

        $f = $addFourNumbers(1, 2);
        $g = $f(3);
        $this->assertEquals(10, $g(4));
    }

    /**
     * @test
     */
    public function deepCurry()
    {
        $four = curry(function ($a, $b, $c, $d) {
            return $a + $b + $c + $d;
        });
        $x = $four(1);
        $y = $x(2);
        $z = $y(3);
        $this->assertEquals(10, $z(4));

        $this->assertEquals(10, $four(1, 2, 3, 4));

        $x = curry(function ($a, $b, $c) {
            return $a($b($c));
        });
        
        $y = $x(function ($x) {
            return $x + 1;
        });

        $z = $y(function ($x) {
            return $x * 2;
        });

        $this->assertEquals(21, $z(10));
    }
}
