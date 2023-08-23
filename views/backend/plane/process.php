<?php
use App\Models\Plane;

$plane = new Plane();
if (isset($_POST['THEM'])) {
    $data = $_POST['data'];
    $plane->plane_insert($data);
    header("location:index.php?option=plane");
}
if (isset($_POST['CAPNHAT'])) {
    $MaMayBay=$_POST['MaMayBay'];
    $data = $_POST['data'];
    $plane->plane_update($data, $MaMayBay);
    header("location:index.php?option=plane");
}
?>