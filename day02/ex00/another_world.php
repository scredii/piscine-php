#!/usr/bin/php
<?php
if ($argc >= 2)
{
    if ($argv[1] != "")
    {
        $arg = trim($argv[1]);
        if (!empty($arg))
        {
            $arg = preg_replace('/\s+/', ' ',$arg);
            echo $arg."\n";
        }
    }
}
else
    return (1);
?>