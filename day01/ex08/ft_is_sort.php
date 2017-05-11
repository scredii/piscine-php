#!/usr/bin/php
<?php
function ft_is_sort($tab)
{
    $tmp = $tab;
    sort($tmp);
    if ($tab == $tmp)
        return(1);
    else
    {
        $tmp = $tab;
        rsort($tmp);
        if ($tab == $tmp)
            return(1);
        else
            return(0);
    }
}
//   $tab = array("1", "2", "3");
//   print_r(ft_is_sort($tab));
?>