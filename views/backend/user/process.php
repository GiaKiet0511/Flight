<?php
use App\Models\User;

$user = new User();
if (isset($_POST['THEM'])) {
    $data = $_POST['data'];
    $user->user_insert($data);
    header("location:index.php?option=user");
}
if (isset($_POST['CAPNHAT'])) {
    $id=$_POST['id'];
    $data = $_POST['data'];
    $user->user_update($data, $id);
    header("location:index.php?option=user");
}
?>