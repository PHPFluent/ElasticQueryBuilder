<?php
/**
 * Copyright (c) 2013, PHPFluent.
 */
namespace PHPFluent\ElasticQueryBuilder;

use stdClass;

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
    public $range;

    /**
     * {@inherit}
     *
     * @param string $field The attribute name
     * @param string $lte   Less than
     * @param string $gte   Greater than
     */
    public function __construct($field, $lte, $gte)
    {
        $this->range                        = new stdClass();
        $this->range->$field                = new stdClass();
        $this->range->$field->to            = (int) $lte;
        $this->range->$field->from          = (int) $gte;
    }
}
