Functional
----------
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/sergiors/functional/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/sergiors/functional/?branch=master)
[![Code Coverage](https://scrutinizer-ci.com/g/sergiors/functional/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/sergiors/functional/?branch=master)
[![Build Status](https://scrutinizer-ci.com/g/sergiors/functional/badges/build.png?b=master)](https://scrutinizer-ci.com/g/sergiors/functional/build-status/master)

Motivation
----------
I did create this project to explore **Functional Programming**

Install
-------

```bash
composer require sergiors/functional "dev-master"
```

How to use
----------
```php
use function Sergiors\Functional\curry;

$addFourNumbers = funciton ($a, $b, $c, $d) {
    return $a + $b + $c + $d;
}

$curriedAddFourNumbers = curry($addFourNumbers);
$f = $curriedAddFourNumbers(1, 2);
$g = $f(3);
$g(4); // 10
```

API
---

Like [Ramda](http://ramdajs.com/) , functions are automatically curried

```
compose()
curry()
each()
equals()
filter()
flatten()
gt()
has()
head()
lt()
map()
not()
pipe()
prop()
reduce()
tail()
```

License
-------
MIT

