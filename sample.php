<?php

require __DIR__.'/vendor/autoload.php';

use PHPFluent\ElasticQueryBuilder\Query;
use PHPFluent\ElasticQueryBuilder\Term;

$builder = new Query();
$builder->query()->filtered()->query()->matchAll(new stdClass());
$builder->query()->filtered()->filter()->and(
    [
        new Term('my.nested.label', 'my_value'),
        new Term('my_label', 'other_value'),
    ]
);

echo $builder.PHP_EOL;
