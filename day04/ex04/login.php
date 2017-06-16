<?php
session_start();
include 'auth.php';
if ($_POST['login'] == "" && $_POST['passwd'] == "")
{
        header("Refresh:1;url=index.html");
        echo "Logging error\n";
        exit(1);
}
if ($_POST['login'] != "" && $_POST['passwd'] != "")
{
    if(auth($_POST['login'], $_POST['passwd']) == FALSE)
    {
        header("Refresh:1;url=index.html");
        echo "Logging error\n";
        exit(1);
    }
    else
        $_SESSION['login'] = $_POST['login'];
}
?>
<iframe name="chat" width="100%" height="550px" src="chat.php"></iframe>
<iframe name="speak" width="100%"  height="50px" src="speak.php"></iframe>