<?php
use App\Models\Flightdetails;

$flightdetails = new Flightdetails();
$MaCTChuyenBay = $_REQUEST["MaCTChuyenBay"];

$flightdetails->flightdetails_delete($MaCTChuyenBay);
header("location:index.php?option=flightdetails&cat=trash");