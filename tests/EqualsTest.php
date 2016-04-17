<?php

namespace Sergiors\Functional\Tests;

use function Sergiors\Functional\equals;

class EqualsTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function equals()
    {
        $bool = equals(true);
        $this->assertTrue($bool(true));
        $this->assertTrue(equals(1, 1));
        $this->assertTrue(equals([1], [1]));
    }
}
