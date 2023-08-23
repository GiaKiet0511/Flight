<?php
use App\Models\Customer;

$customer = new Customer();
$MaKH = $_REQUEST["MaKH"];

$data = array(
    'status' => 0
);
$customer->customer_update($data, $MaKH);
header("location:index.php?option=customer");