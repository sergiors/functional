<?php

namespace Sergiors\Functional\Tests;

use Sergiors\Functional as F;

class GteTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function gte()
    {
        $this->assertTrue(F\gte(10, 10));
        $this->assertFalse(F\gte(9, 10));
        $this->assertFalse(F\gte('a', 'z'));
        $this->assertTrue(F\gte('a', 'a'));
        $this->assertTrue(F\gte('z', 'a'));
    }
}
