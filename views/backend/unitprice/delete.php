<?php
use App\Models\Unitprice;

$unitprice = new Unitprice();
$MaDonGia = $_REQUEST["MaDonGia"];

$unitprice->unitprice_delete($MaDonGia);
header("location:index.php?option=unitprice&cat=trash");