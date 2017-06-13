<?php
function ft_is_sort($tab)
{
    $tmp = $tab;
    sort($tmp);
    if ($tab == $tmp)
        return(TRUE);
    else
    {
        $tmp = $tab;
        rsort($tmp);
        if ($tab == $tmp)
            return(TRUE);
        else
            return(FALSE);
    }
}
?>