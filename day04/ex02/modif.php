<?php
if ($_POST['login'] != "" && $_POST['oldpw'] != "" && $_POST['newpw'] != "")
{
    if ($_POST['submit'] == "OK")
    {
        if (file_exists("../ex01/private/passwd"))
        {
            $bool = FALSE;
            $array = file_get_contents("../ex01/private/passwd");
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
                    file_put_contents("../ex01/private/passwd", $newstr);
                    die("OK");
            }
            else
                echo "error";
        }
    }
}
?>
