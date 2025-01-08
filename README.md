# PHP Skeleton

PHP Skeleton provides a ready-to-use structure for quickly developing a new PHP package.

[![tests](https://github.com/kadirzengin215/php-skeleton/actions/workflows/tests.yml/badge.svg)](https://github.com/kadirzengin215/php-skeleton/actions/workflows/tests.yml)
[![GitHub License](https://img.shields.io/github/license/kadirzengin215/php-skeleton)
](LICENSE)

<p align="center">
    <img src="docs/php-skeleton.jpeg" alt="PHP Skeleton" width="1000" height="400">
</p>

## Installation

Installation is super-easy via [Composer](https://getcomposer.org/):

```shell
composer require yourname/yourpackagename
```

## Usage

```php
<?php

declare(strict_types=1);

use Kadirzengin215\PhpSkeleton\Example;

$example = new Example;

$example->sayHello();
```

## Testing

```shell
composer test
```

## Change logs

All notable changes to this project will be documented in this section. See [CHANGELOG](CHANGELOG.md) for details.

## License

This project is open-sourced software licensed under the [MIT license](LICENSE).
