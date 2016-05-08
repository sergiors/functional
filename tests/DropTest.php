<?php

namespace Sergiors\Functional\Tests;

use Sergiors\Functional as F;

class DropTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function drop()
    {
        $this->assertEquals([4, 5], F\drop(3, [1, 2, 3, 4, 5]));
        $this->assertEquals([], F\drop(5, [1, 2, 3, 4, 5]));
    }
}
