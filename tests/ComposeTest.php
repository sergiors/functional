<?php

namespace Sergiors\Functional\Tests;

use Sergiors\Functional as F;

class ComposeTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function compose()
    {
        $f1 = F\compose(
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
        $this->assertSame($f1('x'), 'foo(bar(baz(x)))');

        $f2 = F\compose('cos', 'deg2rad');
        $this->assertEquals($f2(360), cos(deg2rad(360)));
    }
}
