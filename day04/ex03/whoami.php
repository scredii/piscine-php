<?php
session_start();
include 'login.php';
if ($_SESSION['login']  == "")
    echo "ERROR";
else
    echo $_SESSION['login']."\n";
?>