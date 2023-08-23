<?php
use App\Models\Invoice;

$invoice = new Invoice();
$MaHoaDon = $_REQUEST["MaHoaDon"];

$invoice->invoice_delete($MaHoaDon);
header("location:index.php?option=invoice&cat=trash");