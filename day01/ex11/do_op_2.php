#!/usr/bin/php
<?php
function check_op($str)
{
    if (strchr($str, '+'))
    {
        $op = '+';
        return ($op);
    }
    if (strchr($str, '-'))
    {
        $op = '-';
        return ($op);
    }
    if (strchr($str, '/'))
    {
        $op = '/';
        return ($op);
    }
    if (strchr($str, '*'))
    {
        $op = '*';
        return ($op);
    }
    if (strchr($str, '%'))
    {
        $op = '%';
        return ($op);
    }
return (NULL);
}

if ($argc == 2)
{
    if (!$op = check_op($argv[1]))
        exit("Syntax Error\n");
    $arg = preg_replace('/\s+/', '',$argv[1]);
    $nb1 = explode($op, $arg);
    foreach ($nb1 as $key => $val) 
    {
            if (!is_numeric($val))
                exit("Syntax Error\n");
    }
    if ($op == "+")
        print($nb1[0] + $nb1[1]);
    else if ($op == "-")
        print($nb1[0] - $nb1[1]);
    else if ($op == "/")
        print($nb1[0] / $nb1[1]);
    else if ($op == "*")
        print($nb1[0] * $nb1[1]);
    else if ($op == "%")
        print($nb1[0] % $nb1[1]);
    echo "\n";
}
else
    echo "Incorrect Parameters\n";
?>