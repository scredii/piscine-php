<?php
session_start();
include 'auth.php';
if ($_GET['login'] != "" && $_GET['passwd'] != "")
{
    if(auth($_GET['login'], $_GET['passwd']) == TRUE)
    {
        $_SESSION['login'] = $_GET['login'];
        echo "OK\n";
    }
    else
    {
        $_SESSION['login'] = "";
        echo "ERROR\n";
    }
}
?>