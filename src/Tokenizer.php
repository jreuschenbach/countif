<?php

namespace jr\countif;

class Tokenizer
{
    public function scan($code)
    {
        return new Tokens(token_get_all($code));
    }
}