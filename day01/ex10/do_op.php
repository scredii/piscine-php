#!/usr/bin/php
<?php
    if ($argc == 4)
    {
        if (trim($argv[2]) == "+")
            return (print($argv[1] + $argv[3]));
        else if (trim($argv[2]) == "-")
            return (print($argv[1] - $argv[3]));
        else if (trim($argv[2]) == "/")
            return (print($argv[1] / $argv[3]));
        else if (trim($argv[2]) == "*")
            return (print($argv[1] * $argv[3]));
        else if (trim($argv[2]) == "%")
            return (print($argv[1] % $argv[3]));
    }
    // afaire
?>