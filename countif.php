<?php

include('vendor/autoload.php');
use jr\countif\CountIf;

if (count($argv) <= 1)
{
    echo 'usage: php countIf.php pathToParse'."\n";
}
else
{
    $path = $argv[1];

    try
    {
        $CountIf = new CountIf();
        $count = $CountIf->count($path);
        echo 'Jedes "if" ist eine persönliche Niederlage für einen Entwickler. ';

        if ($count > 0)
        {
            echo 'In '.$path.' hast du '.$count.' Niederlagen erlitten'."\n";
        }
        else {
            echo 'In '.$path.' hast du keine Niederlagen erlitten!'."\n";
        }
    }
    catch (Exception $pException)
    {
        echo $pException->getMessage();
    }

}