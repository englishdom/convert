<?php

namespace Unit\Convertor\Output;

use Convertor\Output\Text;
use PHPUnit\Framework\TestCase;

class TextTest extends TestCase
{
    /**
     * @dataProvider inputProvider
     * @param $original
     * @param $expected
     */
    public function testInput($original, $expected)
    {
        $filter = new Text();
        $response = $filter->read($original);

        $this->assertEquals($expected, $response);
    }

    public function inputProvider()
    {
        return [
            [
                'text',
                'text'
            ],
        ];
    }
}