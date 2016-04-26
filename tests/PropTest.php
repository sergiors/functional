<?php

namespace Sergiors\Functional\Tests;

use function Sergiors\Functional\prop;

class PropTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function has()
    {
        $name = prop('name');

        $this->assertEquals('Jack', $name(['name' => 'Jack']));
        $this->assertFalse($name([]));

        $this->assertEquals('Jack', prop('name', ['name' => 'Jack']));
    }
}
