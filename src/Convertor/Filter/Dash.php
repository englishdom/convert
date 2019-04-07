<?php

namespace Convertor\Filter;

class Dash implements FilterInterface
{
    public function filter($text): string
    {
        return str_replace(['–','—','‒','―'], '-', $text);
    }
}