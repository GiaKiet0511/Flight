<?php
use App\Models\Flight;

$flight = new Flight();
if (isset($_POST['THEM'])) {
    $data = $_POST['data'];
    $flight->flight_insert($data);
    header("location:index.php?option=flight");
}
if (isset($_POST['CAPNHAT'])) {
    $MaChuyenBay=$_POST['MaChuyenBay'];
    $data = $_POST['data'];
    $flight->flight_update($data, $MaChuyenBay);
    header("location:index.php?option=flight");
}
?>