<?php

namespace Sergiors\Functional\Tests;

use function Sergiors\Functional\prepend;

class PrependTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function prepend()
    {
        $this->assertEquals(['fee', 'fi', 'fo', 'fum'], prepend('fee', ['fi', 'fo', 'fum']));
    }
}
