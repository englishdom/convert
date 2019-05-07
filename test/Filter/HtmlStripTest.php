<?php

namespace Unit\Convertor\Filter;

use Convertor\Filter\HtmlStrip;
use PHPUnit\Framework\TestCase;

class HtmlStripTest extends TestCase
{
    /**
     * @dataProvider inputProvider
     * @param $original
     * @param $expected
     */
    public function testFilter($original, $expected)
    {
        $filter = new HtmlStrip();
        $response = $filter->filter($original);

        $this->assertEquals($expected, $response);
    }

    public function inputProvider()
    {
        return [
            [
                '<a href="#">Some <bold>text</bold></a>',
                'Some text'
            ],
        ];
    }
}