<?php
function ft_split($str)
{
    $str = preg_replace('/\s+/', ' ',$str);
    $tab = explode(" ", $str);
    if ($str != NULL)
        sort($tab);
    return ($tab);
}
?>

