<?php
use App\Models\Flightroute;

$flightroute = new Flightroute();
if (isset($_POST['THEM'])) {
    $data = $_POST['data'];
    $flightroute->flightroute_insert($data);
    header("location:index.php?option=flightroute");
}
if (isset($_POST['CAPNHAT'])) {
    $MaTuyenBay=$_POST['MaTuyenBay'];
    $data = $_POST['data'];
    $flightroute->flightroute_update($data, $MaTuyenBay);
    header("location:index.php?option=flightroute");
}
?>