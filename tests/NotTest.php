<?php

namespace Sergiors\Functional\Tests;

use Sergiors\Functional as F;

class NotTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function not()
    {
        $this->assertFalse(F\not(true));
        $this->assertTrue(F\not(false));
    }
}
