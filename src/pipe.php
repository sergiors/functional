<?php

namespace Sergiors\Functional;

const pipe = '\pipe';

/**
 * @author Sérgio Rafael Siqueira <sergio@inbep.com.br>
 *
 * Performs left-to-right function composition.
 * The leftmost function may have any arity; the remaining functions must be unary.
 *
 * @param \callable[] ...$callbacks
 * 
 * @return mixed
 */
function pipe(callable ...$callbacks)
{
    return new class(...$callbacks)
    {
        private $callbacks;

        public function __construct(callable ...$callbacks)
        {
            $this->callbacks = $callbacks;
        }

        public function pipe(callable ...$callbacks)
        {
            return pipe(...array_merge($this->callbacks, $callbacks));
        }

        public function __invoke($payload, ...$rest)
        {
            return array_reduce($this->callbacks, function ($payload, $callback) use ($rest) {
                return $callback($payload, ...$rest);
            }, $payload);
        }
    };
}
