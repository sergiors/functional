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
        $actual = each(function ($options) {
            $hasdsn = has('dsn');
            if ($hasdsn($options)) {
                return $options;
            }

            $options['dsn'] = null;
            return $options;
        });

        $expected = [
            'db1' => [
                'dsn' => ''
            ],
            'db2' => [
                'options' => [],
                'dsn' => null
            ],
            'db3' => [
                'dsn' => null
            ]
        ];

        $this->assertEquals($expected, $actual($dbs));
    }

    /**
     * @test
     * @dataProvider data
     */
    public function eachWithKeyParam($dbs)
    {
        $actual = each(function ($key, $options) {
            if (equals($key, 'db3')) {
                $options = null;
            }

            return $options;
        });
        
        $expected = [
            'db1' => [
                'dsn' => ''
            ],
            'db2' => [
                'options' => []
            ],
            'db3' => null
        ];

        $this->assertEquals($expected, $actual($dbs));
    }

    public function data()
    {
        $dbs = [
            'db1' => [
                'dsn' => ''
            ],
            'db2' => [
                'options' => []
            ],
            'db3' => []
        ];

        return [[$dbs]];
    }
}
