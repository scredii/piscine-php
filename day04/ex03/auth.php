<?php
function    auth($login, $passwd)
{
    $passhash = hash('whirlpool', $passwd);
    $seri = file_get_contents("../ex01/private/passwd");
    $tab = unserialize($seri);
    $i = 0;
    foreach ($tab as $elem)
        if ($elem['login'] == $login && $elem['passwd'] == $passhash)
            return (TRUE);
    return (FALSE);
}
?>