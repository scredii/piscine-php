#!/usr/bin/php
<?php
if ($argc > 1)
{
    $arg = preg_replace('/\s+/', ' ',$argv[1]);
    $tab = explode(" ", $arg);
    $max = count($tab) - 1;
    $tab[$max] = array_shift($tab);
    $i = -1;
    while($tab[++$i])
    {
        echo $tab[$i];
        if ($tab[$i + 1])
            echo " ";
    }
}
?>