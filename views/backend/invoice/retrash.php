<?php
use App\Models\Invoice;

$invoice = new Invoice();
$MaHoaDon = $_REQUEST["MaHoaDon"];

$data = array(
    'status' => 2
);
$invoice->invoice_update($data, $MaHoaDon);
header("location:index.php?option=invoice&cat=trash");