<?php

namespace Sergiors\Functional\Tests;

use Sergiors\Functional as F;

class IdTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function id()
    {
        $this->assertEquals(10, F\id(10));
    }
}
