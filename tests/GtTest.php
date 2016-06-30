<?php

namespace Sergiors\Functional\Tests;

use Sergiors\Functional as F;

class GtTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function gt()
    {
        $this->assertTrue(F\gt(10, 5));
        $this->assertTrue(F\gt(10, 5));
    }
}
