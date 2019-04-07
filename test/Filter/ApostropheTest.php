<?php

namespace Unit\Convertor\Filter;

use Convertor\Filter\Apostrophe;
use PHPUnit\Framework\TestCase;

class ApostropheTest extends TestCase
{
    /**
     * @dataProvider inputProvider
     * @param $original
     * @param $expected
     */
    public function testFilter($original, $expected)
    {
        $filter = new Apostrophe();
        $response = $filter->filter($original);

        $this->assertEquals($expected, $response);
    }

    public function inputProvider()
    {
        return [
            [
                'it‘s',
                'it\'s'
            ],
            [
                'work‛s',
                'work\'s'
            ],
            [
                'I’m',
                'I\'m'
            ],
            [
                'I`m',
                'I\'m'
            ],
        ];
    }
}