<?php
use App\Models\Regulations;

$regulations = new Regulations();
$Id = $_REQUEST["Id"];

$data = array(
    'status' => 2
);
$regulations->regulations_update($data, $Id);
header("location:index.php?option=regulations&cat=trash");