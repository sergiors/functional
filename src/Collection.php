<?php

namespace Sergiors\Functional;

/**
 * @author Sérgio Rafael Siqueira <sergio@inbep.com.br>
 */
class Collection implements \ArrayAccess, \IteratorAggregate, \Countable
{
    /**
     * @var array
     */
    private $ls;

    /**
     * @param array $ls
     */
    public function __construct(array $ls)
    {
        $this->ls = $ls;
    }

    /**
     * @param callable $fn
     *
     * @return Collection
     */
    public function filter(callable $fn)
    {
        return new self(filter($fn, $this->ls));
    }

    /**
     * @param callable $fn
     *
     * @return Collection
     */
    public function map(callable $fn)
    {
        return new self(map($fn, $this->ls));
    }

    /**
     * @param callable $fn
     *
     * @return Collection
     */
    public function each(callable $fn)
    {
        return new self(each($fn, $this->ls));
    }

    /**
     * @param callable $fn
     *
     * @return mixed
     */
    public function reduce(callable $fn)
    {
        return reduce($fn, $this->ls);
    }

    /**
     * @param mixed $value
     *
     * @return Collection
     */
    public function prepend($value)
    {
        return new self(prepend($value, $this->ls));
    }

    /**
     * @param mixed $value
     *
     * @return Collection
     */
    public function append($value)
    {
        return new self(append($value, $this->ls));
    }

    /**
     * @return int
     */
    public function count()
    {
        return count($this->ls);
    }

    /**
     * @return \ArrayIterator
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->ls);
    }

    /**
     * @return array
     */
    public function toArray()
    {
        return $this->ls;
    }

    /**
     * @param mixed $offset
     *
     * @return bool
     */
    public function offsetExists($offset)
    {
        return has($offset, $this->ls);
    }

    /**
     * @param mixed $offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return get($this->ls, $offset, null);
    }

    /**
     * @param mixed $offset
     *
     * @param mixed $value
     */
    public function offsetSet($offset, $value)
    {
        if (null === $offset) {
            $this->ls[] = $value;
            return;
        }

        $this->ls[$offset] = $value;
    }

    /**
     * @param mixed $offset
     */
    public function offsetUnset($offset)
    {
        if ($this->offsetExists($offset)) {
            unset($this->ls[$offset]);
        }
    }
}
