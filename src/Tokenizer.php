<?php

namespace jr\countif;

class Tokenizer
{
    public function scan($code)
    {
        return token_get_all($code);
    }
}