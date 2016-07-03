<?php

namespace Sergiors\Functional\Tests;

use Sergiors\Functional as F;

class DiffTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function diff()
    {
        $this->assertEquals([1], F\diff([1, 2, 3], [2, 3]));
    }
}
