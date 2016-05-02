<?php

namespace Sergiors\Functional\Tests;

use function Sergiors\Functional\each;
use function Sergiors\Functional\has;
use function Sergiors\Functional\equals;

class EachTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     * @dataProvider data
     */
    public function each($dbs)
    {
        $actual = each(function ($val, $key) use ($dbs) {
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
