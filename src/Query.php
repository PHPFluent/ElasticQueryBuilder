<?php
namespace PHPFluent\ElasticQueryBuilder;
error_reporting(0);

class Query
{
    public $query;

    public function __construct()
    {
        $this->query = new \stdClass;
    }

    public function __set($field, $value)
    {
        $this->query->$field = $value;
    }

    public function __get($field)
    {
        if (! isset($this->query->$field)) {
            $this->query->$field = new \stdClass;
        }

        return $this->query->$field;
    }

    public function __toString()
    {
        return json_encode($this);
    }
}
