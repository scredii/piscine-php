<?php
session_start();
include 'auth.php';
if ($_POST['login'] != "" && $_POST['passwd'] != "")
{
    if(auth($_POST['login'], $_POST['passwd']) == FALSE)
    {
        header("Refresh:1;url=http://localhost:8888/Day04/ex05/index.html");
        echo "Logging error\n";
        exit(1);
    }
    else
        $_SESSION['login'] = $_POST['login'];
}
?>
<iframe width="100%" height="350px" frameborder="0" marginheight="0"  
        marginwidth="0" name="chat" src="http://localhost:8888/Day04/ex05/chat.php"></iframe>
<iframe name="speak" width="100%"  height="150px" frameborder="0" marginheight="0"  
        marginwidth="0" src="http://localhost:8888/Day04/ex05/speak.php"></iframe>