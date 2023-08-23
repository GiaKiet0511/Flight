<?php
use App\Models\Bookingticket;

$bookingticket = new Bookingticket();
$id = $_REQUEST["id"];

$data = array(
    'status' => 2
);
$bookingticket->bookingticket_update($data, $id);
header("location:index.php?option=bookingticket&cat=trash");