<?php
if (!isset($_COOKIE['firsttime']))
{
    setcookie("firsttime", "no");
    header('Location: display.php');
    exit();
}
else
{
    header('Location: index.php');
    exit();
}
?>