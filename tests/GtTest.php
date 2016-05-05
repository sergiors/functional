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
        $a = F\gt(10);
        $this->assertTrue($a(5));
        $this->assertTrue(F\gt(10, 5));
    }
}
