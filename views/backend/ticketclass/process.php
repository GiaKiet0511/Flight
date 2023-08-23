<?php
use App\Models\Ticketclass;

$ticketclass = new Ticketclass();
if (isset($_POST['THEM'])) {
    $data = $_POST['data'];
    $ticketclass->ticketclass_insert($data);
    header("location:index.php?option=ticketclass");
}
if (isset($_POST['CAPNHAT'])) {
    $MaHangVe=$_POST['MaHangVe'];
    $data = $_POST['data'];
    $ticketclass->ticketclass_update($data, $MaHangVe);
    header("location:index.php?option=ticketclass");
}
?>