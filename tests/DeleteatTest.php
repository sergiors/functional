<?php

namespace Sergiors\Functional\Tests;

use Sergiors\Functional as F;

class DeleteatTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function deleteat()
    {
        $this->assertEquals([1, 2, 4], F\deleteat(2, [1, 2, 3, 4]));
        $this->assertEquals([3, 2, 0], F\deleteat(2, [3, 2, 1, 0]));
    }
}
