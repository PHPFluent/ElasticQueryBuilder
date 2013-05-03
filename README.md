ElasticQueryBuilder
=====

A fluent query builder for Elastic Search.

Usage:
  ```php
  use PHPFluent\ElasticQueryBuilder\Query;
  use PHPFluent\ElasticQueryBuilder\Term;
  $query = new Query;
  $query->filtered->query->match_all = new \stdClass;
  $query->filtered->filter->and = array(new Term("my.nested.label", "my_value"), new Term("my_label", "other_value"));
   ```