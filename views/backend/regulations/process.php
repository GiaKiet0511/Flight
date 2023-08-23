<?php
use App\Models\Regulations;

$regulations = new Regulations();
if (isset($_POST['THEM'])) {
    $data = $_POST['data'];
    $regulations->regulations_insert($data);
    header("location:index.php?option=regulations");
}
if (isset($_POST['CAPNHAT'])) {
    $Id=$_POST['Id'];
    $data = $_POST['data'];
    $regulations->regulations_update($data, $Id);
    header("location:index.php?option=regulations");
}
?>