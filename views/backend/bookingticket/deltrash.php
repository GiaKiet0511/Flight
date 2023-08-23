<?php
use App\Models\Bookingticket;

$bookingticket = new Bookingticket();
$id = $_REQUEST["id"];

$data = array(
    'status' => 0
);
$bookingticket->bookingticket_update($data, $id);
header("location:index.php?option=bookingticket");