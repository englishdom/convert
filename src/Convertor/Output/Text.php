<?php

namespace Convertor\Output;

class Text implements OutputInterface
{
    public function read($text): string
    {
        return $text;
    }
}