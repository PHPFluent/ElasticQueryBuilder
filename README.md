ElasticQueryBuilder
=====

A fluent query builder for Elastic Search.

Usage:
  ```php
  use PHPFluent\ElasticQueryBuilder\Query;
  use PHPFluent\ElasticQueryBuilder\Term;
  $builder = new Query;
  $builder->query()->filtered()->query()->match_all(new \stdClass)
  $builder->query()->filtered()->filter()->and(array(new Term("my.nested.label", "my_value"), new Term("my_label", "other_value")));
   ```