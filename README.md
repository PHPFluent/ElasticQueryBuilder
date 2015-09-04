# ElasticQueryBuilder

[![Build Status](https://img.shields.io/travis/PHPFluent/ElasticQueryBuilder/master.svg?style=flat-square)](http://travis-ci.org/PHPFluent/ElasticQueryBuilder)
[![Scrutinizer Code Quality](https://img.shields.io/scrutinizer/g/PHPFluent/ElasticQueryBuilder/master.svg?style=flat-square)](https://scrutinizer-ci.com/g/PHPFluent/ElasticQueryBuilder/?branch=master)
[![Code Coverage](https://img.shields.io/scrutinizer/coverage/g/PHPFluent/ElasticQueryBuilder/master.svg?style=flat-square)](https://scrutinizer-ci.com/g/PHPFluent/ElasticQueryBuilder/?branch=master)
[![Latest Stable Version](https://img.shields.io/packagist/v/phpfluent/elastic-query-builder.svg?style=flat-square)](https://packagist.org/packages/phpfluent/elastic-query-builder)
[![Total Downloads](https://img.shields.io/packagist/dt/phpfluent/elastic-query-builder.svg?style=flat-square)](https://packagist.org/packages/phpfluent/elastic-query-builder)
[![License](https://img.shields.io/packagist/l/phpfluent/elastic-query-builder.svg?style=flat-square)](https://packagist.org/packages/phpfluent/elastic-query-builder)

A fluent query builder for Elastic Search.

## Installation

Package is available on [Packagist](http://packagist.org/packages/phpfluent/elastic-query-builder),
you can install it using [Composer](http://getcomposer.org).

```shell
composer require phpfluent/elastic-query-builder
```

[PHP](https://php.net) 5.5+ or [HHVM](http://hhvm.com) 3.5+ are required.

## Usage

```php
$builder = new Query();
$builder->query()->filtered()->query()->match_all(new \stdClass());
$builder->query()->filtered()->filter()->and(
    [
        new Term('my.nested.label', 'my_value'),
        new Term('my_label', 'other_value'),
    ]
);

echo $builder.PHP_EOL;
```
