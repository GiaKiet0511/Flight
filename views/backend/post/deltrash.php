<?php
use App\Models\Post;

$post = new Post();
$Id = $_REQUEST["Id"];

$data = array(
    'status' => 0
);
$post->post_update($data, $Id);
header("location:index.php?option=post");