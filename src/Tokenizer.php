<?php

namespace jr\countif;

class Tokenizer
{
    const T_UNKNOWN_TOKEN = 0;

    public function scan($code): Tokens
    {
        $phpTokens = token_get_all($code);
        $tokenInstances = [];

        foreach ($phpTokens as $phpToken)
        {
            if (!is_array($phpToken))
            {
                $phpToken = array(self::T_UNKNOWN_TOKEN, $phpToken, null);
            }

            $Token = new Token($phpToken);
            $tokenInstances []= $Token;
        }

        return new Tokens($tokenInstances);
    }
}