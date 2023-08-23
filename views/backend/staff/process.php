<?php
use App\Models\Staff;

$staff = new Staff();
if (isset($_POST['THEM'])) {
    $data = $_POST['data'];
    $staff->staff_insert($data);
    header("location:index.php?option=staff");
}
if (isset($_POST['CAPNHAT'])) {
    $MaNhanVien=$_POST['MaNhanVien'];
    $data = $_POST['data'];
    $staff->staff_update($data, $MaNhanVien);
    header("location:index.php?option=staff");
}
?>