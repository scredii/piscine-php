<?php
session_start();
if (file_exists("./private/chat") == TRUE)
{
    $array = file_get_contents("./private/chat");
    $test = unserialize($array);
    foreach($test as $elem)
    {
        echo "<br />";
        echo "[".date(H, $elem['time']).":".date(i, $elem['time'])."] ".$elem['login'].": ".$elem['msg']."<br />";
    }
}
?>