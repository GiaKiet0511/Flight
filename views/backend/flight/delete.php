<?php
use App\Models\Flight;

$flight = new Flight();
$MaChuyenBay = $_REQUEST["MaChuyenBay"];

$flight->flight_delete($MaChuyenBay);
header("location:index.php?option=flight&cat=trash");