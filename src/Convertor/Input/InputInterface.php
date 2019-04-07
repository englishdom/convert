<?php

namespace Convertor\Input;

interface InputInterface
{
    public function write($text): string;
}