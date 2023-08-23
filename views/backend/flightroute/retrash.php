<?php
use App\Models\Flightroute;

$flightroute = new Flightroute();
$MaTuyenBay = $_REQUEST["MaTuyenBay"];

$data = array(
    'status' => 2
);
$flightroute->flightroute_update($data, $MaTuyenBay);
header("location:index.php?option=flightroute&cat=trash");