<?php
use App\Models\Flightroute;

$flightroute = new Flightroute();
$MaTuyenBay = $_REQUEST["MaTuyenBay"];

$flightroute->flightroute_delete($MaTuyenBay);
header("location:index.php?option=flightroute&cat=trash");