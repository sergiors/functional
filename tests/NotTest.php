<?php

namespace Sergiors\Functional\Tests;

use function Sergiors\Functional\not;

class NotTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function not()
    {
        $this->assertFalse(not(true));
        $this->assertTrue(not(false));
    }
}
