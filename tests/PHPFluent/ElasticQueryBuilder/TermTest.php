<?php

/*
 * This file is part of ElasticQueryBuilder.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPFluent\ElasticQueryBuilder\Tests;

/**
 * The Query Test.
 *
 * @author Kinn Coelho Julião <kinncj@gmail.com>
 */
class TermTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Should create a term.
     */
    public function testShouldCreateATerm()
    {
        $term = new  \PHPFluent\ElasticQueryBuilder\Term('Foo', 'Bar');

        $this->assertEquals('{"term":{"Foo":"Bar"}}', json_encode($term));
    }
}
