<?php

namespace Unit\Convertor\Filter;

use Convertor\Filter\Dash;
use PHPUnit\Framework\TestCase;

class DashTest extends TestCase
{
    /**
     * @dataProvider inputProvider
     * @param $original
     * @param $expected
     */
    public function testFilter($original, $expected)
    {
        $filter = new Dash();
        $response = $filter->filter($original);

        $this->assertEquals($expected, $response);
    }

    public function inputProvider()
    {
        return [
            [
                'super–test',
                'super-test'
            ],
            [
                'super—man',
                'super-man'
            ],
            [
                'super‒work',
                'super-work'
            ],
            [
                'spider―man',
                'spider-man'
            ],
        ];
    }
}