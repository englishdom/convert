<?php

namespace Unit\Convertor;

use PHPUnit\Framework\TestCase;
use Convertor\Converter;

class ConverterTest extends TestCase
{
    /**
     * @dataProvider inputProvider
     * @param $original
     * @param $expected
     */
    public function testInitConverter($original, $expected): void
    {
        $converter = new Converter();
        $response = $converter->convert($original);
        $this->assertEquals($expected, $response);
    }

    public function inputProvider()
    {
        return [
            [
                'it‘s a «super–man»',
                'it\'s a "super-man"'
            ],
        ];
    }
}