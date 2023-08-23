<?php
session_start();
if (!isset($_SESSION['useradmin'])) {
    header("location:login.php");
}
date_default_timezone_set('Asia/Ho_Chi_Minh');
require_once("views/frontend/home.php");

use App\Library\Route;

new Route('site');
?>