<?php

namespace jr\countif;

class StringEndChecker
{
    public function is($string, $stringEnd): bool
    {
        return strcmp(substr($string, -1 * strlen($stringEnd)), $stringEnd) == 0;
    }
}