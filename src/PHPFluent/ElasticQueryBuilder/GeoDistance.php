<?php
/**
 * Copyright (c) 2013, PHPFluent.
 */
namespace PHPFluent\ElasticQueryBuilder;

/**
 * Geo Distance representation
 *
 * @author Kinn Coelho Julião <kinncj@gmail.com>
 */
class GeoDistance
{
    /**
     * @var stdClass $geo_distance The Geo distance representation
     */
    public $geo_distance;

    /**
     * {@inherit}
     *
     * @param string $field      The attribute name
     * @param string $distance   The distance, eg: 20km
     * @param string $coordinate array("lat"=>222,"lon"=>-222) 
     */
    public function __construct($field, $distance, array $coordinate = array())
    {

        $this->geo_distance           = new \stdClass;
        $this->geo_distance->distance = $distance;
        $this->geo_distance->$field   = new \stdClass;

        foreach ($coordinate as $name=>$value) {
            $this->geo_distance->$field->$name = $value;
        }
    }
}