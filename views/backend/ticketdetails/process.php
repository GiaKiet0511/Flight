<?php
use App\Models\Ticketdetails;

$ticketdetails = new Ticketdetails();
if (isset($_POST['THEM'])) {
    $data = $_POST['data'];
    $ticketdetails->ticketdetails_insert($data);
    header("location:index.php?option=ticketdetails");
}
if (isset($_POST['CAPNHAT'])) {
    $MaCTVe=$_POST['MaCTVe'];
    $data = $_POST['data'];
    $ticketdetails->ticketdetails_update($data, $MaCTVe);
    header("location:index.php?option=ticketdetails");
}
?>