<?php
use App\Models\Ticketclass;

$ticketclass = new Ticketclass();
$MaHangVe = $_REQUEST["MaHangVe"];

$data = array(
    'status' => 2
);
$ticketclass->ticketclass_update($data, $MaHangVe);
header("location:index.php?option=ticketclass&cat=trash");