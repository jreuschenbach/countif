<?php

namespace jr\countif;

class Tokenizer
{
    public function scan($code): Tokens
    {
        $phpTokens = token_get_all($code);
        $tokenInstances = [];

        foreach ($phpTokens as $phpToken)
        {
            $pToken = new Token($phpToken);
            $tokenInstances []= $pToken;
        }

        return new Tokens($tokenInstances);
    }
}