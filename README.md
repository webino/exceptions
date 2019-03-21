# Webino Exceptions

Slightly better exceptions.

[![Build Status](https://img.shields.io/travis/webino/exceptions/master.svg?style=for-the-badge)](http://travis-ci.org/webino/exceptions "Master Build Status")
[![Coverage Status](https://img.shields.io/coveralls/github/webino/exceptions/master.svg?style=for-the-badge)](https://coveralls.io/github/webino/exceptions?branch=master "Master Coverage Status")
[![Code Quality](https://img.shields.io/scrutinizer/g/webino/exceptions/master.svg?style=for-the-badge)](https://scrutinizer-ci.com/g/webino/exceptions/?branch=master "Master Code Quality")
[![Latest Stable Version](https://img.shields.io/github/tag/webino/exceptions.svg?label=STABLE&style=for-the-badge)](https://packagist.org/packages/webino/exceptions)


## Setup
[![PHP from Packagist](https://img.shields.io/packagist/php-v/webino/exceptions.svg?style=for-the-badge)](https://php.net "Required PHP version")

```bash
composer require webino\exceptions
```


## Quick Use

Exception message formatting:
```php
$exc = (new Exception('Exception %s, %s.'))->format($foo, $bar);
echo $exc->getMessage();

// => Exception `Foo`, `Bar`.
```


## Development

[![Build Status](https://img.shields.io/travis/webino/exceptions/develop.svg?style=for-the-badge)](http://travis-ci.org/webino/exceptions "Develop Build Status")
[![Coverage Status](https://img.shields.io/coveralls/github/webino/exceptions/develop.svg?style=for-the-badge)](https://coveralls.io/github/webino/exceptions?branch=develop "Develop Coverage Status")
[![Code Quality](https://img.shields.io/scrutinizer/g/webino/exceptions/develop.svg?style=for-the-badge)](https://scrutinizer-ci.com/g/webino/exceptions/?branch=develop "Develop Code Quality")
[![Latest Unstable Version](https://img.shields.io/github/tag-pre/webino/exceptions.svg?label=PREVIEW&style=for-the-badge)](https://packagist.org/packages/webino/exceptions "Packagist")


Static analysis:
```bash
composer analyse
```

Coding style check:
```bash
composer check
```

Coding style fix:
```bash 
composer fix
```

Testing:
```bash
composer test
```

Git pre-commit setup:
```bash
ln -s ../../pre-commit .git/hooks/pre-commit
```


## Addendum

[![License](https://img.shields.io/packagist/l/webino/exceptions.svg?style=for-the-badge)](https://github.com/webino/exceptions/blob/master/LICENSE.md "BSD-3-Clause License")
[![Total Downloads](https://img.shields.io/packagist/dt/webino/exceptions.svg?style=for-the-badge)](https://packagist.org/packages/webino/exceptions "Packagist") 
![GitHub code size in bytes](https://img.shields.io/github/languages/code-size/webino/exceptions.svg?style=for-the-badge)


  Please, if you are interested in this library report any issues and don't hesitate to contribute.
  We will appreciate any contributions on development of this library.

[![GitHub issues](https://img.shields.io/github/issues/webino/exceptions.svg?style=for-the-badge)](https://github.com/webino/exceptions/issues)
[![GitHub forks](https://img.shields.io/github/forks/webino/exceptions.svg?label=Fork&style=for-the-badge)](https://github.com/webino/exceptions)
