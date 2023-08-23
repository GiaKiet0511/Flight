<?php
use App\Models\Planeticket;

$planeticket = new Planeticket();
$MaVe = $_REQUEST["MaVe"];

$planeticket->planeticket_delete($MaVe);
header("location:index.php?option=planeticket&cat=trash");