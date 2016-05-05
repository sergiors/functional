<?php

namespace Sergiors\Functional\Tests;

use Sergiors\Functional as F;

class HeadTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function head()
    {
        $this->assertEquals(F\head([1, 2, 3, 4]), 1);
        $this->assertEquals(F\head(['a', 'b', 'c', 'd']), 'a');
    }
}
