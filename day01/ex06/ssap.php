#!/usr/bin/php
<?php
    $tab = array();
    $full_tab = array();
    function ft_split($str)
    {
        $tab = explode(" ", $str);
        sort($tab);
        return($tab);
    }
    foreach($argv as $arg)
    {
        if ($arg == $argv[0])
        {
        }
        else
        {
            $tab = ft_split($arg);
            $full_tab = array_merge($tab, $full_tab);
        }
    }
    sort($full_tab);
    foreach ($full_tab as $key => $val) 
    {
            echo $val."\n";
    }
?>