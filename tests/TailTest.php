<?php

namespace Sergiors\Functional\Tests;

use Sergiors\Functional as F;

class TailTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function tail()
    {
        $this->assertEquals(F\tail([1, 2, 3, 4]), [2, 3, 4]);
        $this->assertEquals(F\tail(['a', 'b', 'c', 'd']), ['b', 'c', 'd']);
    }
}
