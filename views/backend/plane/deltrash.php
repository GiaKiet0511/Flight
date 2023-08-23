<?php
use App\Models\Plane;

$plane = new Plane();
$MaMayBay = $_REQUEST["MaMayBay"];

$data = array(
    'status' => 0
);
$plane->plane_update($data, $MaMayBay);
header("location:index.php?option=plane");