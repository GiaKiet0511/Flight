<?php
use App\Models\Flightdetails;

$flightdetails = new Flightdetails();
$MaCTChuyenBay = $_REQUEST["MaCTChuyenBay"];

$data = array(
    'status' => 0
);
$flightdetails->flightdetails_update($data, $MaCTChuyenBay);
header("location:index.php?option=flightdetails");