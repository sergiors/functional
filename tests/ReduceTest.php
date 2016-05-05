<?php

namespace Sergiors\Functional\Tests;

use Sergiors\Functional as F;

class ReduceTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function reduce()
    {
        $musicians = [
            [
                'name' => 'James',
                'band_name' => 'Metallica',
            ],
            [
                'name' => 'Kirk',
                'band_name' => 'Metallica',
            ],
            [
                'name' => 'Ozzy',
                'band_name' => 'Black Sabbath',
            ],
            [
                'name' => 'Tony Iommi',
                'band_name' => 'Black Sabbath',
            ],
            [
                'name' => 'Buck Dharma',
                'band_name' => 'Blue Oyster Cult',
            ],
        ];

        $expected = [
            [
                'name' => 'James',
                'band_name' => 'Metallica',
            ],
            [
                'name' => 'Kirk',
                'band_name' => 'Metallica',
            ],
        ];

        $metallica = F\reduce(function ($acc, $musician) {
            if ($musician['band_name'] === 'Metallica') {
                $acc[] = $musician;
            }

            return $acc;
        }, $musicians);

        $this->assertEquals($metallica, $expected);
    }
}
