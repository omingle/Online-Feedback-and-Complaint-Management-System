<?php
session_start();
if(session_destroy())
{
    if($idcode=="")
    {
        header("Location: UserlOgin2.php");
    }
}
else {
    session_destroy();
    header("Location: UserlOgin2.php");
}
?>