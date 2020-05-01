<?php

namespace jr\countif;

class StringEndChecker
{
    public function is($string, $stringEnd)
    {
        return strcmp(substr($string, -1 * strlen($stringEnd)), $stringEnd) == 0;
    }
}