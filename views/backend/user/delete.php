<?php
use App\Models\User;

$user = new User();
$id = $_REQUEST["id"];

$user->user_delete($id);
header("location:index.php?option=user&cat=trash");