<?php

namespace Unit\Convertor\Filter;

use Convertor\Filter\Dots;
use PHPUnit\Framework\TestCase;

class DotsTest extends TestCase
{
    /**
     * @dataProvider inputProvider
     * @param $original
     * @param $expected
     */
    public function testFilter($original, $expected)
    {
        $filter = new Dots();
        $response = $filter->filter($original);

        $this->assertEquals($expected, $response);
    }

    public function inputProvider()
    {
        return [
            [
                'Some text…',
                'Some text...'
            ],
        ];
    }
}