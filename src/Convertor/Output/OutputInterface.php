<?php

namespace Convertor\Output;

interface OutputInterface
{
    public function read($text): string;
}