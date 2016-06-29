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
        $x = F\lt(10);
        $this->assertTrue($x(11));
        $this->assertFalse($x(9));
        $this->assertTrue(F\lt(5, 10));
    }
}
