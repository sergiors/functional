<?php

namespace Sergiors\Functional\Tests\Prelude;

use function Sergiors\Functional\{partial, allPass, get};

class AllPassTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function shouldPass()
    {
        $placeholders = [
            'to' => 'xxx@xxx.com',
            'from' => 'xxx@xxx.com'
        ];

        $has = partial('array_key_exists');
        $propEq = partial(function ($k, $v, array $xs) {
            return get($xs, $k, null) === $v;
        });

        $y = allPass([$has('from'), $has('to')]);
        $this->assertTrue($y($placeholders));

        $x = allPass([$propEq('rank', 'Q'), $propEq('suit', '♠︎')]);
        $this->assertTrue($x(['rank' => 'Q', 'suit' => '♠︎']));
        $this->assertFalse($x(['rank' => 'Q', 'suit' => '♣︎︎']));
    }
}
