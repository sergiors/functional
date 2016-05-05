<?php

namespace Sergiors\Functional\Tests;

use Sergiors\Functional as F;

class EachTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     * @dataProvider data
     */
    public function each($dbs)
    {
        $actual = F\each(function ($val, $key) use ($dbs) {
            $this->assertEquals($val, $dbs[$key]);
        });

        $this->assertEquals($dbs, $actual($dbs));
    }


    public function data()
    {
        $dbs = [
            'db1' => [
                'dsn' => '',
            ],
            'db2' => [
                'options' => [],
            ],
            'db3' => [],
        ];

        return [[$dbs]];
    }
}
