<?php

namespace Sergiors\Functional\Tests;

use function Sergiors\Functional\each;
use function Sergiors\Functional\has;

class EachTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function each()
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
}
