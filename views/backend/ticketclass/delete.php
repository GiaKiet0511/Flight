<?php
use App\Models\Ticketclass;

$ticketclass = new Ticketclass();
$MaHangVe = $_REQUEST["MaHangVe"];

$ticketclass->ticketclass_delete($MaHangVe);
header("location:index.php?option=ticketclass&cat=trash");