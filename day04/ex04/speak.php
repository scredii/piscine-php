<?php
session_start();
if ($_POST['submit'] == "OK" && $_POST['msg'] != "" && $_SESSION['login'])
{
    $time = time();
    if (file_exists("../private/chat") == FALSE)
		{
            $array = array(array('login'=>$_SESSION['login'], 'time'=>$time, 'msg'=>$_POST['msg']));
			$seri = serialize($array);
			file_put_contents("../private/chat", $seri);
			echo "OK";
		}
		else
        {
            $array = file_get_contents("../private/chat");
            $test = unserialize($array);
			$test[] = array('login'=>$_SESSION['login'], 'time'=>$time, 'msg'=>$_POST['msg']);
			$te = serialize($test);
			file_put_contents("../private/chat", $te);
		}
}
?>

<html>
    <head>
        <script langage="javascript">top.frames['chat'].location = './chat.php';</script>
    </head>
    <body>
	    <form method="POST" action="speak.php">
		    <input name="msg" type="text"/>
		    <input type="submit" name="submit" value="OK"/>
	    </form>
    </body>
</html>