<?php

namespace Unit\Convertor\Input;

use Convertor\Input\Text;
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
        $response = $filter->write($original);

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