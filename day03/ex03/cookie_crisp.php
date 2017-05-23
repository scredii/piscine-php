<?php
$time = 365 * 24 * 3600;
if (isset($_GET["action"]) && isset($_GET["name"])
{
    if ($_GET["action"] == "del")
        setcookie($_GET["name"], NULL, -1);
    
        
}
setcookie ("pseudo", time() + $time);

// a finir
?>