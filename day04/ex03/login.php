<?php
session_start();
include 'auth.php';
if ($_GET['login'] != "" && $_GET['passwd'] != "")
{
    if(auth($_GET['login'], $_GET['passwd']) == TRUE)
    {
        $_SESSION['logged_on_user'] = $_GET['login'];
        echo "OK\n";
    }
    else
    {
        $_SESSION['logged_on_user'] = "";
        echo "ERROR\n";
    }
}
?>