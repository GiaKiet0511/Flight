<?php
use App\Models\Customer;

$customer = new Customer();
$MaKH = $_REQUEST["MaKH"];

$customer->customer_delete($MaKH);
header("location:index.php?option=customer&cat=trash");