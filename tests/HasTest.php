<?php

namespace Sergiors\Functional\Tests;

use Sergiors\Functional as F;

class HasTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function has()
    {
        $hasName = F\has('name');

        $this->assertTrue($hasName(['name' => 'Jack']));
        $this->assertFalse($hasName([]));
    }

    /**
     * @test
     */
    public function withObject()
    {
        $hasName = F\has('name');

        $user = new \stdClass();
        $user->name = 'Jack';

        $this->assertTrue($hasName($user));
    }
}
