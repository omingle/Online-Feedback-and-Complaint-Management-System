<?php
session_start();
unset($_SESSION['username']);
session_destroy();

header("Location: UserlOgin2.php");
exit;
?>