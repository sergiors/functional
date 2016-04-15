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

        $addFourNumbers = function ($x, $y, $z, $xx) {
            return $x + $y + $z + $xx;
        };
        $e = curry($addFourNumbers);
        $f = curry($e, 1, 2);
        $g = curry($f, 3);
        $this->assertEquals(10, $g(4));
    }
}
