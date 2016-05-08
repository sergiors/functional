<?php

namespace Sergiors\Functional\Tests;

use Sergiors\Functional as F;

class TakeTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function take()
    {
        $this->assertEquals(['foo'], F\take(1, ['foo', 'bar', 'baz']));
        $this->assertEquals(['foo', 'bar'], F\take(2, ['foo', 'bar', 'baz']));
        $this->assertEquals(['foo', 'bar', 'baz'], F\take(4, ['foo', 'bar', 'baz']));
        $this->assertEquals([1, 2, 3], F\take(3, [1, 2, 3, 4, 5]));

        $take = F\take(3);
        $this->assertEquals([1, 3], $take([1, 3]));
    }
}
