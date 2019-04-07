<?php

namespace Unit\Convertor\Filter;

use Convertor\Filter\Quotes;
use PHPUnit\Framework\TestCase;

class QuotesTest extends TestCase
{
    /**
     * @dataProvider inputProvider
     * @param $original
     * @param $expected
     */
    public function testFilter($original, $expected)
    {
        $filter = new Quotes();
        $response = $filter->filter($original);

        $this->assertEquals($expected, $response);
    }

    public function inputProvider()
    {
        return [
            [
                '«text»',
                '"text"'
            ],
            [
                '‹text›',
                '"text"'
            ],
            [
                '„text“',
                '"text"'
            ],
            [
                '‟text”',
                '"text"'
            ],
        ];
    }
}