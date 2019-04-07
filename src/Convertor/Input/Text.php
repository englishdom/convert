<?php

namespace Convertor\Input;

class Text implements InputInterface
{
    public function write($text): string
    {
        return $text;
    }
}