<?php

namespace Sergiors\Functional\Tests;

use Sergiors\Functional\Collection;

class CollectionTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function fluent()
    {
        $scores = new Collection([
            'PushEvent' => 5,
            'CreateEvent' => 4,
            'IssuesEvent' => 3,
            'CommitCommentEvent' => 2
        ]);

        $x = $scores->filter(function ($a) {
            return $a >= 4;
        })->map(function ($a) {
            return $a + 1;
        })->reduce(function ($res, $a) {
            return $res + $a;
        }, 0);

        $this->assertEquals(11, $x);
    }
}
