<?php

namespace Unit\Convertor\Filter;

use Convertor\Filter\HtmlDecode;
use PHPUnit\Framework\TestCase;

class HtmlDecodeTest extends TestCase
{
    /**
     * @dataProvider inputProvider
     * @param $original
     * @param $expected
     */
    public function testFilter($original, $expected)
    {
        $filter = new HtmlDecode();
        $response = $filter->filter($original);

        $this->assertEquals($expected, $response);
    }

    public function inputProvider()
    {
        return [
            [
                'Some&nbsp;&ndash;&nbsp;&quot;text&quot;',
                'Some – "text"'
            ],
        ];
    }
}