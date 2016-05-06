<?php

namespace Sergiors\Functional\Tests;

use Sergiors\Functional as F;

class PropTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function prop()
    {
        $name = F\prop('name');

        $this->assertEquals($name(['name' => 'Jack']), 'Jack');
        $this->assertFalse($name([]));

        $this->assertEquals(F\prop('name', ['name' => 'Jack']), 'Jack');
    }
}
