#!/usr/bin/php
<?php
    function check_day($str)
    {
        if (preg_match("#^([lL]undi|^[Mm]ardi|^[Mm]ercredi|^[Jj]eudi|^[Vv]endredi|^[Ss]amedi|^[Dd]imanche)$#", $str))
            return (TRUE);
        return (FALSE);
    }

    function convert_to_nb($str)
    {
        if ($str == "Août" || $str == "août" || $str == "aout" || $str == "Août")
            return (8);
        elseif ($str == "Février" || $str == "février" || $str == "fevrier" || $str == "fevrier")
            return (2);
        elseif ($str == "Décembre" || $str == "décembre" || $str == "decembre" || $str == "Decembre")
            return (12);
        elseif (preg_match("/^[Jj]anvier$/", $str))
            return(1);
        elseif (preg_match("/^[Mm]ars$/", $str))
            return(3);            
        elseif (preg_match("/^[Aa]vril$/", $str))
            return(4);
        elseif (preg_match("/^[Mm]ai$/", $str))
            return(5);
        elseif (preg_match("/^[Jj]uin$/", $str))
            return(6);
        elseif (preg_match("/^[Jj]uillet$/", $str))
            return(7);
        elseif (preg_match("/^[Ss]eptembre$/", $str))
            return(9);
        elseif (preg_match("/^[Oo]ctobre$/", $str))
            return(10);
        elseif (preg_match("/^[Nn]ovembre$/", $str))
            return(11);
        else
            return (15);
    }

    function check_hour($str)
    {
        $newtab = explode(":", $str);
        if (count($newtab) == 3 && strlen($newtab[1]) == 2 && strlen($newtab[2]) == 2)
            return (TRUE);
        return (FALSE);
    }

    function valide_year($str)
    {
        if ($str < 1970)
            return (FALSE);
        return (TRUE);
    }

    if ($argc >= 2)
    {
        if ($argv[1] != "")
        {
            date_default_timezone_set('Europe/Paris');
            $arg = trim($argv[1]);
            if (!empty($arg))
            {
                $tab = explode(" ", $arg);
                if (!check_day($tab[0]))
                    exit("Wrong Format\n");
                if (($month = convert_to_nb($tab[2])) == 15)
                    exit("Wrong Format\n");
                if ($month <= 9)
                    $month = 0 . $month;
                if (strtotime($tab[4]) == FALSE || !check_hour($tab[4]))
                    exit("Wrong Format\n");
                if (valide_year($tab[3]) == FALSE)
                    exit("Wrong Format\n"); 
                if (!checkdate($month, $tab[1], $tab[3]))
                    exit("Wrong Format4\n");
                $format = "$tab[3]/$month/$tab[1] $tab[4]";
                $result = strtotime("$tab[3]/$month/$tab[1] $tab[4]");
                echo $result."\n";
            }
        }
    }
    else
        return (1);
?>