<?php

/*
 * This file is part of ElasticQueryBuilder.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
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
