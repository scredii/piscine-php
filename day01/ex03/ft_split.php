#!/usr/bin/php
<?php
function ft_split($str)
{
    $str = preg_replace('/\s+/', ' ',$str);
    $tab = explode(" ", $str);
    if ($str != NULL)
        sort($tab);
    return ($tab);
}
// print_r(ft_split("2 2 1 4   55 6 7")); for the main
?>

