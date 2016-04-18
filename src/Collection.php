<?php

namespace Sergiors\Functional;

/**
 * @author Sérgio Rafael Siqueira <sergio@inbep.com.br>
 */
class Collection
{
    private $ls;

    /**
     * @param array $ls
     */
    public function __construct($ls)
    {
        $this->ls = $ls;
    }

    /**
     * @param \Closure $fn
     *
     * @return Collection
     */
    public function filter($fn)
    {
        return new self(filter($fn, $this->ls));
    }

    /**
     * @param \Closure $fn
     *
     * @return Collection
     */
    public function map($fn)
    {
        return new self(map($fn, $this->ls));
    }

    /**
     * @param \Closure $fn
     *
     * @return mixed
     */
    public function reduce($fn)
    {
        return reduce($fn, $this->ls);
    }
}
