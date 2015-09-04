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
class QueryTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var \PHPFluent\ElasticQueryBuilder\Query
     */
    private $queryBuilder;

    /**
     * {@inherit}.
     */
    public function setUp()
    {
        $this->queryBuilder = new \PHPFluent\ElasticQueryBuilder\Query();

        parent::setUp();
    }

    /**
     * Should create an empty json.
     */
    public function testShouldCreateAnEmptyJson()
    {
        $this->assertEquals('{}', (string) $this->queryBuilder);
    }

    /**
     * Should create an empty json.
     */
    public function testShouldSerializeAsJson()
    {
        $queryBuilder = clone $this->queryBuilder;
        $queryBuilder->query()->filtered()->query()->match_all(new \stdClass());

        $this->assertEquals('{"query":{"filtered":{"query":{"match_all":{}}}}}', json_encode($queryBuilder));
    }

    /**
     * Should create an empty json.
     */
    public function testShouldConvertCammelCaseToUndescore()
    {
        $queryBuilder = clone $this->queryBuilder;
        $queryBuilder->query()->matchAll(new \stdClass());

        $this->assertEquals('{"query":{"match_all":{}}}', json_encode($queryBuilder));
    }

    /**
     * Should create a complex json.
     */
    public function testShouldCreateComplexJson()
    {
        $queryBuilder = clone $this->queryBuilder;
        $queryBuilder->query()->filtered()->query()->match_all(new \stdClass());

        $this->assertEquals('{"query":{"filtered":{"query":{"match_all":{}}}}}', (string) $queryBuilder);
    }

    /**
     * Test functionally with Term.
     */
    public function testShouldCreateAnElasticQuery()
    {
        $queryBuilder = clone $this->queryBuilder;
        $queryBuilder->query()->filtered()->query()->match_all(new \stdClass());
        $queryBuilder->query()->filtered()->filter()->and(
            [
                new \PHPFluent\ElasticQueryBuilder\Term('my.nested.label', 'my_value'),
                new \PHPFluent\ElasticQueryBuilder\Term('my_label', 'other_value'),
                ]
            );

        $expectedJson = '{"query":{"filtered":{"query":{"match_all":{}},"filter":{"and":[{"term":{"my.nested.label":"my_value"}},{"term":{"my_label":"other_value"}}]}}}}';

        $this->assertEquals($expectedJson, (string) $queryBuilder);
    }
}
