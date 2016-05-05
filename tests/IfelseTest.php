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

        $expected = F\ifelse(F\has('name'), F\compose('strtoupper', F\prop('name')), F\always(false));
        $this->assertEquals($expected($ls), 'JAMES TIBERIUS KIRK');

        $expected = F\ifelse(F\has('lastname'), F\compose('strtoupper', F\prop('name')), F\always(false));
        $this->assertFalse($expected($ls));
    }
}
