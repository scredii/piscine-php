<?php
session_start();
include 'login.php';
if ($_SESSION['logged_on_user']  == "" || !$_SESSION['logged_on_user'])
    echo "ERROR\n";
else
    echo $_SESSION['logged_on_user']."\n";
?>