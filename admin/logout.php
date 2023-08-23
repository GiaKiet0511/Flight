<?php
session_start();
unset($_SESSION['useradmin']);
unset($_SESSION['userid']);
unset($_SESSION['username']);
header("location:login.php")
?>