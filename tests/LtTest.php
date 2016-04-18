<?php

namespace Sergiors\Functional\Tests;

use function Sergiors\Functional\lt;

class LtTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function gt()
    {
        $a = lt(10);
        $this->assertTrue($a(11));
        $this->assertFalse($a(9));
        $this->assertTrue(lt(5, 10));
    }
}
