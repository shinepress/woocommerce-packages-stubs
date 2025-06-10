# shinepress/woocommerce-package-stubs

[![Latest Version](https://img.shields.io/packagist/v/shinepress/woocommerce-package-stubs?label=latest)](https://packagist.org/packages/shinepress/woocommerce-package-stubs/)
[![Downloads](https://img.shields.io/packagist/dt/shinepress/woocommerce-package-stubs?label=downloads)](https://packagist.org/packages/shinepress/woocommerce-package-stubs/)

## Installation

The recommendend installation method is with composer:
```sh
$ composer require shinepress/woocommerce-package-stubs
```

## Usage

Just register the autoloader as a bootstrap file in your phpstan config:
```yaml
parameters:
    bootstrapFiles:
        - ./vendor/shinepress/woocommerce-package-stubs/autoload.php
```

## Attribution

All tagged releases are automatically generated from [php-stubs/woocommerce-stubs](https://github.com/php-stubs/woocommerce-stubs/).