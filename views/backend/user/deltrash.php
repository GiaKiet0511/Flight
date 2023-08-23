<?php
use App\Models\User;

$user = new User();
$id = $_REQUEST["id"];

$data = array(
    'status' => 0
);
$user->user_update($data, $id);
header("location:index.php?option=user");