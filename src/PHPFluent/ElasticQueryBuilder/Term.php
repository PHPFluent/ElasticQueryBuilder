<?php

/**
 * Copyright (c) 2013, PHPFluent.
 */
namespace PHPFluent\ElasticQueryBuilder;

use stdClass;

/**
 * Input representation.
 *
 * @author Kinn Coelho Julião <kinncj@gmail.com>
 */
class Term
{
    /**
     * @var stdClass The input representation
     */
    public $term;

    /**
     * {@inherit}.
     *
     * @param string $label The attribute name
     * @param mixed  $value The attribute value
     */
    public function __construct($label, $value)
    {
        $this->term = new stdClass();
        $this->term->$label = $value;
    }
}
