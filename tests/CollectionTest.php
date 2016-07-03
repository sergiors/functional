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
        $arr = [
            'PushEvent' => 5,
            'CreateEvent' => 4,
            'IssuesEvent' => 3,
            'CommitCommentEvent' => 2,
        ];

        $scores = new Collection($arr);

        $x = $scores->filter(function ($a) {
            return $a >= 4;
        })->map(function ($a) {
            return $a + 1;
        })->each(function ($val, $key) use ($scores) {
            $this->assertEquals($scores[$key] + 1, $val);
        })->reduce(function ($acc, $x) {
            return $acc + $x;
        }, 0);

        $this->assertEquals(11, $x);
        $this->assertEquals($arr, $scores->toArray());
    }

    /**
     * @test
     */
    public function shouldConcatList()
    {
        $xs = new Collection([1, 2, 3]);
        $this->assertInstanceOf(Collection::class, $xs);
        $this->assertEquals([1, 2, 3, 4], $xs->concat([4])->toArray());
    }

    /**
     * @test
     */
    public function shouldReturnDiffObjects()
    {
        $ls = new Collection([1, 2, 3, 4, 6]);

        $ls2 = $ls->prepend('James');
        $this->assertNotSame($ls, $ls2);

        $ls3 = $ls2->append('Jack');
        $this->assertNotSame($ls2, $ls3);
    }

    /**
     * @test
     */
    public function shouldChangeArray()
    {
        $collection = new Collection(['name' => 'Jimi']);

        $this->assertTrue(isset($collection['name']));

        $collection['lastname'] = 'Hendrix';

        $this->assertTrue(isset($collection['lastname']));

        $collection[] = 'just value';
        $this->assertEquals(3, $collection->count());

        unset($collection[0]);
        unset($collection['tests']);
        $this->assertEquals(2, $collection->count());
    }

    /**
     * @test
     */
    public function shouldReturnArrayIterator()
    {
        $collection = new Collection([1, 2, 3]);
        $this->assertInstanceOf(\ArrayIterator::class, $collection->getIterator());
    }

    /**
     * @test
     */
    public function shouldReturnSortArray()
    {
        $this->assertEquals([1, 2, 3], (new Collection([2, 1, 3]))->sort()->toArray());
    }
}
