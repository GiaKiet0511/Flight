<?php
use App\Models\Staff;

$staff = new Staff();
$MaNhanVien = $_REQUEST["MaNhanVien"];

$staff->staff_delete($MaNhanVien);
header("location:index.php?option=staff&cat=trash");