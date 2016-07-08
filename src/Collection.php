<?php

namespace Sergiors\Functional;

/**
 * @author Sérgio Rafael Siqueira <sergio@inbep.com.br>
 */
class Collection implements \IteratorAggregate, \Countable
{
    /**
     * @var array
     */
    private $xs;

    /**
     * @param array $xs
     */
    public function __construct(array $xs)
    {
        $this->xs = $xs;
    }

    /**
     * @param mixed $offset
     *
     * @return mixed
     */
    public function get($offset)
    {
        return get($this->xs, $offset);
    }

    /**
     * @param mixed $offset
     *
     * @return mixed
     */
    public function has($offset)
    {
        return has($offset, $this->xs);
    }

    /**
     * @param array $xs
     *
     * @return Collection
     */
    public function concat($xs)
    {
        return new self(concat($this->xs, $xs));
    }

    /**
     * @param callable $fn
     *
     * @return Collection
     */
    public function filter(callable $fn)
    {
        return new self(filter($fn, $this->xs));
    }

    /**
     * @param callable $fn
     *
     * @return Collection
     */
    public function map(callable $fn)
    {
        return new self(map($fn, $this->xs));
    }

    /**
     * @param callable $fn
     *
     * @return Collection
     */
    public function each(callable $fn)
    {
        return new self(each($fn, $this->xs));
    }

    /**
     * @param mixed $x
     *
     * @return Collection
     */
    public function prepend($x)
    {
        return new self(prepend($x, $this->xs));
    }

    /**
     * @param mixed $x
     *
     * @return Collection
     */
    public function append($x)
    {
        return new self(append($x, $this->xs));
    }

    /**
     * @return Collection
     */
    public function sort()
    {
        return new self(sort($this->xs));
    }

    /**
     * @param callable   $fn
     * @param mixed|null $initial
     *
     * @return mixed
     */
    public function reduce(callable $fn, $initial = null)
    {
        return reduce($fn, $this->xs, $initial);
    }

    /**
     * @return int
     */
    public function count()
    {
        return count($this->xs);
    }

    /**
     * @return \ArrayIterator
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->xs);
    }

    /**
     * @return array
     */
    public function toArray()
    {
        return $this->xs;
    }
}
