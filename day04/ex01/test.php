<?php
session_start();
if (isset($_POST["submit"]))
{
    if ($_POST["submit"] == "OK")
    {
        if ($_POST['login'] === "" || $_POST['passwd'] === "")
            echo "ERROR\n";
        else
        {
            $passwd = hash('whirlpool', $_POST['passwd']);
            if (file_exists("./private") == FALSE)
                mkdir("./private/", 0755, true);
            if (file_exists("./private/passwd") == FALSE)
            {
                $tab = array(array('login'=>$_POST['login'], 'passwd'=>$passwd));
                $str = serialize($tab);
                // print_r($str);
                file_put_contents("./private/passwd", $str);
            }
            else
            {
                $bool = FALSE;
                $str = file_get_contents("./private/passwd", true);
                // echo $array;
                $test = unserialize($str);
                print_r($test);
                foreach($test as $elem)
                    if ($elem['login'] == $_POST['login'])
                        $bool = TRUE;
                if ($bool == FALSE)
                {
                    // echo "bool false";
                    $tab = array(array('login'=>$_POST['login'], 'passwd'=>$passwd));
                    $str = serialize($tab);
                    file_put_contents("./private/passwd", $str, FILE_APPEND);
                }
            }
            $array = file_get_contents("./private/passwd");
            $tab_new = unserialize($array);
            foreach($tab_new as $key=> $yolo)
            {
                // echo $yolo['login']."\n";
                // echo $yolo['passwd'];
            }
            echo "OK\n";
        }
    }
    else
        echo "ERROR\n";
}
            // if ($bool == FALSE)
            //     die("ERROR\n");


            // if ()
            //si le login est ok on verifie le mot de passe, si le mot de passe est ok on met a jour le mot de passe

function filename_safe($name) 
{
    $except = array('\\', '/', ':', '*', '?', '"', '<', '>', '|');
    return str_replace($except, '', $name);
}
?>