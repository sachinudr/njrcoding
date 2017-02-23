<?php
$flag = FALSE;
if (isset($_SERVER['PHP_AUTH_USER']) && isset($_SERVER['PHP_AUTH_PW']))
{
    $user = $_SERVER['PHP_AUTH_USER'];
    $pass = $_SERVER['PHP_AUTH_PW'];

    if ($username == 'user ' && $password == 'pass')
    {
        $flag = TRUE;
    }
}

if ( ! $flag)
{
    header('HTTP/1.0 401 Unauthorized');
}
?>
