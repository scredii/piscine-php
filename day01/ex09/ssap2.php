#!/usr/bin/php
<?php
    if ($argc < 2)
        exit();
    $order = " abcdefghijklmnopqrstuvwxyz0123456789 !\"#$%&'()*+,-./:;<=>?@[\]^_`{|}~";
    $tab2 = array();
    $i = 1;
    while ($i < $argc)
    {
        $tab = preg_split('/\ +/', $argv[$i], -1, PREG_SPLIT_NO_EMPTY);
        $tab2 = array_merge($tab2, $tab);
        $i++;
    }
    usort($tab2, function ($a, $b) use ($order) 
    {
        $i = 0;
        $pos_a = 0;
        $pos_b = 0;
        while ($pos_a === $pos_b)
        {
            $pos_a = stripos($order, $a[$i]);
            $pos_b = stripos($order, $b[$i]);
            if ($pos_a === false && $pos_b === false)
                return (0);
            ++$i;
        }
        return ($pos_a - $pos_b);
    });
    foreach ($tab2 as $elem)
    {
        echo "$elem\n";
    }
?>