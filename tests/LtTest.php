<?php

namespace Sergiors\Functional\Tests;

use Sergiors\Functional as F;

class LtTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function lt()
    {
        $a = F\lt(10);
        $this->assertTrue($a(11));
        $this->assertFalse($a(9));
        $this->assertTrue(F\lt(5, 10));
    }
}
