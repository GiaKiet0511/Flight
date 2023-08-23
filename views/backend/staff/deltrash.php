<?php
use App\Models\Staff;

$staff = new Staff();
$MaNhanVien = $_REQUEST["MaNhanVien"];

$data = array(
    'status' => 0
);
$staff->staff_update($data, $MaNhanVien);
header("location:index.php?option=staff");