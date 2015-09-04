<?php

/*
 * This file is part of ElasticQueryBuilder.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPFluent\ElasticQueryBuilder;

use JsonSerializable;
use stdClass;

/**
 * A json builder.
 *
 * @author Kinn Coelho Julião <kinncj@gmail.com>
 */
class Query implements JsonSerializable
{
    /**
     * @var array
     */
    private $properties = [];

    /**
     * Create nested objects and set its value.
     *
     * @param string $field The attribute
     * @param mixed  $value The value
     *
     * @return Query $this->$field;
     */
    public function __call($field, $value)
    {
        $data = new self();
        if (count($value) > 0) {
            $data = $value[0];
        }

        $field = preg_replace_callback(
            '/[A-Z]/',
            function ($match) {
                return '_'.strtolower($match[0]);
            },
            $field
        );

        if (!isset($this->properties[$field])) {
            $this->properties[$field] = $data;
        }

        return $this->properties[$field];
    }

    /**
     * @return stdClass
     */
    public function jsonSerialize()
    {
        $data = new stdClass();
        foreach ($this->properties as $name => $value) {
            if ($value instanceof self) {
                $value = $value->jsonSerialize();
            }

            $data->$name = $value;
        }

        return $data;
    }

    /**
     * Serialize to JSON.
     *
     * @return string $this
     */
    public function __toString()
    {
        return json_encode($this);
    }
}
