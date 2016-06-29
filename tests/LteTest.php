<?php

namespace Sergiors\Functional\Tests;

use Sergiors\Functional as F;

class LteTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function lte()
    {
        $this->assertFalse(F\lte(2, 1));
        $this->assertTrue(F\lte(2, 2));
        $this->assertTrue(F\lte(2, 3));
        $this->assertTrue(F\lte('a', 'z'));
        $this->assertFalse(F\lte('z', 'a'));
    }
}
