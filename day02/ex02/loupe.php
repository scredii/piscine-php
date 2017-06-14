#!/usr/bin/php
<?php
    if ($argc == 2)
    {
        if ($argv[1] != "")
        {
            $page = file_get_contents($argv[1]);
            $result = array();
            $page = preg_replace_callback("#<a href="(.+)" title="(.+)">(.+)</a>#", , $result);
            echo $page;
        }
    }
    else
        return (0);
?>