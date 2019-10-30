<?php

namespace Convertor\Filter;

class HtmlDecode implements FilterInterface
{
    public function filter($text): string
    {
        return html_entity_decode(str_replace(['&nbsp;',' '], ' ', $text));
    }
}