<?php
use App\Models\Planeticket;

$planeticket = new Planeticket();
if (isset($_POST['THEM'])) {
    $data = $_POST['data'];
    $planeticket->planeticket_insert($data);
    header("location:index.php?option=planeticket");
}
if (isset($_POST['CAPNHAT'])) {
    $MaVe=$_POST['MaVe'];
    $data = $_POST['data'];
    $planeticket->planeticket_update($data, $MaVe);
    header("location:index.php?option=planeticket");
}
?>