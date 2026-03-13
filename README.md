# Duck

[![CI](https://github.com/vasildakov/duck/actions/workflows/ci.yml/badge.svg)](https://github.com/vasildakov/duck/actions/workflows/ci.yml)
[![PHP Version Require](https://poser.pugx.org/vasildakov/duck/require/php)](https://packagist.org/packages/vasildakov/duck)
[![License](https://img.shields.io/github/license/vasildakov/duck)](LICENSE)
[![Coverage Status](https://coveralls.io/repos/github/vasildakov/duck/badge.svg?branch=master)](https://coveralls.io/github/vasildakov/duck?branch=master)

## Overview

Duck is a small educational PHP package that demonstrates the
composition-over-inheritance design principle using a duck behavior model.

Instead of hardcoding behavior in class hierarchies, each duck is composed from
interchangeable fly and quack strategies. This keeps behavior explicit,
testable, and easy to extend.

## Installation

```bash
composer require vasildakov/duck
```

## Quick Example

```php
<?php

declare(strict_types=1);

use CoI\Model\Duck\MallardDuck;
use CoI\Model\Duck\Fly\FlyWithWings;
use CoI\Model\Duck\Quack\Quack;

$duck = new MallardDuck(new FlyWithWings(), new Quack());

echo $duck->display() . PHP_EOL; // I'm a real Mallard duck
echo $duck->fly() . PHP_EOL;     // I'm flying!!
echo $duck->quack() . PHP_EOL;   // Quack
```

## Why Composition Over Inheritance

- behavior can be swapped without changing duck classes
- behavior is separated into focused, reusable strategy classes
- testing is simpler because each strategy is isolated
- extending with new behaviors does not require deep inheritance trees

## Background

"Composition over inheritance (or composite reuse principle) in object-oriented programming is the principle that classes should achieve polymorphic behavior and code reuse by their composition (by containing instances of other classes that implement the desired functionality) rather than inheritance from a base or parent class." [Wikipedia](https://en.wikipedia.org/wiki/Composition_over_inheritance)

> "If it looks like a duck, swims like a duck, and quacks like a duck, then it
> probably is a duck." [The Duck test](https://en.wikipedia.org/wiki/Duck_test)

> "If it looks like a duck and quacks like a duck but it needs batteries, you
> probably have the wrong abstraction."
> [Derick Bailey](https://lostechies.com/derickbailey/2009/02/11/solid-development-principles-in-motivational-pictures/)

## License

This package is licensed under the MIT License. See [`LICENSE`](LICENSE) for details.

## Author

- Vasil Dakov (<vasildakov@gmail.com>)

