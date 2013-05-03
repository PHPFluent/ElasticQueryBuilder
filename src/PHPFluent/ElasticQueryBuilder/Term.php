<?php
namespace PHPFluent\ElasticQueryBuilder;
class Term
{
    public $term;

    public function __construct($label, $value)
    {
        $this->term         = new \stdClass;
        $this->term->$label = $value;
    }
}
