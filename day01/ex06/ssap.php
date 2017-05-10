#!/usr/bin/php
<?php
    $i = 1;
    while($i < $argc)
        {
            $arg = preg_replace('/\s+/', ' ', $argv[$i]);
            $arg = trim($arg);
            $tab = explode(" ", $arg);
            sort($tab);
            var_dump($tab); 
            $i++;
        }
        //not working
?>