<?php
use App\Models\Plane;

$plane = new Plane();
$MaMayBay = $_REQUEST["MaMayBay"];

$plane->plane_delete($MaMayBay);
header("location:index.php?option=plane&cat=trash");