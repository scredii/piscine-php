#!/usr/bin/php
<?php
function ft_is_sort($tab)
{
    $tmp = $tab;
    sort($tmp);
    print_r($tab);
    print_r($tmp);
    if (array_diff_uassoc( $tab, $tmp))
    {
        echo "HERE";
        echo "Le tableau est trie\n";
    }
    else
    {
        $tmp = $tab;
        rsort($tmp);
        if (array_diff_uassoc($tab, $tmp) == NULL)
        {
            echo "Le tableau est trie\n";
            echo "HERE";
        }
        else
            echo "Le tableau n\'est pas trie\n";
    }
}

$tab = array("Hello", "salut", "Hi");
ft_is_sort($tab);
?>