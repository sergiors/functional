<?php

namespace Sergiors\Functional\Tests;

use Sergiors\Functional as F;

class FlattenTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function flatten()
    {
        $this->assertEquals(F\flatten([1, [2, 3], [4, [5, [6]]]]), [1, 2, 3, 4, 5, 6]);
        $this->assertEquals(F\flatten([[[1, [1.1]], 2, 3], [4, 5]]), [1, 1.1, 2, 3, 4, 5]);
    }
}
