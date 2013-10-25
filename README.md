ElasticQueryBuilder
=====

A fluent query builder for Elastic Search.

| Tests | Releases | Downloads | 
| ----- |-------- | ------- | ------------- |
|[![Build Status](https://api.travis-ci.org/PHPFluent/ElasticQueryBuilder.png)](https://travis-ci.org/PHPFluent/ElasticQueryBuilder)|[![Latest Stable Version](https://poser.pugx.org/phpfluent/elastic-query-builder/v/stable.png)](https://packagist.org/packages/phpfluent/elastic-query-builder) [![Latest Stable Version](https://poser.pugx.org/phpfluent/elastic-query-builder/v/unstable.png)](https://packagist.org/packages/phpfluent/elastic-query-builder)|[![Total Downloads](https://poser.pugx.org/phpfluent/elastic-query-builder/downloads.png)](https://packagist.org/packages/phpfluent/elastic-query-builder)|
Install:
  ```shell
  composer.phar require phpfluent/elastic-query-builder:dev-master
  ```
Usage:
  ```php
  use PHPFluent\ElasticQueryBuilder\Query;
  use PHPFluent\ElasticQueryBuilder\Term;
  $builder = new Query;
  $builder->query()->filtered()->query()->match_all(new \stdClass);
  $builder->query()->filtered()->filter()->and(
    array(
      new Term("my.nested.label", "my_value"),
      new Term("my_label", "other_value")
    )
  );
  ```

Test:
  ```shell
  cd phpfluent/elastic-query-builder
  composer.phar install --dev
  make test
  ```
