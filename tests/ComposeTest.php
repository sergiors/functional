<?php

namespace Sergiors\Functional\Tests;

class ComposeTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function compose()
    {
        $f1 = compose(
            function ($x) { return "foo($x)"; },
            function ($x) { return "bar($x)"; },
            function ($x) { return "baz($x)"; }
        );
        $this->assertSame('foo(bar(baz(x)))', $f1('x'));

        $f2 = compose('cos', 'deg2rad');
        $this->assertEquals(cos(deg2rad(360)), $f2(360));
    }
}
