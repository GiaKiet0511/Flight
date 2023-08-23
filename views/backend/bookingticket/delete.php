<?php
use App\Models\Bookingticket;

$bookingticket = new Bookingticket();
$id = $_REQUEST["id"];

$bookingticket->bookingticket_delete($id);
header("location:index.php?option=bookingticket&cat=trash");