<?php

namespace Sergiors\Functional\Tests;

use Sergiors\Functional as F;

class PrependTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function prepend()
    {
        $this->assertEquals(F\prepend('fee', ['fi', 'fo', 'fum']), ['fee', 'fi', 'fo', 'fum']);
    }
}
