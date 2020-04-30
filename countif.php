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
        echo $count;
    }
    catch (Exception $pException)
    {
        echo $pException->getMessage();
    }

}