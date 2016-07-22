<?php

namespace Sergiors\Functional\Tests;

use Sergiors\Functional as F;

class GetTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function get()
    {
        $ls = F\get([1, 2, 3]);

        $this->assertEquals(2, $ls(1));
        $this->assertFalse($ls(5));
        $this->assertEquals('missing', F\get(['a' => 1, 'b' => 2], 'z', 'missing'));
        $this->assertEquals('missing', F\get(['a' => 1, 'b' => null], 'b', 'missing'));
    }
}
