<?php

namespace Sergiors\Functional\Tests;

use function Sergiors\Functional\head;

class HeadTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function head()
    {
        $this->assertEquals(1, head([1, 2, 3, 4]));
        $this->assertEquals('a', head(['a', 'b', 'c', 'd']));
    }
}
