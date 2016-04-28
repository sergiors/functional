<?php

namespace Sergiors\Functional\Tests;

use function Sergiors\Functional\append;

class AppendTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function append()
    {
        $this->assertEquals(['write', 'more', 'tests'], append('tests', ['write', 'more']));

        $curry = append(['tests']);
        $this->assertEquals(['write', 'more', ['tests']], $curry(['write', 'more']));
    }
}
