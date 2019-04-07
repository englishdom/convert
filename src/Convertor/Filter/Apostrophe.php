<?php

namespace Convertor\Filter;

class Apostrophe implements FilterInterface
{
    public function filter($text): string
    {
        return str_replace(['‘','‛','’','`'], '\'', $text);
    }
}