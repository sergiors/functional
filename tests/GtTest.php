<?php

namespace Sergiors\Functional\Tests;

use function Sergiors\Functional\gt;

class GtTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function gt()
    {
        $a = gt(10);
        $this->assertTrue($a(5));
        $this->assertTrue(gt(10, 5));
    }
}
