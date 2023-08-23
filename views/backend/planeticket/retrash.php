<?php
use App\Models\Planeticket;

$planeticket = new Planeticket();
$MaVe = $_REQUEST["MaVe"];

$data = array(
    'status' => 2
);
$planeticket->planeticket_update($data, $MaVe);
header("location:index.php?option=planeticket&cat=trash");