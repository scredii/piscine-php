#!/usr/bin/php
<?php
echo "Entrez un nombre: "; 
$number = trim(fgets(STDIN));
if (!is_numeric($number))
    echo '\'' .$number. '\' n\'est pas un chiffre';
else
{
    if ($number % 2 == 0)
        echo "Le chiffre $number est Pair";
    else
        echo "Le chiffre $number est Impair";
}
?>