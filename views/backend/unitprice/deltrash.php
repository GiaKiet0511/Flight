<?php
use App\Models\Unitprice;

$unitprice = new Unitprice();
$MaDonGia = $_REQUEST["MaDonGia"];

$data = array(
    'status' => 0
);
$unitprice->unitprice_update($data, $MaDonGia);
header("location:index.php?option=unitprice");