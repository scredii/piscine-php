#!/usr/bin/php
<?php
    $i = 1;
    $tab = array();
    while($i < $argc)
        {
            $arg = preg_replace('/\s+/', ' ', $argv[$i]);
            $arg = trim($arg);
            // echo $arg;
            $tab = array_merge($tab, $arg);
            $i++;
        }
        // $tab = explode(" ", $tab);
        print_r($tab);
        // sort($tab);
        foreach ($tab as $key => $val) 
        {
            echo $val."\n";
        }
        //not working
?>