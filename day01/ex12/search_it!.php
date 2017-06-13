#!/usr/bin/php
<?php
    if ($argc > 2)
    {
        if ($argv[1] != "" && $argv[2] != "")
        {
            $search = $argv[1];
            $array = $argv;
            $result = NULL;
            $i = 2;
            while ($array[$i])
            {
                $tmp = explode(":", $array[$i]);
                if ($tmp[0] == $search)
                    $result = $tmp[1];
                $i++;
            }
            if ($result)
                echo $result . "\n";
        }
    }
    else
        exit();
?>