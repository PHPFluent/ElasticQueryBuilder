ElasticQueryBuilder
=====

A fluent query builder for Elastic Search.
[![Build Status](https://api.travis-ci.org/PHPFluent/ElasticQueryBuilder.png)](https://travis-ci.org/PHPFluent/ElasticQueryBuilder)


Usage:
  ```php
  use PHPFluent\ElasticQueryBuilder\Query;
  use PHPFluent\ElasticQueryBuilder\Term;
  $builder = new Query;
  $builder->query()->filtered()->query()->match_all(new \stdClass);
  $builder->query()->filtered()->filter()->and(array(new Term("my.nested.label", "my_value"), new Term("my_label", "other_value")));
   ```