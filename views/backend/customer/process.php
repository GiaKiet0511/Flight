<?php
use App\Models\Customer;

$customer = new Customer();
if (isset($_POST['THEM'])) {
    $data = $_POST['data'];
    $customer->customer_insert($data);
    header("location:index.php?option=customer");
}
if (isset($_POST['CAPNHAT'])) {
    $MaKH=$_POST['MaKH'];
    $data = $_POST['data'];
    $customer->customer_update($data, $MaKH);
    header("location:index.php?option=customer");
}
?>