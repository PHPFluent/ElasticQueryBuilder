<?php
/**
 * Copyright (c) 2013, PHPFluent.
 */
namespace PHPFluent\ElasticQueryBuilder;

/**
 * Numeric Range representation
 *
 * @author Kinn Coelho Julião <kinncj@gmail.com>
 */
class NumericRange
{
    /**
     * @var stdClass $numeri_range The Numeric range representation
     */
    public $numeric_range;

    /**
     * {@inherit}
     *
     * @param string $field The attribute name
     * @param string $lt    Less than
     * @param string $gte   Greater than 
     */
    public function __construct($field, $lt, $gte)
    {
        $this->numeric_range              = new \stdClass;
        $this->numeric_range->$field      = new \stdClass;
        $this->numeric_range->$field->lt  = $lt;
        $this->numeric_range->$field->gte = $gte;
    }
}
