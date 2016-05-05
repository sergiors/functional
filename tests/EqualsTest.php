<?php

namespace Sergiors\Functional\Tests;

use Sergiors\Functional as F;

class EqualsTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function equals()
    {
        $bool = F\equals(true);
        $this->assertTrue($bool(true));
        $this->assertTrue(F\equals(1, 1));
        $this->assertTrue(F\equals([1], [1]));
    }
}
