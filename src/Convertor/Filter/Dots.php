<?php

namespace Convertor\Filter;

class Dots implements FilterInterface
{
    public function filter($text): string
    {
        return str_replace('…', '...', $text);
    }

}