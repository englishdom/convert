<?php

namespace Convertor\Filter;

class HtmlStrip implements FilterInterface
{
    public function filter($text): string
    {
        return strip_tags($text);
    }
}