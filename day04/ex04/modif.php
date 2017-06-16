<?php
header("Refresh:2;url=index.html");
if ($_POST['login'] != "" && $_POST['oldpw'] != "" && $_POST['newpw'] != "")
{
    if ($_POST['submit'] == "OK")
    {
        if (file_exists("../private/passwd"))
        {
            $bool = FALSE;
            $array = file_get_contents("../private/passwd");
            $test = unserialize($array);
            $oldpw = hash('whirlpool', $_POST['oldpw']);
            $newpw = hash('whirlpool', $_POST['newpw']);
            $i = 0;
            foreach ($test as $elem)
            {
                if ($elem['login'] == $_POST['login'] && $elem['passwd'] == $oldpw)
                {
                    $bool = TRUE;
                    $test[$i]['passwd'] = $newpw;
                }
                $i++;
            }
            if ($bool)
            {
                    $newstr = serialize($test);
                    file_put_contents("../private/passwd", $newstr);
                    echo "OK\n";
            }
            else
                echo "ERROR\n";
        }
    }
}
else
    echo "ERROR\n";
?>
