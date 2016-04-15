<?php

namespace Sergiors\Functional\Tests;

class HasTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function has()
    {
        $hasName = has('name');

        $this->assertTrue($hasName(['name' => 'Jack']));
        $this->assertFalse($hasName([]));
    }
}
