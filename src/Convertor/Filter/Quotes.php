<?php

namespace Convertor\Filter;

class Quotes implements FilterInterface
{
    public function filter($text): string
    {
        return str_replace(['«','»','‹','›','„','“','‟','”'], '"', $text);
    }
}