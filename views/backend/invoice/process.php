<?php
use App\Models\Invoice;

$invoice = new Invoice();
if (isset($_POST['THEM'])) {
    $data = $_POST['data'];
    $invoice->invoice_insert($data);
    header("location:index.php?option=invoice");
}
if (isset($_POST['CAPNHAT'])) {
    $MaSanBay=$_POST['MaSanBay'];
    $data = $_POST['data'];
    $invoice->invoice_update($data, $MaSanBay);
    header("location:index.php?option=invoice");
}
?>