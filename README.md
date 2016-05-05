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
}

$curriedAddFourNumbers = F\curry($addFourNumbers);
$f = $curriedAddFourNumbers(1, 2);
$g = $f(3);
$g(4); // 10
```

You can wrap an array with `Sergiors\Functional\Collection` to use fluent interface.

```php
use Sergiors\Functional\Collection;

$ls1 = new Collection([1, 2, 3, 4, 5, 6]);

$ls2 = $ls1->filter(function ($x) {
    return $x > 2;
})->map(function ($x) {
    return $x + 1;
});

print_r($ls1); // [1, 2, 3, 4, 5, 6]
print_r($ls2); // [4, 5, 6, 7]
```

API
---

Like [Ramda](http://ramdajs.com/) , functions are automatically curried

```
always()
append()
compose()
curry()
each()
equals()
filter()
flatten()
gt()
has()
head()
ifelse()
lt()
map()
not()
pipe()
prop()
prepend()
reduce()
tail()
```


```
Collection::filter()
Collection::map()
Collection::each()
Collection::reduce()
Collection::prepend()
Collection::append()
Collection::count()
Collection::getIterator()
Collection::toArray()
```
License
-------
MIT

