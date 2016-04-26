<?php

namespace Sergiors\Functional\Tests;

use function Sergiors\Functional\flatten;

class FlattenTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function flatten()
    {
        $this->assertEquals([1, 2, 3, 4, 5, 6], flatten([1, [2, 3], [4, [5, [6]]]]));
        $this->assertEquals([1, 1.1, 2, 3, 4, 5], flatten([[[1, [1.1]], 2, 3], [4, 5]]));
    }
}
