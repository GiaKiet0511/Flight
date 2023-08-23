<?php
use App\Models\Flightdetails;

$flightdetails = new Flightdetails();
if (isset($_POST['THEM'])) {
    $data = $_POST['data'];
    $flightdetails->flightdetails_insert($data);
    header("location:index.php?option=flightdetails");
}
if (isset($_POST['CAPNHAT'])) {
    $MaCTChuyenBay=$_POST['MaCTChuyenBay'];
    $data = $_POST['data'];
    $flightdetails->flightdetails_update($data, $MaCTChuyenBay);
    header("location:index.php?option=flightdetails");
}
?>