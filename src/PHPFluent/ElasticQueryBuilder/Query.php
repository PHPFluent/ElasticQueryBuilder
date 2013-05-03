<?php
namespace PHPFluent\ElasticQueryBuilder;

class Query
{
    public function __call($field, $value)
    {
        $data = new self;
        if (count($value) > 0) {
            $data = $value[0];
        }

        if ( ! isset($this->$field)) {
            $this->$field = $data;
        }

        return $this->$field;
    }

    public function __toString()
    {
        return json_encode($this);
    }
}
