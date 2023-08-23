<?php
use App\Models\Post;

$post = new Post();
$Id = $_REQUEST["Id"];

$post->post_delete($Id);
header("location:index.php?option=post&cat=trash");