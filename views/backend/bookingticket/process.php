<?php
use App\Models\Bookingticket;

$bookingticket = new Bookingticket();
if (isset($_POST['THEM'])) {
    $data = $_POST['data'];
    $bookingticket->bookingticket_insert($data);
    header("location:index.php?option=bookingticket");
}
if (isset($_POST['CAPNHAT'])) {
    $id=$_POST['id'];
    $data = $_POST['data'];
    $bookingticket->bookingticket_update($data, $id);
    header("location:index.php?option=bookingticket");
}
?>