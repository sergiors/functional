<?php

namespace Sergiors\Functional\Tests;

use Sergiors\Functional as F;

class AppendTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function append()
    {
        $this->assertEquals(F\append('tests', ['write', 'more']), ['write', 'more', 'tests']);

        $curry = F\append(['tests']);
        $this->assertEquals($curry(['write', 'more']), ['write', 'more', ['tests']]);
    }
}
