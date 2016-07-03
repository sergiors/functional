<?php

namespace Sergiors\Functional\Tests;

use Sergiors\Functional as F;

class IfelseTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function ifelse()
    {
        $ls = [
            'name' => 'James Tiberius Kirk'
        ];

        $upper = F\compose('strtoupper', F\prop('name'));

        $expected = F\ifelse(F\has('name'), $upper, F\always(false));
        $this->assertEquals($expected($ls), 'JAMES TIBERIUS KIRK');

        $expected = F\ifelse(F\has('lastname'), $upper, F\always(false));
        $this->assertFalse($expected($ls));
    }
}
