<?php
session_start();
setcookie(session_name(), '', 100);
unset($_SESSION['admin']);
session_unset();
session_destroy();
$_SESSION = array();
header("Location: signin.php");