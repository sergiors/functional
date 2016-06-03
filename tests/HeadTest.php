<?php

namespace Sergiors\Functional\Tests;

use Sergiors\Functional as F;

class HeadTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function shouldReturnFirst()
    {
        $this->assertEquals(F\head([1, 2, 3, 4]), 1);
        $this->assertEquals(F\head(['a', 'b', 'c', 'd']), 'a');
        $this->assertEquals(F\head('abc'), 'a');
        $this->assertEquals(F\head(['a' => 'a', 'b' => 'b']), 'a');
    }

    /**
     * @test
     */
    public function shouldReturnFalse()
    {
        $this->assertFalse(F\head([]));
        $this->assertFalse(F\head(''));
        $this->assertFalse(F\head(null));
    }
}
