<?php
use App\Models\Flight;

$flight = new Flight();
$MaChuyenBay = $_REQUEST["MaChuyenBay"];

$data = array(
    'status' => 2
);
$flight->flight_update($data, $MaChuyenBay);
header("location:index.php?option=flight&cat=trash");