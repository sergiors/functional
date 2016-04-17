<?php

namespace Sergiors\Functional\Tests;

class EqualsTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function gt()
    {
        $bool = equals(true);
        $this->assertTrue($bool(true));
        $this->assertTrue(equals(1, 1));
        $this->assertTrue(equals([1], [1]));
    }
}
