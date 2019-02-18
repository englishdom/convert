<?php

use PHPUnit\Framework\TestCase;
use Convertor\Converter;

class ConvertorTest extends TestCase
{

    public function testInitConverter(): void
    {
        $converter = new Converter();
    }
}