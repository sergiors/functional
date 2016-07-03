Functional
----------
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/sergiors/functional/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/sergiors/functional/?branch=master)
[![Code Coverage](https://scrutinizer-ci.com/g/sergiors/functional/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/sergiors/functional/?branch=master)
[![Build Status](https://scrutinizer-ci.com/g/sergiors/functional/badges/build.png?b=master)](https://scrutinizer-ci.com/g/sergiors/functional/build-status/master)

Motivation
----------
I did create this project to explore **Functional Programming**.  
**This project doesn't use any loop!**

Install
-------

```bash
composer require sergiors/functional "dev-master"
```

How to use
----------
```php
use Sergiors\Functional as F;

$addFourNumbers = funciton ($a, $b, $c, $d) {
    return $a + $b + $c + $d;
};

$partialAddFourNumbers = F\partial($addFourNumbers);
$f = $partialAddFourNumbers(1, 2);
$g = $f(3);

echo $g(4); // => 10
```

You can hold native functions with `Sergiors\Funcional\hold`.

```php
use Sergiors\Functional as F;

$implode = F\hold('implode', ',');
echo $implode(['a', 'b']); // => a,b

// something more complex
$pipe = F\pipe(
    F\hold('array_slice', F\_, 2),
    F\hold('array_map', function ($x) {
        return $x * 2;
    }),
    F\hold('implode', ',')
);

echo $pipe([10, 20, 30, 40, 50]); // => 60,80,100
```

`Sergiors\Functional\_` is the placeholder for payload. If you don't set the placeholder, the payload will be last argument.

Collection
----------

You can wrap an array with `Sergiors\Functional\Collection` to use fluent interface.

```php
use Sergiors\Functional\Collection;

$ls1 = new Collection([1, 2, 3, 4, 5, 6]);

$ls2 = $ls1->filter(function ($x) {
    return $x > 2;
})->map(function ($x) {
    return $x + 1;
});

print_r($ls1->toArray()); // => [1, 2, 3, 4, 5, 6]
print_r($ls2->toArray()); // => [4, 5, 6, 7]
```

API
---

All functions are automatically applied partial application.

```
always()
append()
compose()
concat()
diff()
drop()
each()
equals()
filter()
flatten()
get()
getin()
gt()
gte()
has()
head()
hold()
id()
ifelse()
last()
lt()
lte()
map()
not()
partial()
pipe()
prop()
prepend()
reduce()
tail()
take()
takewhile()
```


```
Collection::concat()
Collection::filter()
Collection::map()
Collection::each()
Collection::prepend()
Collection::append()
Collection::reduce()
Collection::count()
Collection::getIterator()
Collection::toArray()
```

License
-------
MIT

