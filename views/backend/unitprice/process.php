<?php
use App\Models\Unitprice;

$unitprice = new Unitprice();
if (isset($_POST['THEM'])) {
    $data = $_POST['data'];
    $unitprice->unitprice_insert($data);
    header("location:index.php?option=unitprice");
}
if (isset($_POST['CAPNHAT'])) {
    $MaDonGia=$_POST['MaDonGia'];
    $data = $_POST['data'];
    $unitprice->unitprice_update($data, $MaDonGia);
    header("location:index.php?option=unitprice");
}
?>