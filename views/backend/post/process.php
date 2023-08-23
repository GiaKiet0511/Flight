<?php
use App\Models\Post;

$post = new Post();
if (isset($_POST['THEM'])) {
    $data = $_POST['data'];
    $post->post_insert($data);
    header("location:index.php?option=post");
}
if (isset($_POST['CAPNHAT'])) {
    $Id=$_POST['Id'];
    $data = $_POST['data'];
    $post->post_update($data, $Id);
    header("location:index.php?option=post");
}
?>