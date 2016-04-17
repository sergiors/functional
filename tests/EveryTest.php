<?php

namespace Sergiors\Functional\Tests;

class EveryTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function every()
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

        $actual = every(function ($options) {
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
}
