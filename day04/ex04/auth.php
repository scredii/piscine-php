<?php
function    auth($login, $passwd)
{
    if (file_exists("../private/passwd") == FALSE)
        return (FALSE);
    $passhash = hash('whirlpool', $passwd);
    $seri = file_get_contents("../private/passwd");
    $tab = unserialize($seri);
    $i = 0;
    foreach ($tab as $elem)
        if ($elem['login'] == $login && $elem['passwd'] == $passhash)
            return (TRUE);
    return (FALSE);
}
?>