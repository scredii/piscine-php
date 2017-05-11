#!/usr/bin/php
<?php
if ($argc == 2)
{
    //!strnatcmp($argv[1], "+-*/%")
    $i = 0;
    trim($argv[1]);
    while($argv[1][$i])
    {
        if (!is_numeric($argv[1][$i]))
            return(print("Syntax Error"));
        $i++;
    }
}
else
    echo "Incorrect Parameters";
?>